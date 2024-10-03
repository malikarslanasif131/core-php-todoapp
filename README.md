# PHP To-Do List Application

## Introduction

This is a simple **To-Do List Application** built with **Core PHP** and **Bootstrap** to help you manage tasks efficiently. Users can add, edit, mark tasks as complete, and delete them. The tasks are stored in a **JSON file** for simplicity, so no database is required.

This project is suitable for beginners who want to learn how to build a dynamic PHP application with basic CRUD (Create, Read, Update, Delete) functionality and Bootstrap for responsive design.

---

## Features

- Add new tasks.
- Edit existing tasks using a Bootstrap modal.
- Mark tasks as complete (Completed tasks cannot be marked again).
- Delete tasks.
- Tasks are saved in a **JSON file**, providing a lightweight and simple data storage solution.

---

## Requirements

Before starting, make sure you have the following software installed:

1. **XAMPP** (or another local development server, such as **WAMP**, **MAMP**, or **Laragon**).
   - XAMPP includes **Apache** and **PHP** which are essential to run this PHP-based application.
   - Download XAMPP from [here](https://www.apachefriends.org/index.html).
2. **PHP**: Version 7.4 or above.

---

## Setup Instructions

Follow these steps to set up the application on your local machine:

### 1. Download or Clone the Repository

You can either download the project as a ZIP file and extract it, or clone the repository using Git.

```bash
git clone https://github.com/your-username/todo-list-php.git
```

### 2. Move Project to Your Local Server's Root Directory

Once you have downloaded or cloned the project, move the project folder into your local server's root directory:

- For **XAMPP**, move the folder to:  
  `C:/xampp/htdocs/todo-list-php`
- For **WAMP**, move the folder to:  
  `C:/wamp/www/todo-list-php`
- For **MAMP**, move the folder to:  
  `Applications/MAMP/htdocs/todo-list-php`

### 3. Start Your Local Server

- Open **XAMPP Control Panel** and start the **Apache** server.

  If you are using **WAMP**, **MAMP**, or **Laragon**, start their respective servers.

### 4. Access the To-Do List Application

Open your web browser and visit the following URL to access the application:

```bash
http://localhost/todo-list-php
```

You should now see the **To-Do List** homepage where you can add, edit, complete, or delete tasks.

---

## Project Structure

Here's a quick overview of the project structure:

```
todo-list-php/
│
├── tasks.json               // JSON file where tasks are stored.
├── index.php                // Main page to display and manage tasks.
├── add.php                  // PHP script to handle adding new tasks.
├── edit.php                 // PHP script to handle editing tasks.
├── delete.php               // PHP script to handle task deletion.
├── complete.php             // PHP script to handle marking tasks as complete.
├── css/                     // Folder containing Bootstrap CSS.
│   └── bootstrap.min.css
├── js/                      // Folder containing Bootstrap JS.
│   └── bootstrap.bundle.min.js
└── README.md                // This README file.
```

---

## How to Use the Application

### Adding a New Task

1. On the main page (`index.php`), you'll see a form at the top where you can enter a task description.
2. Enter the task name and click **Add Task** to submit it.

### Editing a Task

1. Click the **Edit** button next to the task you want to update.
2. A modal will appear where you can update the task name.
3. Click **Update Task** to save your changes.

### Completing a Task

1. To mark a task as complete, click the **Complete** button next to the task.
2. Once completed, the button will change to **Completed**, and it will no longer be clickable.

### Deleting a Task

1. To delete a task, click the **Delete** button next to the task.
2. The task will be removed from the list and the JSON file.

---

## Additional Notes

- **Data Persistence**: The tasks are stored in a **JSON file** (`tasks.json`) located in the root folder. Each time you add, edit, complete, or delete a task, the JSON file is updated.
- **Customization**: You can easily modify this application by adding new features or improving the design using PHP and Bootstrap.
- **Bootstrap**: The front-end design is handled using **Bootstrap**, which provides responsive and modern UI components.

---

## Troubleshooting

- **Port Issues**: If your XAMPP Apache server is not starting, ensure that **Port 80** is not being used by another program (like Skype). You can change the port in the **httpd.conf** file if needed.
- **PHP Errors**: Make sure you have the correct version of PHP installed. You can check this by running `php -v` in your terminal.

---

## Conclusion

This simple **To-Do List Application** serves as a great starting point for learning Core PHP and Bootstrap. It introduces basic CRUD operations and uses JSON for data storage without needing a database. Feel free to expand the project by adding new features or refining the UI.

Happy coding!
