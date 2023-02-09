@extends('layout2.master')

@section('content')
    <html lang="en">
    @include('admin.include.head')

    <body>


        <div class="row" style="margin-top:-200px;">

            <div class="section">
                <div class="container">
                    <div class="col-md-12 page-header">
                        <span class="title ">Donors Details </span>

                        <a href="{{ route('index') }}" class="btn btn-sm btn-success pull-right">
                            back
                        </a>
                    </div>
                    <div class="row" style="margin-left: 100px">
                        @foreach ($search as $super)
                            <!--Start Featured Item Col-->
                            <div class="col-md-4 col-sm-6">
                                <!--Start Featured Item-->
                                <div class="feat-item">
                                    <div class="feat-item-img">
                                        {{-- {{ $donor->image }} --}}
                                        <img class="img-responsive" src="{{ $super->image }}" style="height: 200px" alt="">
                                    </div>
                                    <div class="feat-item-cont">
                                        <h4 class="text-bold">{{ $super->donor_name }}</h4>
                                        <p><i
                                                class="fa fa-arrow-circle-right
                                        color-main"></i><strong>
                                            Blood Group:</strong>   {{ $super->donor->blood_group }}
                                        </p>
                                        <p>
                                            <i class="fa fa-arrow-circle-right color-main"></i>
                                            <strong> Age:</strong>{{ $super->age }}
                                        </p>
                                        <p>
                                            <i class="fa fa-arrow-circle-right color-main"></i>
                                            <strong>Sex:</strong>{{ $super->gender }}
                                        </p>
                                        <p>
                                            <i class="fa fa-arrow-circle-right color-main"></i>
                                            <strong>Mobile:</strong>{{ $super->phone }}
                                        </p>
                                        <p><i
                                                class="fa fa-arrow-circle-right
                                        color-main"></i><strong>
                                                Location:</strong> {{ $super->city->city }}
        
                                        </p>
                                    </div>
                                </div>
                                <!--End Featured Item-->
                            </div>
                        @endforeach
                        <!--End Featured Item Col-->
                    </div>
                    
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>
    </body>

    </html>
@endsection
