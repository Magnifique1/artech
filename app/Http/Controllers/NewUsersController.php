<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Exception;

class NewUsersController extends Controller
{

    public function store(Request $request){

        $data = request()->validate([
            'fname'=>'required',
            'lname'=>'required',
            'phone1'=>'required',
            'phone2'=>'required',
            'id_number'=>'required',
            'email'=>'required',
        ]);

        try {

           $id = DB::table('users')->insertGetId([

                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'phone1' => $request->input('phone1'),
                'phone2' => $request->input('phone2'),
                'id_number' => $request->input('id_number'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('id_number')),
                'role' => $request->input('role'),
                'default_branch_id' => $request->input('default_branch_id'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if($request->hasFile('user_uploaded_files')){
                foreach ($request->file('user_uploaded_files') as $uploadedFile){
                    $filenameWithExtension = $uploadedFile->getClientOriginalName();
                    $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                    $extension = $uploadedFile->getClientOriginalExtension();
                    $fileToStore = sprintf('%s_%s_.%s', $filename, time(), $extension);

                    $uploadedFile->storeAs('public/file-uploads', $fileToStore);
                    $path = storage_path(sprintf('app/public/file-uploads/%s', $fileToStore));
                    $publicURL = asset(sprintf('storage/file-uploads/%s', $fileToStore));

                    try {
                        DB::table('useruploads')->insert([
                            'uid' => $id,
                            'purl' => $publicURL,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }catch (Exception $exception){
                        throw new Exception($exception->getMessage());
                    }
                }
            }
        }catch (Exception $exception){
            throw new Exception($exception->getMessage());
        }

        return redirect()->route('allusers')->with('success', 'User Successfully Added');

    }
    public function index(){

        $userBranchId = Auth::user()->default_branch_id;

        if(Auth::user()->role == 'ADMIN'){
            $allBranches = DB::select('select id,branch_name from branches');
        }else{
            $allBranches = DB::select('select b.id,b.branch_name from branches b
                                            inner join users u on b.id = u.default_branch_id
                                            where u.default_branch_id = ?',[$userBranchId]);
        }

        return view('newuser',[
            'allBranches' => $allBranches,
            ]);
    }
}
