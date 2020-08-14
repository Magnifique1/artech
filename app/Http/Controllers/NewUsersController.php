<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Exception;

class NewUsersController extends Controller
{

    public function store(Request $request){

        try {

            DB::table('users')->insert([

                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'phone1' => $request->input('phone1'),
                'phone2' => $request->input('phone2'),
                'id_number' => $request->input('id_number'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role' => $request->input('role'),
                'default_branch_id' => $request->input('default_branch_id'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }catch (Exception $exception){
            throw new Exception($exception->getMessage());
        }

        return redirect()->route('allusers')->with('success', 'User Successfully Added');

    }
    public function index(){

        $allBranches = DB::select('select id,branch_name from branches');

        return view('newuser',[
            'allBranches' => $allBranches,
            ]);
    }
}
