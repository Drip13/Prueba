<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Language;
use App\Mail\NotificacionEmpresa;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;



/**
 * Class EmpresaController
 * @package App\Http\Controllers
 */
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::paginate();

        return view('empresa.index', compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa = new Empresa();
        return view('empresa.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empresa::$rulesCreate);
        $empresa = request()->except('_token');
        
        $mensaje=[
            'logo.required'=>'El logo es obligatorio'
        ];

        if($request->hasFile('logo')){
            $empresa['logo']=$request->file('logo')->store('','public');
        }

        Empresa::insert($empresa);

        // envío del correo
        Mail::to(request('emailempresa'))->send(new NotificacionEmpresa($empresa));

        return redirect()->route('empresas.index')
            ->with('success', __('messages.companycreated'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);

        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::findOrfail($id);

        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empresa $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Empresa::$rulesEdit);
        $datosEmpresa = request()->except(['_token', '_method']);

        if($request->hasFile('logo')){
            $empresa=Empresa::findOrFail($id);
            Storage::delete('public/'.$empresa->logo);
            $datosEmpresa['logo']=$request->file('logo')->store('uploads','public');
        }

        Empresa::where('id','=', $id)->update($datosEmpresa);
        

        return redirect()->route('empresas.index')
            ->with('success', __("messages.companyupdated"));
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empresa = Empresa::find($id)->delete();

        return redirect()->route('empresas.index')
            ->with('dele', __('messages.companydeleted'));
    }
}
