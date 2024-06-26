<x-app-layout meta='Tasks | Create'>
    <h1>Creado una tarea</h1>
    <hr>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        @method('POST')
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Descripción</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Crear tarea</button>
    </form>
</x-app-layout>
