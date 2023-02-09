@extends('layout2.master')
@section('content')
    <section class="business-feat">
        <!--Start Featured container-->
        <div class="container">
            <!--Start Section Title-->
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
            <div class="section-title">
                <h2 class="text-center text-bold"><span>Donor Login </span></h2>
            </div>
            <!--End Section Title-->

            <!--Start Featured Row-->
            {{-- <div class="row"> --}}
                <!--Start Featured Item Col-->
                {{-- <div class="col-md-8 col-md-offset-2 col-sm-12"> --}}
                    <div class="row">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                        
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="form-group">
                                        <label for="email" class="control-label">Email <span
                                                style="color: #E50000;">*</span></label>
                                        <input name="email" id="email" class="form-control" type="text">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
    
    
    
    
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password <span
                                                style="color: #E50000;">*</span></label>
                                        <input name="password" id="password" class="form-control" type="password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
    
                                    </div>
                                </div>
    
    
    
                                <div class="col-md-2 col-md-offset-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-primary cont-frm-btn">Login</button>
                                    </div>
                                </div>
                                {{-- <div class="col-md-2 col-md-offset-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-primary cont-frm-btn">Register</button>
                                    </div>
                                </div> --}}
                        </form>
    
                    </div>

                   
                </div>
                <!--End Featured Item Col-->
            </div>
            <!--End Featured Row-->
        </div>
        <!--End Featured container-->
    </section>
@endsection
