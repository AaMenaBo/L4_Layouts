<x-app-layout meta-title='Tarea | Detalle'>
    <h1>Tarea ID: {{ $task->id }}</h1>
    <hr>
    <h2>{{ $task->name }}</h2>
    <p>{{ $task->description }}</p>
    <div class="d-inline">
        <form action="{{ route('tasks.delete', $task->id) }}" method="POST">
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
    </div>
</x-app-layout>
