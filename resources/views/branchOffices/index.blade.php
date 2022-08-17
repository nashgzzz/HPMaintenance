@extends('layouts.app')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Sucursales</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    
    <a type="button" class="btn btn-success" href='{{ route('branchOffices.create') }}'">Agregar una Sucursal</a>
    
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tablasucursal" width="100%" cellspacing="0">
         
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Dirección Id</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    
                        @foreach($branchOffices as $key => $sucursal)
                        <tr>
                            <td>{{$sucursal->id}}</td>
                            <td>{{$sucursal->nombre}}</td>
                            <td>{{$sucursal->adress_id}}</td>
                            <td><form action="{{ route('branchOffices.destroy',$sucursal) }}" method="POST">
                                <a type="button" href="{{route('branchOffices.edit', $sucursal)}}" class="btn btn-info">Editar</a>
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
            $('#tablasucursal').DataTable({
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