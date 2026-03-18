<h1>{{ $subject->name }}</h1>

<h2>Actividades</h2>

@foreach($activities as $activity)
    <div>
        <p>{{ $activity->type }} - {{ $activity->grade }}</p>

        <form action="{{ route('activities.destroy', $activity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Eliminar</button>
        </form>
    </div>
@endforeach

<h3>Agregar actividad</h3>

<form action="{{ route('activities.store') }}" method="POST">
    @csrf
    <input type="hidden" name="subject_id" value="{{ $subject->id }}">

    <input type="text" name="type" placeholder="Tipo">
    <input type="number" name="grade" placeholder="Calificación">
    <input type="date" name="date">
    <textarea name="comments"></textarea>

    <button>Guardar</button>
</form>