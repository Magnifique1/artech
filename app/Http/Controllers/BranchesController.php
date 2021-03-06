<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){

        $data = request()->validate([
            'branch_name'=>'required',
        ]);

        try {

            DB::table('branches')->insert([

                'branch_name' => $request->input('branch_name')

            ]);

        }catch (Exception $exception){
            throw new Exception($exception->getMessage());
        }

        return redirect()->back()->with('success', 'Branch Successfully Added');

    }

    public function index(){

        $allBranches = DB::select('select branch_name from branches');


        return view('branches',[
            'allBranches' => $allBranches,
        ]);
    }
}
