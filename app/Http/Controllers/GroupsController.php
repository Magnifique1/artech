<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GroupsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $userBranchId = Auth::user()->default_branch_id;
        $uID = auth()->id();
        $userType = DB::select('select role from users where id = ?',[$uID]);

        if(Auth::user()->role == 'ADMIN'){
            $allBranches = DB::select('select id,branch_name from branches');

            $allPendingMembers = DB::select('select m.id,m.fname,m.lname,mg.group_name,u.fname as bfname, u.lname as blname, DATE_FORMAT(m.created_at, \'%d-%m-%Y\') as created, m.status from members m
                                        inner join users u on m.default_user_id = u.id
                                        inner join mgroups mg on m.default_group_id = mg.id
                                        inner join branches b on mg.default_branch_id = b.id
                                        where m.status = 0');
        }else{
            $allBranches = DB::select('select b.id,b.branch_name from branches b
                                            inner join users u on b.id = u.default_branch_id
                                            where u.id = ?',[$uID]);

            $allPendingMembers = DB::select('select m.id,m.fname,m.lname,mg.group_name,u.fname as bfname, u.lname as blname, DATE_FORMAT(m.created_at, \'%d-%m-%Y\') as created, m.status from members m
                                        inner join users u on m.default_user_id = u.id
                                        inner join mgroups mg on m.default_group_id = mg.id
                                        inner join branches b on mg.default_branch_id = b.id
                                        where m.status = 0 and u.default_branch_id = ?',[$userBranchId]);
        }

        if(Auth::user()->role == 'ADMIN'){
            $allGroups = DB::select('select g.id,g.group_name,g.group_location,b.branch_name,u.fname,u.lname from mgroups g
                                        inner join branches b on g.default_branch_id = b.id
                                        inner join users u on g.default_user_id = u.id ');
        }elseif(Auth::user()->role == 'BM'){
            $allGroups = DB::select('select g.id,g.group_name,g.group_location,b.branch_name,u.fname,u.lname from mgroups g
                                        inner join branches b on g.default_branch_id = b.id
                                        inner join users u on g.default_user_id = u.id
                                        where u.default_branch_id = ?',[$userBranchId]);
        }else{
            $allGroups = DB::select('select g.id,g.group_name,g.group_location,b.branch_name,u.fname,u.lname from mgroups g
                                        inner join branches b on g.default_branch_id = b.id
                                        inner join users u on g.default_user_id = u.id
                                        where u.id = ?',[$uID]);
        }


        return view('groups',[
            'allBranches' => $allBranches,
            'allGroups'=> $allGroups,
            'userType'=>$userType,
            'allPendingMembers'=>$allPendingMembers
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
