<h1>Formulario para modificar una materia</h1>

<form action="{{url('/Calificacion/'.$calificacion->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}

    @include('Calificacion.form')
</form>