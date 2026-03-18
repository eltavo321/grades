<h1>Materias</h1>

<a href="{{ route('subjects.create') }}">Agregar materia</a>

@foreach($subjects as $subject)
    <div>
        <h3>{{ $subject->name }}</h3>
        <a href="{{ route('subjects.show', $subject->id) }}">Ver actividades</a>
    </div>
@endforeach