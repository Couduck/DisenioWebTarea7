<h1>Formulario para una nueva materia</h1>

<form action="{{url('/Calificacion')}}" method="post" enctype="multipart/form-data">
@csrf

@include('Calificacion.form')

</form>