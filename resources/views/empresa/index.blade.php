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
                                @lang('messages.companies')
                            </span>

                             <div class="float-right">
                                 <a href="{{ route('empresas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    @lang('messages.addcompany')
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('dele'))
                        <div class="alert alert-danger" role="alert">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>@lang('messages.compid')</th>
										<th>@lang('messages.compname')</th>
										<th>@lang('messages.compadress')</th>
										<th>@lang('messages.compemail')</th>
										<th>@lang('messages.comptel')</th>
										<th>@lang('messages.complogo')</th>
										<th>@lang('messages.compweb')</th>

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
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empresas.show',$empresa->id) }}"><i class="fa fa-fw fa-eye"></i>@lang('messages.view')</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empresas.edit',$empresa->id) }}"><i class="fa fa-fw fa-edit"></i>@lang('messages.update')</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>@lang('messages.delete')</button>
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
