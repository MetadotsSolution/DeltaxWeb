<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function createInd(Request $request){
        //
        try {
            //code...
            $validateRequest = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8'
            ]);
    
            if($validateRequest->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validateRequest->errors()
                ], 401);
            }
            $indUser = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password)
            ]);
    
           return response()->json([
            'status' => true,
            'message' => 'Account Created Successfully',
            'data' => $indUser,
            'token' => $indUser->createToken("API TOKEN")->plainTextToken
           ]);
        } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Server error',
                    'errors' => $th->getMessage()
                ]);
        }
        
    }
    /**
    * @param Request $request
    * @return User
    */
    public function createCorp(Request $request){
        //
        try {
            //code...
            $validateRequest = Validator::make($request->all(),[
                'acc_type' => 'required',
                'gender' => 'required',
                'status' => 'required',
                'resident_address' => 'required',
                'nin' => 'required',
                'stin' => 'required',
                'business_type' => 'required',
                'business_address' => 'required',
                'cac_no' => 'required',
                'reg_date' => 'required',
                'business_ownership' => 'required',
                'no_of_paye' => 'required',
                'contact_name' => 'required',
                'contact_phone' => 'required',
                'state' => 'required',
                'lga' => 'required',
                'company_phone' => 'required',
                'corporate_name' => 'required',
                'company_address' => 'required',
            ]);
    
            if($validateRequest->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validateRequest->errors()
                ], 401);
            }
            $corp_User = User::create([
                "acc_type" => $request->acc_type,
                "gender" => $request->gender,
                "status" => $request->status,
                "resident_address" => $request->resident_address,
                "nin" => $request->nin,
                "stin" => $request->stin,
                "business_type" => $request->business_type,
                "business_address" => $request->business_address,
                "cac_no" => $request->cac_no,
                "reg_date" => $request->reg_date,
                "business_ownership" => $request->business_ownership,
                "no_of_paye" => $request->no_of_paye,
                "contact_name" => $request->contact_name,
                "contact_phone" => $request->contact_phone,
                "state" => $request->state,
                "lga" => $request->lga,
                "company_phone" => $request->company_phone,
                "corporate_name" => $request->corporate_name,
                "company_address" => $request->company_addressweb,
            ]);
    
           return response()->json([
            'status' => true,
            'message' => 'Account Created Successfully',
            'data' => $corp_User,
            'token' => $corp_User->createToken("API TOKEN")->plainTextToken
           ]);
        } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Server error',
                    'errors' => $th->getMessage()
                ]);
        }
        
    }

     /**
    * @param Request $request
    * @return User
    */
    public function loginInd(Request $request)
    {
        try {
            $validateUserInd = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required',
                ]
            );
            if ($validateUserInd->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUserInd->errors()
                ], 401);
            }
            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.'], 401);
            }
            $indUser = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged in successfully',
                'token' => $indUser->createToken("API TOKEN")->plainTextToken], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

     /**
    * @param Request $request
    * @return User
    */
    public function loginCorp(Request $request)
    {
        try {
            $validateUserCorp = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required',
                ]
            );
            if ($validateUserCorp->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUserCorp->errors()
                ], 401);
            }
            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.'], 401);
            }
            $corp_User = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged in successfully',
                'token' => $corp_User->createToken("API TOKEN")->plainTextToken], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


}
