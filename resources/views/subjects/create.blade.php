<h1>Nueva materia</h1>

<form action="{{ route('subjects.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre materia">
    <button>Guardar</button>
</form>