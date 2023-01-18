<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorperateAccount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CorperateAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'corporate_name' => 'required',
            'company_address' => 'required',
            'email' => 'required|email|unique:users,email',
            'company_phone' => 'required',
            'cac_no' => 'required|unique:corperate_accounts',
            'reg_date' => 'required',
            'business_ownership' => 'required',
            'stin' => 'required|unique:corperate_accounts',
            'no_of_paye' => 'required',
            'contact_name' => 'required',
            'lga' => 'required',
            'contact_phone' => 'required',
            'state' => 'required',
            'password' => 'required|min:8',
            'tax_id' => 'required|unique:corperate_accounts,tax_id'
        ]);

        DB::beginTransaction();

        $BAU = CorperateAccount::create([
            'corporate_name' => $request->input('corporate_name'),
            'company_address' => $request->input('company_address'),
            'email' => $request->input('email'),
            'company_phone' => $request->input('company_phone'),
            'cac_no' => $request->input('cac_no'),
            'reg_date' => $request->input('reg_date'),
            'business_ownership' => $request->input('business_ownership'),
            'stin' => $request->input('stin'),
            'no_of_paye' => $request->input('no_of_paye'),
            'contact_name' => $request->input('contact_name'),
            'lga' => $request->input('lga'),
            'contact_phone' => $request->input('contact_phone'),
            'state' => $request->input('state'),
            'password' => Hash::make($request->password),
            'tax_id' => $request->input('tax_id'),
        ]);
        DB::commit();
        return redirect()->intended('home')->with('message', 'Account Registered Successfully');


        auth()->login($user);

        return redirect('/')->with('message', 'Logged in successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorperateAccount  $corperateAccount
     * @return \Illuminate\Http\Response
     */
    public function show(CorperateAccount $corperateAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CorperateAccount  $corperateAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(CorperateAccount $corperateAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CorperateAccount  $corperateAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CorperateAccount $corperateAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorperateAccount  $corperateAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(CorperateAccount $corperateAccount)
    {
        //
    }
}
