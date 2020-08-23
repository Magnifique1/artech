<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class MembersProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){

        $data = request()->validate([
            'reference_number'=>'required',
            't_type'=>'required',
            't_amount'=>'required',
        ]);

        try {
            DB::table('payments')->insert([
                't_date' => $request->input('mdate'),
                'product' => $request->input('product'),
                'reference_number' => $request->input('reference_number'),
                't_type' => $request->input('t_type'),
                't_amount' => $request->input('t_amount'),
                'default_member_id' => $request->input('mID'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }catch (Exception $exception){
            throw new Exception($exception->getMessage());
        }
        return redirect()->back()->with('success', 'Payment Successfully Added');
    }

    public function activate(Request $request){

        $mID = $request->input('mID');
        try {
            DB::update('update members set `status` = 1 where id = ?', [$mID]);
        }catch (Exception $exception){
            throw new Exception($exception->getMessage());
        }
        return redirect()->back()->with('success', 'Member Now Active');
    }

    public function deactivate(Request $request){

        $mID = $request->input('mID');
        try {
            DB::update('update members set `status` = 0 where id = ?', [$mID]);
        }catch (Exception $exception){
            throw new Exception($exception->getMessage());
        }
        return redirect()->back()->with('success', 'Member Now Inactive');
    }

    public function index($mID)
    {

        $memberDetails = DB::select('select m.id,m.fname,m.mname,m.lname,m.status,u.fname as ufname,u.lname as ulname,b.branch_name
                                            from members m
                                            inner join users u on m.default_user_id = u.id
                                            inner join branches b on u.default_branch_id = b.id
                                            where m.id = ? ', [$mID]);

        $memberPayments = DB::select('select t_date,product,reference_number,t_type,t_amount,
                                            DATE_FORMAT(created_at, \'%Y-%m-%d\') as postingDate
                                            from payments where default_member_id = ? ', [$mID]);

        $memberPaymentsSum = DB::select('select sum(t_amount) as total_savings from payments where default_member_id = ? and product = ?', [$mID, 'AHYF']);

        $lastPayDate = DB::select('select max(id) as id, t_date,product from payments
                                        where default_member_id = ?
                                        group by t_date,product',[$mID]);

        $memberUploads = DB::select('select purl from uploads where mid = ?', [$mID]);

        return view('memberprofile',[
            'memberDetails'=>$memberDetails,
            'memberPayments'=>$memberPayments,
            'memberPaymentsSum'=>$memberPaymentsSum,
            'memberUploads'=>$memberUploads,
            'lastPayDate'=>$lastPayDate,
        ]);
    }
}
