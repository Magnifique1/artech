<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllUsersController extends Controller
{
    public function index(){

        $allusers = DB::select('select u.id, u.fname, u.lname, u.phone1, b.branch_name, u.role, DATE_FORMAT(u.created_at, \'%d-%m-%Y\') as created from users u inner join branches b on u.default_branch_id = b.id');

        return view('allusers',[
            'allusers' => $allusers,
        ]);
    }
}
