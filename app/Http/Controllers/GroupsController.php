<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GroupsController extends Controller
{
    public function index()
    {
        $allBranches = DB::select('select id,branch_name from branches');

        $allGroups = DB::select('select g.group_name,g.group_location,b.branch_name from groups g inner join branches b on g.default_branch_id = b.id');

        return view('groups',[
            'allBranches' => $allBranches,
            'allGroups'=> $allGroups,
        ]);

    }

    public function store(Request $request){

        try {
            DB::table('groups')->insert([

                'group_name' => $request->input('group_name'),
                'group_location' => $request->input('group_location'),
                'default_branch_id' => $request->input('default_branch_id'),
                'default_user_id'=> 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }catch (Exception $exception){
            throw new Exception($exception->getMessage());
        }

        return redirect()->back()->with('success', 'Group Successfully Added');
    }
}
