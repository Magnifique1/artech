<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function index($uID)
    {

        $userDetails = DB::select('select fname,lname,phone1,phone2,id_number,email,`role`
                                            from users where id = ?', [$uID]);

        $userMembers = DB::select('select fname,mname,lname,phone1,`status`
                                            from members where default_user_id = ?', [$uID]);

        $memberUploads = DB::select('select purl from useruploads where uid = ?', [$uID]);

        return view('userprofile',[
            'userDetails'=>$userDetails,
            'userMembers'=>$userMembers,
            'memberUploads'=>$memberUploads
        ]);
    }
}
