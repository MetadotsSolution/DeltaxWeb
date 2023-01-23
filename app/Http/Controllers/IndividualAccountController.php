<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndividualAccount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndividualAccountController extends Controller
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
            'surname' => 'required',
            'fname' => 'required',
            'email' => 'required|email|unique:individual_accounts,email',
            'gender' => 'required',
            'number' => 'required',
            'status' => 'required',
            'resident_address' => 'required',
            'nin' => 'required|unique:individual_accounts',
            'stin' => 'required|unique:individual_accounts',
            'business_type' => 'required',
            'business_address' => 'required',
            'password' => 'required|min:8',
            'tax_id' => 'required|unique:individual_accounts,tax_id'
        ]);

        DB::beginTransaction();

        $IAU = IndividualAccount::create ([
            'surname' => $request->input('surname'),
            'fname' => $request->input('fname'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'number' => $request->input('number'),
            'status' => $request->input('status'),
            'resident_address' => $request->input('resident_address'),
            'nin' => $request->input('nin'),
            'stin' => $request->input('stin'),
            'business_type' => $request->input('business_type'),
            'business_address' => $request->input('business_address'),
            'password' => Hash::make($request->password),
            'tax_id' => $request->input('tax_id')
        ]);
        DB::commit();
        return redirect()->intended('home')->with('message', 'Account Registered Successfully');
        DB::rollback();

        auth()->login($user);

        return redirect('/')->with('message', 'Logged in successfully');
    }

    /**
     * 
     * @param Request $request
     * @return User
     */

    public function loginUser(Request $request)
    {
        $validateUser = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
                ]
            );
            // dd($request->all()); 

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->back()->withErrors(['email'=>'Invalid username or password']);
        }
        return redirect()->intended('home')->with('message', 'Login Success');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IndividualAccount  $individualAccount
     * @return \Illuminate\Http\Response
     */
    public function show(IndividualAccount $individualAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IndividualAccount  $individualAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(IndividualAccount $individualAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IndividualAccount  $individualAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IndividualAccount $individualAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IndividualAccount  $individualAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndividualAccount $individualAccount)
    {
        //
    }
}
