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

        $data = request()->validate([
            'fname'=>'required',
            'mname'=>'required',
            'lname'=>'required',
            'phone1'=>'required',
            'phone2'=>'required',
            'id_number'=>'required',
        ]);

        try {
            $id = DB::table('members')->insertGetId([

                'fname' => $request->input('fname'),
                'mname' => $request->input('mname'),
                'lname' => $request->input('lname'),
                'phone1' => $request->input('phone1'),
                'phone2' => $request->input('phone2'),
                'id_number' => $request->input('id_number'),
                'status'=> 0,
                'default_user_id' => $uID,
                'default_group_id' => $request->input('default_group_id'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if($request->hasFile('uploaded_files')){
                foreach ($request->file('uploaded_files') as $uploadedFile){
                    $filenameWithExtension = $uploadedFile->getClientOriginalName();
                    $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                    $extension = $uploadedFile->getClientOriginalExtension();
                    $fileToStore = sprintf('%s_%s_.%s', $filename, time(), $extension);

                    $uploadedFile->storeAs('public/file-uploads', $fileToStore);
                    $path = storage_path(sprintf('app/public/file-uploads/%s', $fileToStore));
                    $publicURL = asset(sprintf('storage/file-uploads/%s', $fileToStore));

                    try {
                        DB::table('uploads')->insert([
                            'mid' => $id,
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
        return redirect()->route('groups')->with('success', 'Member Successfully Added');
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
