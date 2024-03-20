<?php

namespace App\Http\Controllers;
use App\Exports\DatalogsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Traits\dateTraits;

use Illuminate\Http\Request;

class DatalogsController extends Controller
{
    use dateTraits;
    public function export(Request $request)
{
    $date=$this->date_format();
    $date=$date['date'];
    return response()->json([
        'success'=>true,
        'date'=>$date
    ], 200, );
}

}
