<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une Tâche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4">✏️ Modifier la Tâche</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="completed" class="form-label">Statut</label>
            <select name="completed" class="form-select">
                <option value="0" {{ !$task->completed ? 'selected' : '' }}>En cours</option>
                <option value="1" {{ $task->completed ? 'selected' : '' }}>Terminée</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('tasks.view') }}" class="btn btn-secondary">⬅️ Retour</a>
    </form>
</div>

</body>
</html>
