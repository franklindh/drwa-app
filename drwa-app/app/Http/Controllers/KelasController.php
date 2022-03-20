<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class KelasController extends Controller
{ 
    public function getDataKelas(){
        $ambildata= DB::table('kelas2')->get();

        if($ambildata){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["User" => "Franklin David Hengkengbala",
                                    "Nim" => "72200407",
                                    "DataKelas" =>$ambildata],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401
        );
           
                
            
        }
    }

    public function getDataKelasById($idkelas){
        $ambildata= DB::table('kelas2')
        ->where('id_kelas', $idkelas)
        ->get();

        if($ambildata){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json($ambildata,200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401
        );
           
                
            
        }
    }
}