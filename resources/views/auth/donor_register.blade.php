@extends('layout2.master')

@section('content')
<section class="business-feat">
    <!--Start Featured container-->
    <div class="container">
                      <!--Start Section Title-->
                      @if(session()->has('success'))
                      <div class="alert alert-success">
                          {{ session()->get('success') }}
                      </div>
                      @endif
                     @if(session()->has('error'))
                      <div class="alert alert-danger">
                          {{ session()->get('error') }}
                      </div>
                     @endif
        <div class="section-title">
            <h2 class="text-center text-bold"><span>Register </span> Donor</h2>
        </div>
        <!--End Section Title-->
      

        <!--Start Featured Row-->
        <div class="row">
            <!--Start Featured Item Col-->
            <div class="col-md-8 col-md-offset-2 col-sm-12">
              
              <form action="{{ route('register_donor_store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="name" class="control-label">Name <span style="color: #E50000;">*</span></label>
                    <input name="donor_name" id="name" class="form-control" type="text"  placeholder=" Enter your name">
                    @error('donor_name')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                </div>

           
                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="email" class="control-label">Email <span style="color: #E50000;">*</span></label>
                    <input name="email" id="email" class="form-control" type="email"  placeholder=" Enter your email">

                    {{-- @error('email')
                    <span class="text-danger">{{$message}}</span>
                   @enderror --}}
                   
                  </div>
                </div>
                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="phone" class="control-label">Phone <span style="color: #E50000;">*</span></label>
                    <input name="phone" id="phone" class="form-control" type="phone"  placeholder=" Enter your phone" >
                    {{-- @error('phone')
                    <span class="text-danger">{{$message}}</span>
                   @enderror --}}
                   
                  </div>
                </div>
                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="password" class="control-label">Password <span style="color: #E50000;">*</span></label>
                    <input name="password" id="password" class="form-control" type="password"   placeholder=" Enter your password">
                    {{-- @error('password')
                    <span class="text-danger">{{$message}}</span>
                   @enderror --}}
  
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary cont-frm-btn">Register</button>
                  </div>
                </div>
              </form>

            </div>
            <!--End Featured Item Col-->
        </div>
        <!--End Featured Row-->
    </div>
    <!--End Featured container-->
</section>


@endsection