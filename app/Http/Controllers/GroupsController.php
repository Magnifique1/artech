<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $uID = auth()->id();
        $userType = DB::select('select role from users where id = ?',[$uID]);
        $allBranches = DB::select('select id,branch_name from branches');

        $allGroups = DB::select('select g.id,g.group_name,g.group_location,b.branch_name,u.fname,u.lname from mgroups g
                                        inner join branches b on g.default_branch_id = b.id
                                        inner join users u on g.default_user_id = u.id');

        return view('groups',[
            'allBranches' => $allBranches,
            'allGroups'=> $allGroups,
            'userType'=>$userType,
        ]);

    }

    public function store(Request $request){

        $data = request()->validate([
            'group_name'=>'required',
            'group_location'=>'required',
            'default_branch_id'=>'required|min:1',
        ]);

        $uID = auth()->id();

        try {
            DB::table('mgroups')->insert([

                'group_name' => $request->input('group_name'),
                'group_location' => $request->input('group_location'),
                'default_branch_id' => $request->input('default_branch_id'),
                'default_user_id'=> $uID,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }catch (Exception $exception){
            throw new Exception($exception->getMessage());
        }

        return redirect()->back()->with('success', 'Group Successfully Added');
    }
}
