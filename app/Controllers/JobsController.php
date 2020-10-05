<?php

namespace App\Controllers;

use App\Models\Job;
use App\Models\Project;

class JobsController extends BaseController{
    public function getAddJobAction($request){

        if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $job = new Job();
            $job->title = $postData['title'];
            $job->description = $postData['description'];
            $job->save();
        }
        
        if($request->getMethod() == 'POST'){
            $postData = $request->getParsedBody();
            $job = new Project();
            $job->title = $postData['title'];
            $job->description = $postData['description'];
            $job->save();
        }

        return $this->renderHTML('addJob.twig');
    }
}