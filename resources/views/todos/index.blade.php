<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>To Do List</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

  <div class="card shadow text-center p-4" style="width: 18rem;">


     <h1>To-Do List</h1>

     <div>
        <form action="{{ route('todos.store') }}" method="POST">
            @csrf
            <input type="text" name="title" class="form-control" placeholder="New Task" required>
            <button type="submit" class="btn btn-success mt-2">Add Task</button>
        </form>
     </div>

     <div class="text-end">
        <ul class="list-group mt-4">
            @foreach($todos as $todo)
                <li class="list-group-item" style="{{ $todo->is_completed ? 'text-decoration: line-through;' : '' }}">
                    {{ $todo->title }}
                    <form action="{{ route('todos.toggle', $todo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-warning btn-sm">{{ $todo->is_completed ? '✔' : '✘' }}</button>
                    </form>
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
                </li>
            @endforeach
        </ul>
     </div>
  
  </div>


  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
