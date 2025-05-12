<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Tâches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">📋 Liste des Tâches</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">➕ Nouvelle Tâche</a>
    </div>

    @if($tasks->count())
        <div class="list-group">
            @foreach ($tasks as $task)
                <div class="list-group-item">
                    <h5 class="mb-1">{{ $task->title }}</h5>
                    <p class="mb-1">{{ $task->description }}</p>
                    <small class="text-muted">Statut :
                        <span class="{{ $task->completed ? 'text-success' : 'text-warning' }}">
                            {{ $task->completed ? 'Terminée ✅' : 'En cours 🕒' }}
                        </span>
                    </small>
                    <div class="mt-2">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-outline-secondary">✏️ Modifier</a>
                        <form action="{{ route('tasks.delete', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">🗑 Supprimer</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info mt-4">
            Aucune tâche pour le moment.
        </div>
    @endif
</div>

</body>
</html>
