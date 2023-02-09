@extends('layout2.master')

@section('content')
<body class="layout-wide color-seven">
    <!--Start Preloader Eight-->
    <div class="site-preloader eight">
        <div class="spinner"></div>
    </div>
    <!--End Preloader Eight-->

    <!--Start Body Wrap-->
    <div id="body-wrap">
        <!--Start Header-->
    
        <!--End Header--><br><br><br><br><br>
  <!-- About Info -->
  <div class="container content-md">
    <div class="row">
      <div class="col-md-12">
       
  
    
      
      </div>
    </div>
  </div>
  <!-- End About Info -->


        <!--Start Featured section-->
        <section class="business-feat">
            <!--Start Featured container-->
            <div class="container">
                              <!--Start Section Title-->
                <div class="section-title">
                    <h2 class="text-center text-bold"><span>Contact</span> With Us</h2>
                </div>
                <!--End Section Title-->

                <!--Start Featured Row-->
                <div class="row">
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
                    <!--Start Featured Item Col-->
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                      
                      <form action="{{ route('contact_us') }}" method="post" >
                        @csrf
                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label class="control-label">Name <span style="color: #E50000;">*</span></label>
                            <input name="name" id="name" class="form-control" type="text" >
                            @error('name')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label class="control-label">Email <span style="color: #E50000;">*</span></label>
                            <input name="email" id="email" class="form-control" type="text" >
                            @error('email')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label class="control-label">Mobile <span style="color: #E50000;">*</span></label>
                            <input name="mobile" id="mobile" class="form-control" type="text" >
                            @error('mobile')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>
                        </div>

                        <div class="col-md-6 col-md-offset-0">
                          <div class="form-group">
                            <label class="control-label">Address <span style="color: #E50000;">*</span></label>
                            <input name="address" id="address" class="form-control" type="text" >
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                            
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="control-label">Message <span style="color: #E50000;">*</span></label>
                            <textarea rows="8" name="message" id="message" class="form-control" ></textarea>
                            @error('message')
                            <span class="text-danger">{{$message}}</span>
                           @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary cont-frm-btn">Send Message</button>
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
        <!--End Featured section-->

       <!--Start Footer-->
 
        <!--End Footer-->
    </div>
  

</body>





@endsection