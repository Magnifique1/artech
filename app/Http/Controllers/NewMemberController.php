<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewMemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){

        $uID = auth()->id();

        try {
            DB::table('members')->insert([

                'fname' => $request->input('fname'),
                'mname' => $request->input('mname'),
                'lname' => $request->input('lname'),
                'phone1' => $request->input('phone1'),
                'phone2' => $request->input('phone2'),
                'id_number' => $request->input('id_number'),
                'default_user_id' => $uID,
                'default_group_id' => $request->input('default_group_id'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }catch (Exception $exception){
            throw new Exception($exception->getMessage());
        }
        return redirect()->route('groups')->with('success', 'User Successfully Added');
    }

    public function index($gID){

        $uID = auth()->id();
        $branchID = DB::select('select default_branch_id as dbi from users where id = ?', [$uID]);
        $groupDetails = DB::select('select id from mgroups where id = ?',[$gID]);

        return view('newmember',[
            'branchID' => $branchID,
            'groupDetails'=>$groupDetails,
        ]);
    }
}
