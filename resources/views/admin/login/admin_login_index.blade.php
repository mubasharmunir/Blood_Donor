<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@include('admin.include.head')

<body>

    <style>
        .pass {
            width: 100%;

            height: 50px;
        }
    </style>
    <div class="bg" style="width: 1349px; z-index: -999999; position: fixed;">

        <img src="{{ asset('admin/assets/backgrounds/1.jpg') }} "
            style="position: inherit;width: 100%; height: 819.036px;z-index:-999999;">
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 text">
                            <h1>BDMS</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Admin Login</h3>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form method="post" action="{{ route('admin_login') }}">
                                
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Enter your Email</label><br>
                                        <input type="text" placeholder="Enter Email" name="email"
                                        
                                         class="pass form-control">
                                        @error('email')
                                          <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="[password]">Enter your Password</label><br>
                                        <input type="password" placeholder="Enter Password" name="password"
                                            class="pass form-control">
                                            @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                          @enderror
                                            
                                    </div>
                                    {{-- id="login_check_submit_button" --}}
                                    <button type="submit"  class="btn btn-info"
                                        style="height:50px !important; width:100%;"> Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>

</html>
