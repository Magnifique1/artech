<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $userBranchId = Auth::user()->default_branch_id;
        $uID = auth()->id();

        $thisMonth = now()->month;
        $thisWeek =  now()->weekNumberInMonth;

        //return now();

        $today = now()->format('Y-m-d');

        if(Auth::user()->role == 'ADMIN'){
            $newUsers = DB::select('select m.fname,m.mname,m.lname,m.phone1,u.fname as ufname,u.lname as ulname,m.status as mstatus
                                        from members m
                                        inner join users u on m.default_user_id = u.id
                                        where date_format(m.created_at,\'%Y-%m-%d\') = ?',[$today]);

            $topSavers = DB::select('select m.id,m.fname,m.mname,m.lname, u.fname as ufname, u.lname as ulname, b.branch_name, m2.group_name, sum(p.t_amount) as t_amount from members m
                                            inner join users u on m.default_user_id = u.id
                                            inner join branches b on u.default_branch_id = b.id
                                            inner join mgroups m2 on m.default_group_id = m2.id
                                            inner join payments p on m.id = p.default_member_id
                                            where p.product = ?
                                            group by m.id,m.fname,m.mname,m.lname, u.fname ,u.lname, b.branch_name, m2.group_name
                                            order by t_amount desc limit 10',['AHYF']);

            $usersToday = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            where date_format(m.created_at,\'%Y-%m-%d\') = ?',[$today]);

            $usersWeek = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            where week(m.created_at) - week(date_format(m.created_at,\'%Y-%m-01\')) = ? ',[$thisWeek]);

            $usersMonth = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            where month(m.created_at) = ? ',[$thisMonth]);

            $usersTotal = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m',[$userBranchId]);
        }elseif(Auth::user()->role == 'BM'){
            $newUsers = DB::select('select m.fname,m.mname,m.lname,m.phone1,u.fname as ufname,u.lname as ulname,m.status as mstatus
                                        from members m
                                        inner join users u on m.default_user_id = u.id
                                        where u.default_branch_id = ? and date_format(m.created_at,\'%Y-%m-%d\') = ?',[$userBranchId,$today]);

            $topSavers = DB::select('select m.id,m.fname,m.mname,m.lname, u.fname as ufname, u.lname as ulname, b.branch_name, m2.group_name, sum(p.t_amount) as t_amount from members m
                                            inner join users u on m.default_user_id = u.id
                                            inner join branches b on u.default_branch_id = b.id
                                            inner join mgroups m2 on m.default_group_id = m2.id
                                            inner join payments p on m.id = p.default_member_id
                                            where u.default_branch_id = ? and p.product = ?
                                            group by m.id,m.fname,m.mname,m.lname, u.fname ,u.lname, b.branch_name, m2.group_name
                                            order by t_amount desc limit 10',[$userBranchId, 'AHYF']);

            $usersToday = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            inner join users u on m.default_user_id = u.id
                                            where date_format(m.created_at,\'%Y-%m-%d\') = ? and u.default_branch_id = ?',[$today,$userBranchId]);

            $usersWeek = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            inner join users u on m.default_user_id = u.id
                                            where week(m.created_at) - week(date_format(m.created_at,\'%Y-%m-01\')) = ? and u.default_branch_id = ?',[$thisWeek,$userBranchId]);

            $usersMonth = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            inner join users u on m.default_user_id = u.id
                                            where month(m.created_at) = ? and u.default_branch_id = ?',[$thisMonth,$userBranchId]);

            $usersTotal = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            inner join users u on m.default_user_id = u.id
                                            where u.default_branch_id = ?',[$userBranchId]);
        }else{
            $newUsers = DB::select('select m.fname,m.mname,m.lname,m.phone1,u.fname as ufname,u.lname as ulname,m.status as mstatus
                                        from members m
                                        inner join users u on m.default_user_id = u.id
                                        where u.id = ? and date_format(m.created_at,\'%Y-%m-%d\') = ?',[$uID,$today]);

            $topSavers = DB::select('select m.id,m.fname,m.mname,m.lname, u.fname as ufname, u.lname as ulname, b.branch_name, m2.group_name, sum(p.t_amount) as t_amount from members m
                                            inner join users u on m.default_user_id = u.id
                                            inner join branches b on u.default_branch_id = b.id
                                            inner join mgroups m2 on m.default_group_id = m2.id
                                            inner join payments p on m.id = p.default_member_id
                                            where u.id = ? and p.product = ?
                                            group by m.id,m.fname,m.mname,m.lname, u.fname ,u.lname, b.branch_name, m2.group_name
                                            order by t_amount desc limit 10',[$uID, 'AHYF']);

            $usersToday = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            inner join users u on m.default_user_id = u.id
                                            where date_format(m.created_at,\'%Y-%m-%d\') = ? and u.id = ?',[$today,$uID]);

            $usersWeek = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            inner join users u on m.default_user_id = u.id
                                            where week(m.created_at) - week(date_format(m.created_at,\'%Y-%m-01\')) = ? and u.id = ?',[$thisWeek,$uID]);

            $usersMonth = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            inner join users u on m.default_user_id = u.id
                                            where month(m.created_at) = ? and u.id = ?',[$thisMonth,$uID]);

            $usersTotal = DB::select('select IF(count(m.id) is null, 0 ,count(m.id)) as mcount
                                            from members m
                                            inner join users u on m.default_user_id = u.id
                                            where u.id = ?',[$uID]);
        }

        $savingsToday = DB::select('select IF(sum(t_amount) is null, 0 ,sum(t_amount)) as t_amount from payments where date_format(created_at,\'%Y-%m-%d\') = ? and product = ?',[$today,'AHYF']);
        $savingsWeek = DB::select('select IF(sum(t_amount) is null, 0 ,sum(t_amount)) as t_amount from payments where week(created_at) - week(date_format(created_at,\'%Y-%m-01\')) = ? and product = ?',[$thisWeek,'AHYF']);
        $savingsMonth = DB::select('select IF(sum(t_amount) is null, 0 ,sum(t_amount)) as t_amount from payments where month(created_at) = ? and product = ?',[$thisMonth,'AHYF']);
        $savingsTotal = DB::select('select IF(sum(t_amount) is null, 0 ,sum(t_amount)) as t_amount from payments where product = ?',['AHYF']);

        return view('home',[
            'newUsers' => $newUsers,
            'savingsToday'=>$savingsToday,
            'savingsWeek'=>$savingsWeek,
            'savingsMonth'=>$savingsMonth,
            'savingsTotal'=>$savingsTotal,
            'topSavers'=>$topSavers,
            'usersToday'=>$usersToday,
            'usersWeek'=>$usersWeek,
            'usersMonth'=>$usersMonth,
            'usersTotal'=>$usersTotal,
        ]);
    }
}
