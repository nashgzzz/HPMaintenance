@extends('layouts.app')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Autos</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    
    <a type="button" class="btn btn-success" href="{{ route('cars.create') }}">Agregar un Auto</a>
    
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tablaCars" width="100%" cellspacing="0">
         
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Patente</th>
                        <th>Color</th>
                        <th>Descripcion</th>
                        <th>Modelo</th>
                        <th>User</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    
                        @foreach($cars as $key => $car)
                        <tr>
                            <td>{{$car->id}}</td>
                            <td>{{$car->nombre}}</td>
                            <td>{{$car->patente}}</td>
                            <td>{{$car->color}}</td>
                            <td>{{$car->descripcion}}</td>
                            <td>{{$car->car_models_id}}</td>
                            <td>{{$car->user_id}}</td>
                            <td><form action="{{ route('cars.destroy',$car) }}" method="POST">
                                <a type="button" href="{{route('cars.edit', $car)}}" class="btn btn-info">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                             </td>
                        </tr>
                        @endforeach            
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection


@section('scrips')
@section('scripts')
<script>

        $(document).ready(function () {
            $('#tablaCars').DataTable({
                order: [[4, 'asc']],
                responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],  language: {
                "lengthMenu": "",
                "zeroRecords": "No se encuentra resultado",
                "info": "Mostrando registros ",
                "infoEmpty": "Mostrando resgistros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de MAX registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Ultimo",
                    "sNext": "Siguente",
                    "sPrevious": "Anterior"

                },
                "sProcessing": "Procesando...",
            },
            responsive: "true",
            dom: 'Bfrtilp',
            buttons:[
                {
                    extend:     'excelHtml5',
                    text:       '<i class="fas fa-file-excel"></i> ',
                    titleAttr:  'Exportar a Excel',
                    className:  'btn btn-success'


                },
                {
                    extend:     'pdfHtml5',
                    text:       '<i class="fas fa-file-pdf"></i> ',
                    titleAttr:  'Exportar a pdf',
                    className:  'btn btn-danger'

                },
                {
                    extend:     'print',
                    text:       '<i class="fas fa-print"></i> ',
                    titleAttr:  'Imprimir',
                    className:  'btn btn-info'

                },
            ]
            });
        });

</script>

@endsection

@endsection