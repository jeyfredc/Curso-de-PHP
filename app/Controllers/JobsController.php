<?php

namespace App\Controllers;

use Aoo\Models\Job;

class JobsController {
    public function getAddJobAction(){
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

        include '../Views/addJob.php';
    }
}