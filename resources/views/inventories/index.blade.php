@extends('layouts.app')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Contenedores</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    
    <a type="button" class="btn btn-success" href='{{ route('inventories.create') }}'">Agregar un Contenedor</a>
    
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tablastores" width="100%" cellspacing="0">
         
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Email</th>
                        <th>Contenedor</th>
                        <th>Acciónes</th>

                    </tr>
                </thead>
                <tbody>
                    
                        @foreach($inventories as $key => $inventory)
                        <tr>
                            <td>{{$inventory->id}}</td>
                            <td>{{$inventory->nombre}}</td>
                            <td>{{$inventory->descripcion}}</td>
                            <td>{{$inventory->mail}}</td>
                            <td>{{$inventory->container_id}}</td>
                            <td><form action="{{ route('inventories.destroy',$inventory) }}" method="POST">
                                <a type="button" href="{{route('inventories.edit', $inventory)}}" class="btn btn-info">Editar</a>
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



@section('scripts')
<script>

        $(document).ready(function () {
            $('#tablastores').DataTable({
                order: [[0, 'asc']],
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