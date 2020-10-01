<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController {
    public function indexAction(){
        
        $jobs = Job::all();
        $projects = Project::all();

        $name = "Jeyfred Calderon";
        $limitMonths = 2000;

        include '../Views/index.php';

    }
}