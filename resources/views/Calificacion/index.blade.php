<h1>Vista para mostrar materias</h1>

<a href="{{url('Calificacion/create')}}">Registrar una nueva asignatura y sus actividades</a><br><br>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Asignatura</th>
            <th>Actividad 1</th>
            <th>Calificacion</th>
            <th>Actividad 2</th>
            <th>Calificacion</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($calificaciones as $calificacion)
        <tr>
            <td>{{$calificacion->id}}</td>
            <td>{{$calificacion->Asignatura}}</td>
            <td>{{$calificacion->Actividad_1}}</td>
            <td>{{$calificacion->Calificacion_1}}</td>
            <td>{{$calificacion->Actividad_2}}</td>
            <td>{{$calificacion->Calificacion_2}}</td>
            <td>
                
                <a href="{{url('/Calificacion/'.$calificacion->id.'/edit')}}">
                    Editar
                </a>
                
                <form action="{{url('/Calificacion/'.$calificacion->id)}}"  method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres eliminar este registro? Se perdera para siempre')" value="Eliminar"/>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>