<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;

class MysqlTestController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     function index(){
        if(DB::connection()->getPdo())
        {
            echo "Successfully connected to the database => "
                         .DB::connection()->getDatabaseName();
        }else{
            echo 'asddsa';
        }
    }
}
