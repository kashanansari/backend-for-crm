<?php

namespace App\Traits;
use Carbon\Carbon;
  Trait dateTraits
  {
    public function date_format(){
    $date=Carbon::now()->setTimezone('Asia/karachi')->format('d-m-Y');
    $time=Carbon::now()->setTimezone('Asia/karachi')->format('h:i A');
    return [
        'date'=>$date,
        'time'=>$time
    ];
    }

  }