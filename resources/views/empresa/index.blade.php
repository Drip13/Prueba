@extends('layouts.app')

@section('template_title')
    Empresa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empresas') }}
                            </span>

                             <div class="float-right">
                                 <a href="{{ route('empresas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Agregar nueva empresa') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        
										<th>Nombre</th>
										<th>Dirección</th>
										<th>Correo</th>
										<th>Telefono</th>
										<th>Logo</th>
										<th>Sitio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresas as $empresa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empresa->nombrempresa }}</td>
											<td>{{ $empresa->direccion }}</td>
											<td>{{ $empresa->emailempresa }}</td>
											<td>{{ $empresa->telempresa }}</td>
											<td><img class="imgindex" src="{{ asset('uploads').'/'.$empresa->logo}}" width="100" ></td>
											<td>{{ $empresa->web }}</td>

                                            <td>
                                                <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empresas.show',$empresa->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empresas.edit',$empresa->id) }}"><i class="fa fa-fw fa-edit"></i> Actualizar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empresas->links() !!}
            </div>
        </div>
    </div>
@endsection
