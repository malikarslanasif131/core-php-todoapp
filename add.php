<?php
if (isset($_POST['task'])) {
    $taskName = $_POST['task'];

    // Read current tasks
    $tasks = json_decode(file_get_contents('tasks.json'), true) ?? [];

    // Add new task
    $tasks[] = [
        'name' => $taskName,
        'completed' => false
    ];

    // Save back to JSON
    file_put_contents('tasks.json', json_encode($tasks));

    // Redirect to index
    header('Location: index.php');
}
