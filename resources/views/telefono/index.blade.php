@extends('layouts.app')

@section('template_title')
    Telefono
@endsection

@section('content')

<?php
    $ramsTemp = array();
    $romsTemp = array();
    $procesadorTemp = array();

    foreach($telefonos as $telefono) {
        array_push($ramsTemp, $telefono->RAM);
        array_push($romsTemp, $telefono->ROM);
        array_push($procesadorTemp, $telefono->procesador);
    }

    $rams = array_unique($ramsTemp);
    $roms = array_unique($romsTemp);
    $procesadores = array_unique($procesadorTemp);

?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Telefono') }}
                            </span>
                            <div class="float-right">
                                <select name="filtro" id="filtro" class="form-select">
                                    <option selected>Filtrar</option>
                                    <option value="RAM" disabled><b>RAM</b></option>

                                    @foreach($rams as $ram)
                                        <option value="{{$ram}}">{{$ram}}</option>
                                    @endforeach

                                    <option value="ROM" disabled>ROM</option>

                                    @foreach($roms as $rom)
                                        <option value="{{$rom}}">{{$rom}}</option>
                                    @endforeach

                                    <option value="procesador" disabled>Procesador</option>

                                    @foreach($procesadores as $procesador)
                                        <option value="{{$procesador}}">{{$procesador}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('telefonos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
                                        <th>Id</th>
                                        
										<th>RAM</th>
										<th>ROM</th>
										<th>Procesador</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($telefonos as $telefono)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $telefono->RAM }}</td>
											<td>{{ $telefono->ROM }}</td>
											<td>{{ $telefono->procesador }}</td>

                                            <td>
                                                <form action="{{ route('telefonos.destroy',$telefono->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('telefonos.show',$telefono->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('telefonos.edit',$telefono->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $telefonos->links() !!}
            </div>
        </div>
    </div>
@endsection
