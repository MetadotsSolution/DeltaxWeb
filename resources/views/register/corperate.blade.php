@php
    // This function will return a random
// string of specified length
function random_strings($length_of_string)
{
 
    // String of all alphanumeric character
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
 
    // Shuffle the $str_result and returns substring
    // of specified length
    return substr(str_shuffle($str_result),
                       0, $length_of_string);
}
 
// This function will generate
// Random string of length 10
// echo random_strings(10);
 
// echo "\n";
 
// This function will generate
// Random string of length 8
// echo random_strings(8);
 
@endphp

<div class="container my-5 py-5">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Register - Brand</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>

    <body class="bg-gradient-primary">
        <div class="container">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-register-image"
                                style="background-image: url('{{ asset('images/screen.png') }}');"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Create an Account!</h4>
                                </div>
                                <form class="user" method="POST" action="{{ route('registerCop') }}" id=form1>
                                    @csrf
                                    <div>
                                        <div class="row mb-3">
                                            <div class="col-sm-6 mb-3 mb-sm-0"><input
                                                    class="form-control form-control-user" type="text"
                                                    placeholder="Corporate name" name="corporate_name"></div>
                                            <div class="col-sm-6"><input class="form-control form-control-user"
                                                    type="text" placeholder="Company Address"
                                                    name="company_address"></div>
                                        </div>
                                        <div class="mb-3"><input class="form-control form-control-user"
                                                type="email" placeholder="Email" name="email"></div>
                                        <div class="mb-3"><input class="form-control form-control-user"
                                                type="text" placeholder="CAC NO" name="cac_no"></div>
                                      
                                        <div class="mb-3"><input class="form-control form-control-user"
                                                    type="text" placeholder="Company Phone" name="company_phone"></div>

                                        <div class="mb-3"><input class="form-control form-control-user"
                                                type="text" placeholder="CAC Registration Date" name="reg_date">
                                        </div>
                                        <div class="mb-3"><input class="form-control form-control-user"
                                                type="text" placeholder="Business Ownership"
                                                name="business_ownership"></div>
                                                <div class="mb-3"><input class="form-control form-control-user"
                                                    type="text" placeholder="STIN"
                                                    name="stin"></div>
                                        <div class="mb-3"><input class="form-control form-control-user"
                                                type="text" placeholder="Number of PAYE" name="no_of_paye"></div>
                                        <div class="mb-3"><input class="form-control form-control-user"
                                                type="text" placeholder="Contact Name" name="contact_name"></div>
                                        <div class="mb-3"><input class="form-control form-control-user"
                                                type="text" placeholder="Local Government Area" name="lga">
                                        </div>
                                        <div class="row mb-3">
                                            <div class="mb-3"><input class="form-control form-control-user"
                                                    type="text" placeholder="Contact Phone" name="contact_phone">
                                            </div>
                                            <div class="mb-3"><input class="form-control form-control-user"
                                                    type="text" placeholder="" name="state" value="Delta"
                                                    ></div>
                                            <div class="col-sm-6 mb-3 mb-sm-0"><input
                                                    class="form-control form-control-user" type="password"
                                                    placeholder="Password" name="password"></div>
                                            <div class="col-sm-6"><input class="form-control form-control-user"
                                                    type="password" placeholder="Repeat Password"
                                                    name="confirm_password"></div>
                                                    <div class="col-sm-6 d-none"><input class="form-control form-control-user"
                                                        type="text" placeholder="Tax Id" value="{{ random_strings(10) }}"
                                                        name="tax_id"></div>
                                        </div>

                                        <hr>
                                    </div>

                                    <button class="btn btn-primary d-block btn-user w-100" type="submit">Register
                                        Account</button>

                                </form>


                                <div class="text-center"><a class="small" href="forgot-password.html">Forgot
                                        Password?</a></div>
                                <div class="text-center"><a class="small" href="login.html">Already have an account?
                                        Login!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('js/register.js') }}"></script>
    </body>

    </html>
