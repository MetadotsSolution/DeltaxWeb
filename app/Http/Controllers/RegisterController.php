<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\RegisterController;

class RegisterController extends Controller
{
    //
    public function registerInd(Request $request){
        $request->validate(rules:[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8'
        ]);
        DB::beginTransaction();

        $indUser = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->password)
        ]);
        DB::commit();
        return redirect()->intended('home')->with(key: 'message', value: 'Account Registered Successfully');
        DB::rollBack();
    }

    public function registerCorp(Request $request){
        $request->validate(rules:[
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
        DB::beginTransaction();

        $corpUser = User::create([
            'acc_type' => $request->input('acc_type'),
            'gender' => $request->input('gender'),
            'status' => $request->input('status'),
            'resident_address' => $request->input('resident_address'),
            'nin' => $request->input('nin'),
            'stin' => $request->input('stin'),
            'business_type' => $request->input('business_type'),
            'business_address' => $request->input('business_address'),
            'cac_no' => $request->input('cac_no'),
            'reg_date' => $request->input('reg_date'),
            'business_ownership' => $request->input('business_ownership'),
            'no_of_paye' => $request->input('no_of_paye'),
            'contact_name' => $request->input('contact_name'),
            'contact_phone' => $request->input('contact_phone'),
            'state' => $request->input('state'),
            'lga' => $request->input('lga'),
            'company_phone' => $request->input('company_phone'),
            'corporate_name' => $request->input('corporate_name'),
            'company_address' => $request->input('company_address'),
        ]);
        
        DB::commit();
        return redirect()->intended('home')->with(key: 'message', value: 'Account Registered Successfully');
        DB::rollBack();

         
    }
}
