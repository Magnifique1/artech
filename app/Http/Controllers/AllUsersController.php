<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AllUsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $userBranchId = Auth::user()->default_branch_id;

        if(Auth::user()->role == 'ADMIN'){
            $allusers = DB::select('select u.id, u.fname, u.lname, u.phone1, b.branch_name, u.role,
                                        DATE_FORMAT(u.created_at, \'%d-%m-%Y\') as created
                                        from users u inner join branches b on u.default_branch_id = b.id');
        } else{
            $allusers = DB::select('select u.id, u.fname, u.lname, u.phone1, b.branch_name, u.role,
                                        DATE_FORMAT(u.created_at, \'%d-%m-%Y\') as created
                                        from users u inner join branches b on u.default_branch_id = b.id
                                        where u.default_branch_id = ?',[$userBranchId]);
        }

        return view('allusers',[
            'allusers' => $allusers,
        ]);
    }
}
