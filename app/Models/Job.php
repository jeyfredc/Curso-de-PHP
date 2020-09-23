<?php

namespace App\Models;

class Job extends BaseElement{

    public function __construct($title, $description){
      $newTitle = 'Job: ' . $title;
      $this->title = $newTitle;
      $this->description = $description;
    }

    public function getDurationAsString(){
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
  
        if($years == 0){
          return "$extraMonths months";
        }else{
          return "Job duration: $years years $extraMonths months";
        }
      }
}
