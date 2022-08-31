@extends('layouts.app')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Productos</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
  
    
    @can('products.create')
    <a type="button" class="btn btn-success" href='{{ route('products.create') }}'">Agregar un Producto</a>
    @endcan
  
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tablaproducto" width="100%" cellspacing="0">
         
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Serie</th>
                        <th>Iva</th>
                        <th>Precio</th>
                        <th>Invetario</th>
                        <th>Proovedor</th>
                        <th>Tipo Producto</th>
                        <th>Local</th>
                        <th>Bodega</th>
                        @can('products.edit')
                        <th>Acciones</th>
                        @endcan

                    </tr>
                </thead>
                <tbody>
                    
                        @foreach($products as $key => $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->nombre}}</td>
                            <td>{{$product->direccion}}</td>
                            <td>{{$product->serie}}</td>
                            <td>{{$product->iva}}</td>
                            <td>{{$product->precio}}</td>
                            <td>{{$product->inventory->nombre}}</td>
                            <td>{{$product->supplier->nombre}}</td>
                            <td>{{$product->kind_products->nombre}}</td>
                            <td>{{$product->store->nombre}}</td>
                            <td>{{$product->bodega->nombre}}</td>
                            
                            @can('products.destroy')
                            <td>
                                   
                                        <form action="{{ route('products.destroy',$product) }}" method="POST">
                                            @can('products.edit')
                                                <a type="button" href="{{route('products.edit', $product)}}" class="btn btn-info">Editar</a>
                                            @endcan
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                
                                        </form>
                                    
                            </td>
                            @endcan
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
            $('#tablaproducto').DataTable({
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