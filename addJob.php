<?php

require_once 'vendor/autoload.php';

use App\Models\Job;
use App\Models\Project;

if(!empty($_POST)){
    $job = new Job();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->save();
}

if(!empty($_POST)){
    $job = new Project();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->save();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
        integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Add Job</h1>
    <form action="addJob.php" method="post" >
        <label for="">Title:</label>
        <input type="text" name="title"><br>
        <label for="">Description:</label>
        <input type="text" name="description"><br>
        <button type="submit">Save</button>
    </form>
<br>

    <h1>Add Project</h1>
    <form action="addJob.php" method="post" >
        <label for="">Title:</label>
        <input type="text" name="title"><br>
        <label for="">Description:</label>
        <input type="text" name="description"><br>
        <button type="submit">Save</button>
    </form>

</body>

</html>