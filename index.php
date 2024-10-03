<?php
// Read tasks from JSON file
$tasks = json_decode(file_get_contents('tasks.json'), true) ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List Application</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional styles for better look */
        body {
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 700px;
            margin-top: 50px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .input-group {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            overflow: hidden;
        }

        .btn-primary {
            border-radius: 50px;
            background: #6a89cc;
            border: none;
        }

        .btn-primary:hover {
            background: #4a69bd;
        }

        .table {
            margin-top: 20px;
        }

        .table .btn {
            border-radius: 30px;
        }

        .badge {
            font-size: 14px;
            padding: 5px 10px;
            border-radius: 50px;
        }

        .badge-complete {
            background-color: #78e08f;
            color: white;
        }

        .badge-pending {
            background-color: #f6b93b;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>To-Do List</h1>

        <!-- Add Task Form -->
        <form action="add.php" method="POST" class="mt-4">
            <div class="input-group mb-3">
                <input type="text" name="task" class="form-control" placeholder="New Task" required>
                <button class="btn btn-primary" type="submit">Add Task</button>
            </div>
        </form>

        <!-- Display Tasks -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($tasks)): ?>
                    <tr>
                        <td colspan="4" class="text-center">No tasks available.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($tasks as $index => $task): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($task['name']) ?></td>
                            <td>
                                <span class="badge <?= $task['completed'] ? 'badge-complete' : 'badge-pending' ?>">
                                    <?= $task['completed'] ? 'Completed' : 'Pending' ?>
                                </span>
                            </td>
                            <td>
                                <!-- Edit button triggers the modal -->
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"
                                    onclick="setModalData(<?= $index ?>, '<?= htmlspecialchars($task['name']) ?>')">Edit</button>
                                <a href="delete.php?id=<?= $index ?>" class="btn btn-danger btn-sm">Delete</a>
                                <?php if (!$task['completed']): ?>
                                    <a href="complete.php?id=<?= $index ?>" class="btn btn-success btn-sm">Complete</a>
                                <?php else: ?>
                                    <button class="btn btn-info btn-sm" disabled>Completed</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="edit.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="task_id" id="task_id">
                        <div class="mb-3">
                            <label for="task_name" class="form-label">Task</label>
                            <input type="text" class="form-control" id="task_name" name="task_name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script>
        // Set modal data for editing
        function setModalData(id, name) {
            document.getElementById('task_id').value = id;
            document.getElementById('task_name').value = name;
        }
    </script>
</body>

</html>