<label for="Asignatura">Asignatura</label>   
<input type="text" name="Asignatura" id="Asignatura" value="{{isset($calificacion->Asignatura)?$calificacion->Asignatura:''}}">
<br>

<label for="Actividad_1">Actividad 1</label>   
<input type="text" name="Actividad_1" id="Actividad_1" value="{{isset($calificacion->Actividad_1)?$calificacion->Actividad_1:''}}">
<br>

<label for="Calificacion_1">Calificacion 1</label>   
<input type="text" name="Calificacion_1" id="Calificacion_1" value="{{isset($calificacion->Calificacion_1)?$calificacion->Calificacion_1:''}}">
<br>

<label for="Actividad_2">Actividad 2</label>   
<input type="text" name="Actividad_2" id="Actividad_2" value="{{isset($calificacion->Actividad_2)?$calificacion->Actividad_2:''}}">
<br>

<label for="Calificacion_2">Calificacion 2</label>   
<input type="text" name="Calificacion_2" id="Calificacion_2" value="{{isset($calificacion->Calificacion_2)?$calificacion->Calificacion_2:''}}">
<br>
    
<input type="submit" value="Guardar Calificaciones">
<br><br><br>

<a href="{{url('Calificacion')}}">Regresar</a>