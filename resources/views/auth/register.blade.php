{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="company_name" class="col-md-4 col-form-label text-md-end">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control @error('name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="company_name" class="col-md-4 col-form-label text-md-end">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <textarea   cols="5" rows="2"  id="company_address" type="text" class="form-control @error('name') is-invalid @enderror" name="company_address"  required autocomplete="name" autofocus  value="{{ old('company_address') }}"></textarea>
                               
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('first Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Cell Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                       

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('VAT License') }}</label>

                            <div class="col-md-6">
                                <input id="vat_license" type="number" class="form-control @error('vat_license') is-invalid @enderror" name="vat_license" value="{{ old('vat_license') }}" required autocomplete="vat_license" autofocus>

                                @error('vat_license')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bin_certificate" class="col-md-4 col-form-label text-md-end">{{ __('Bin Certificate') }}</label>

                            <div class="col-md-6">
                                <input id="bin_certificate" type="number" class="form-control @error('bin_certificate') is-invalid @enderror" name="bin_certificate" value="{{ old('bin_certificate') }}" required autocomplete="bin_certificate" autofocus>

                                @error('bin_certificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ain_certificate" class="col-md-4 col-form-label text-md-end">{{ __('Ain Certificate') }}</label>

                            <div class="col-md-6">
                                <input id="ain_certificate" type="number" class="form-control @error('ain_certificate') is-invalid @enderror" name="ain_certificate" value="{{ old('ain_certificate') }}" required autocomplete="ain_certificate" autofocus>

                                @error('ain_certificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                     
                       

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


 --}}








<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link href="{{asset('frontend')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background: url('{{asset('frontend')}}/images/WhatsApp\ Image\ 2022-11-06\ at\ 4.13.51\ PM.jpeg'); font-family: nobel;">
        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card swadow">
                <div class="card-header" style="background-color:#2e3791;">
                 <h3> <div class="card-title text-center " style="color: white;" >Registration</div></h3>
                </div>
                <div class="card-body text-light" style="background-color:#2e3791;">
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf

                      <div class="form-group mt-3">
                        <label for="company_name" class="col-form-label">{{ __('Company Name') }}</label>
                        <input id="company_name" type="text" class="form-control @error('name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="form-group mt-3">
                        <label for="company_address" class=" col-form-label">{{ __('Company Address') }}</label>
                        <textarea   cols="5" rows="2"  id="company_address" type="text" class="form-control @error('company_address') is-invalid @enderror" name="company_address"  required autocomplete="company_address" autofocus  value="{{ old('company_address') }}"></textarea>
                               
                        @error('company_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group mt-3">
                        <h4>Contact Person</h4>
                        <div class="row">
                          <div class="col-lg-6">
                            <label for="first_name" class="col-form-label">{{ __('first Name') }}</label>
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>

                          <div class="col-lg-6">
                            
                            <label for="last_name" class="col-form-label">{{ __('Last Name') }}</label>
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                        </div>
                      </div>
                      <div class="form-group mt-3">
                        <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group mt-3">
                        <label for="phone" class="col-form-label">{{ __('Cell Number') }}</label>
                        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="form-group mt-3">
                        <label for="phone" class="col-form-label">{{ __('VAT License') }}</label>
                        <div class="row">
                          <div class="col-lg-8">
                            <input id="vat_license" type="number" class="form-control @error('vat_license') is-invalid @enderror" name="vat_license" value="{{ old('vat_license') }}" required autocomplete="vat_license" autofocus>

                                @error('vat_license')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                          </div> 
                         
                        </div>
                      </div>
                      <div class="form-group mt-3">
                        <label for="bin_certificate" class="col-form-label">{{ __('Bin Certificate') }}</label>
                        <div class="row">
                          <div class="col-lg-8">
                            <input id="bin_certificate" type="number" class="form-control @error('bin_certificate') is-invalid @enderror" name="bin_certificate" value="{{ old('bin_certificate') }}" required autocomplete="bin_certificate" autofocus>

                                @error('bin_certificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                          </div>
                         
                            
                        </div>
                      </div>
                      <div class="form-group mt-3">
                        <label for="ain_certificate" class="col-form-label">{{ __('Ain Certificate') }}</label>
                        <div class="row">
                          <div class="col-lg-8">
                            <input id="ain_certificate" type="number" class="form-control @error('ain_certificate') is-invalid @enderror" name="ain_certificate" value="{{ old('ain_certificate') }}" required autocomplete="ain_certificate" autofocus>

                                @error('ain_certificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                          </div>
                          
                        </div>
                      </div> 
                     <div class="form-group mt-3">
                      <label for="password" class="col-form-label">{{ __('Password') }}</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                      <div class="form-group mt-3">
                        <label for="password-confirm" class=" col-form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      </div>
                      <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">
                          {{ __('Register') }}
                      </button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    <script src="{{asset('frontend')}}/bootstrap/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
