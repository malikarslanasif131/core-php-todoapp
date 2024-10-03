<?php
if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    // Read tasks
    $tasks = json_decode(file_get_contents('tasks.json'), true) ?? [];

    // Mark as completed
    if (isset($tasks[$taskId])) {
        $tasks[$taskId]['completed'] = true;
    }

    // Save back to JSON
    file_put_contents('tasks.json', json_encode($tasks));

    // Redirect to index
    header('Location: index.php');
}
