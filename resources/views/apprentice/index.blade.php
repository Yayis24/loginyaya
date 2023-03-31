@extends('layouts.adminlte')
@section('bc')
     <li class="breadcrumb-item"><a href="{{route('home') }}">Home</a></li>
     <li class="breadcrumb-item active">Registros</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" align="center">Registros</div>

                <div class="card-body">
                    <table id="datatable" class="table table-sm table-striped">

                    <thead>
                        <tr>
                            <th>Id</th>
                            <th> {{trans('apprentice.Name')}}</th>
                            <th> {{trans('apprentice.Document')}}</th>
                            <th> {{trans('apprentice.City')}}</th>
                            <th> {{trans('apprentice.Email')}}</th>
                            <th> {{trans('apprentice.Telephone')}}</th>
                            <th> <a href="{{route('apprentices.add')}}" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i></a> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($apprendices as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td>{{$a->name}}</td>
                                <td>{{$a->document_number}}</td>
                                <td>{{$a->city}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->telephone}}</td>
                                <td>
                                    <a href="{{route('apprentices.edit', $a->id)}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    
                                    <button id="Probar" class="btn btn-danger btn-sm" value="{{$a->id}}"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                        
                
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script >
$(document).ready( function () {
    $('#datatable').DataTable({
        language: {
            search: "Buscar:"
        },
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy","excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
    
} );
</script>
@endsection

@section ('script')
<script>

$(document).on('click', '#Probar', function(){
    var id=$(this).val()
    Swal.fire({
      title: '¿Estas seguro?',
      text: "No podras recuperar el registro despues de ser eliminado",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, estoy seguro'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Eliminado',
          'Se ha eliminado el registro exitosamente',
          'success'
        )
        $(location).attr('href','{{ url('apprentices/delete') }}/'+id);
      }
    })
});
</script>
@endsection
