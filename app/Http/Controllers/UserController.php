<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use PDOException;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try{
            $data = User::create($request->all());
            return response()->json(['status'=>true, 'message'=>'input data sukses',
            'data'=>$data]);
        }catch(Exception | PDOException $e){
            return response()->json(['status'=>false, 'message'=>'gagal menginput data']);
        }
    }
}
