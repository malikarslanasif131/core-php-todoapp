<?php
if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    // Read tasks
    $tasks = json_decode(file_get_contents('tasks.json'), true) ?? [];

    // Remove task
    if (isset($tasks[$taskId])) {
        unset($tasks[$taskId]);
    }

    // Reindex the array and save to JSON
    $tasks = array_values($tasks);
    file_put_contents('tasks.json', json_encode($tasks));

    // Redirect to index
    header('Location: index.php');
}
