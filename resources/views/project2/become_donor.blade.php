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
            <h2 class="text-center text-bold"><span>Become </span>a Donor</h2>
        </div>
        <!--End Section Title-->
      

        <!--Start Featured Row-->
        <div class="row">
            <!--Start Featured Item Col-->
            <div class="col-md-8 col-md-offset-2 col-sm-12">
              
              <form action="{{ route('edonor_store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="name" class="control-label">Name <span style="color: #E50000;">*</span></label>
                    <input name="donor_name" id="name" class="form-control" type="text">
                    @error('donor_name')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="img" class="control-label">Picture <span style="color: #E50000;">*</span></label>
                    <input name="image" id="img" class="form-control" type="file" >
                    @error('image')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="age" class="control-label">Age <span style="color: #E50000;">*</span></label>
                    <input name="age" id="age" class="form-control" type="number" >
                    @error('age')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="mobile" class="control-label">Mobile <span style="color: #E50000;">*</span></label>
                    <input name="phone" id="phone" class="form-control" type="text" >
                    @error('phone')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="location" class="control-label">City <span style="color: #E50000;">*</span></label>
                    <select name="city" id="city" class="form-control" >
                        <option value="">Select City</option>

                        @foreach ($all_cities as $city )
                        <option value="{{ $city->id}}" selected="selected" > {{$city->city}} </option>

                        @endforeach
                     
                    </select>
                    @error('city')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>


                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="sex" class="control-label">Gender <span style="color: #E50000;">*</span></label>
                    <select name="gender" id="sex" class="form-control">
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select>
                    @error('gender')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="bgroup" class="control-label">Blood Group <span style="color: #E50000;">*</span></label>

                    <select name="blood_group" id="blood_group" class="form-control">
                        <option value="">Select City</option>

                        @foreach ($all_bloods as $blood )
                    <option value="{{ $blood->id}}" selected="selected" > {{$blood->blood_group}}</option>we </option>

                        @endforeach
                     
                    </select>
                    {{-- <select name="bgroup" id="bgroup" class="form-control" required="">
                        <option value="16">AB+</option><option value="17">AB-</option><option value="23">O+</option>                            </select>
                  </div> --}}
                  @error('glood_group')
                     <span class="text-danger">{{$message}}</span>
                    @enderror
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