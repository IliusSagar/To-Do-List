{{-- resources/views/todos/index.blade.php --}}

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="New Task" required>
        <button type="submit">Add Task</button>
    </form>
    
    <ul>
        @foreach($todos as $todo)
            <li style="{{ $todo->is_completed ? 'text-decoration: line-through;' : '' }}">
                {{ $todo->title }}
                <form action="{{ route('todos.toggle', $todo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PATCH')
                    <button type="submit">{{ $todo->is_completed ? 'Uncross' : 'Cross' }}</button>
                </form>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
