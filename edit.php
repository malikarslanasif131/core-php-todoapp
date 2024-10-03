<?php
if (isset($_POST['task_id']) && isset($_POST['task_name'])) {
    $taskId = $_POST['task_id'];
    $taskName = $_POST['task_name'];

    // Read tasks from the JSON file
    $tasks = json_decode(file_get_contents('tasks.json'), true) ?? [];

    // Update the task name
    if (isset($tasks[$taskId])) {
        $tasks[$taskId]['name'] = $taskName;
    }

    // Save the updated tasks back to the JSON file
    file_put_contents('tasks.json', json_encode($tasks));

    // Redirect back to the main page
    header('Location: index.php');
}
