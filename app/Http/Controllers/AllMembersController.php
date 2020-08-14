<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllMembersController extends Controller
{
    public function index($gID){

        $allMembers = DB::select('select m.id,m.fname,m.lname,mg.group_name,u.fname as bfname, u.lname as blname, DATE_FORMAT(m.created_at, \'%d-%m-%Y\') as created from members m
                                        inner join users u on m.default_user_id = u.id
                                        inner join mgroups mg on m.default_group_id = mg.id
                                        inner join branches b on mg.default_branch_id = b.id
                                        where mg.id = ?', [$gID]);

        $groupDetails = DB::select('select id, group_name from mgroups where id = ?',[$gID]);

        return view('allmembers',[
            'allMembers'=>$allMembers,
            'groupDetails'=>$groupDetails

        ]);
    }
}
