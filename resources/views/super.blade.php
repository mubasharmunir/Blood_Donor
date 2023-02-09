@extends('layout2.master')

@section('content')
    <section class="directory-search-form-slider business">
        <!--Start Slider Carousel-->
        <div id="directory-slider-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <!--Start Slide Item-->
                <div class="item active" >
                    <img src="new/assets/img/slider/img1.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="directory-slider-overlay">
                        <div class="carousel-caption">
                            <div class="slider-content">
                                <h2 class="text-bold animated rollIn">Wellcome
                                    to Blood Donation Society Pakistan</h2>
                                <h3 class="animated rollIn" >Blood Donation Society Pakistan</h3>
                            </div>
                        </div>

                    </div>
                   
                </div>
                <div class="item">
                    <img src="new/assets/img/slider/img2.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="directory-slider-overlay">
                        <div class="carousel-caption">
                            <div class="slider-content">
                                <h2 class="text-bold animated rollIn">Wellcome
                                    to Blood Donation Society Pakistan</h2>
                                <h3 class="animated rollIn" >Blood Donation Society Pakistan</h3>
                            </div>
                        </div>

                    </div>
                 
                </div>
                <div class="item">
                    <img src="new/assets/img/slider/img3.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="directory-slider-overlay">
                        <div class="carousel-caption">
                            <div class="slider-content">
                                <h2 class="text-bold animated rollIn">Wellcome
                                    to Blood Donation Society Pakistan</h2>
                                <h3 class="animated rollIn" >Blood Donation Society Pakistan</h3>
                            </div>
                        </div>

                    </div>
                  
                </div>
                <!--End Slide Item-->









            </div>





            <a class="left carousel-control" href="#directory-slider-carousel" data-slide="prev"><span
                    class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#directory-slider-carousel" data-slide="next"><span
                    class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>






        <!--End Slider Carousel-->

        <!--Start Search Filter-->

        <div class="container">
            <div class="row">
                <form action="{{ route('donor_search') }}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <div class="search-filter">
                            <!--Start Search Keyword-->
                            {{-- <input type="text" class="form-control keyword" name="donor_name"
                                value="" placeholder="DonerName"> --}}
                            {{-- @if ($posts->isNotEmpty()) --}}
                            {{-- @foreach ($posts as $search)
                                     <div class="post-list">
                                        <p>{{ $search->donor_name }}</p>
                                      </div>
                                   @endforeach --}}
                            {{-- @else  --}}
                            {{-- <div>
                                      <h2>No posts found</h2>
                                  </div>
                                @endif --}}

                            <!--End Search Filter-->
                            <!--Start Search Location Options-->
                            <div class="col-md-5 ">
                                <select name="blood_group"
                                    class="form-control
                                selectpicker">
                                    <option value="">Blood Groups</option>
                                    @foreach ($blood_groups as $blood)
                                        <option value="{{ $blood->id }}">{{ $blood->blood_group }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--End Search Location Options-->
                            <!--Start Search Category Options-->
                            {{-- <input type="text" class="form-control
                            keyword" name="city"
                                placeholder="Location" value="{{ request('search') }}"> --}}


                            <div class="col-md-4">
                                <select name="city"
                                    class="form-control
                                    selectpicker">
                                    <option value="">Location</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->city }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--End Search Category Options-->

                            <!--Start Search Button-->

                            <div class="search-btn">
                                <button type="submit">SEARCH</button>
                            </div>
                            <!--End Search Button-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--End Search Filter-->
    </section>
    <section class="business-feat">
        <!--Start Featured container-->
        <div class="container">
            <!--Start Section Title-->
            <div class="section-title">
                <h2 class="text-center text-bold"><span>Donors</span></h2>
            </div>
            <!--End Section Title-->
            <!--Start Featured Row-->


            <div class="row">
                @foreach ($super_donors as $super)
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
                                        Blood Group:</strong> {{ $super->donor->blood_group }}
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


                <!--Start Featured Item Col-->
                {{-- <div class="col-md-4 col-sm-6">
                    <!--Start Featured Item-->
                    <div class="feat-item">
                        <div class="feat-item-img">
                            <img class="img-responsive" src="new/assets/img/appointment.jpg" style="height: 300px" alt="">
                        </div>
                        <div class="feat-item-cont">
                            <h4 class="text-bold">Abir Khan</h4>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Blood
                                    Group:</strong> </p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Age:</strong>
                                22</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Sex:</strong>
                                MALE</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Mobile:</strong>
                                8801737042794</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Location:</strong>
                                Uttara</p>
                        </div>
                    </div>
                    <!--End Featured Item-->
                </div> --}}
                <!--End Featured Item Col-->


                <!--Start Featured Item Col-->
                {{-- <div class="col-md-4 col-sm-6">
                    <!--Start Featured Item-->
                    <div class="feat-item">
                        <div class="feat-item-img">
                            <img class="img-responsive" src="new/assets/img/user_2.jpg" style="height: 300px" alt="">
                        </div>
                        <div class="feat-item-cont">
                            <h4 class="text-bold">dv b</h4>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Blood
                                    Group:</strong> </p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Age:</strong>
                                55</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Sex:</strong>
                                MALE</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Mobile:</strong>
                                88001737042794</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Location:</strong>
                                dhaka</p>
                        </div>
                    </div>
                    <!--End Featured Item-->
                </div> --}}
                <!--End Featured Item Col-->





                <!--Start Featured Item Col-->
                {{-- <div class="col-md-4 col-sm-6">
                    <!--Start Featured Item-->
                    <div class="feat-item">
                        <div class="feat-item-img">
                            <img class="img-responsive" src="new/assets/img/team_9.jpg" style="height: 300px" alt="">
                        </div>
                        <div class="feat-item-cont">
                            <h4 class="text-bold">dv b</h4>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Blood
                                    Group:</strong> </p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Age:</strong>
                                55</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Sex:</strong>
                                MALE</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Mobile:</strong>
                                88001737042794</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Location:</strong>
                                dhaka</p>
                        </div>
                    </div>
                    <!--End Featured Item-->
                </div> --}}
                <!--End Featured Item Col-->






                <!--Start Featured Item Col-->
                {{-- <div class="col-md-4 col-sm-6">
                    <!--Start Featured Item-->
                    <div class="feat-item">
                        <div class="feat-item-img">
                            <img class="img-responsive" src="new/assets/img/team_6.jpg" style="height: 300px" alt="6">
                        </div>
                        <div class="feat-item-cont">
                            <h4 class="text-bold">dv b</h4>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Blood
                                    Group:</strong> </p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Age:</strong>
                                55</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Sex:</strong>
                                MALE</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Mobile:</strong>
                                88001737042794</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Location:</strong>
                                dhaka</p>
                        </div>
                    </div>
                    <!--End Featured Item-->
                </div> --}}
                <!--End Featured Item Col-->


                <!--Start Featured Item Col-->





                {{-- <div class="col-md-4 col-sm-6">
                    <!--Start Featured Item-->
                    <div class="feat-item">
                        <div class="feat-item-img">
                            <img class="img-responsive" src="new/assets/img/team_7.jpg" style="height: 300px" alt="team_7">
                            
                        </div>
                        <div class="feat-item-cont">
                            <h4 class="text-bold">dv b</h4>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Blood
                                    Group:</strong> </p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Age:</strong>
                                55</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Sex:</strong>
                                MALE</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Mobile:</strong>
                                88001737042794</p>
                            <p><i class="fa fa-arrow-circle-right
                                color-main"></i><strong>
                                    Location:</strong>
                                dhaka</p>
                        </div>
                    </div>
                    <!--End Featured Item-->
                </div> --}}
                <!--End Featured Item Col-->
            </div>
            {{-- @endforeach --}}
            <!--End Featured Row-->
        </div>
        <!--End Featured container-->
    </section>
    <section class="counter two">
        <div class="counter-bg-ovelay"></div>
        <!--Start container-->
        <div class="container">
            <div class="row">
                <!--Start Item-->
                <div class="col-sm-4">
                    <div class="counter-item">
                        <i class="fa fa-users text-center"></i>
                        <h1 class="text-center extra integers">{{ $super_donors->count() }}</h1>
                        <h4 class="text-center">Total Donors</h4>
                    </div>
                </div>
                <!--End Item-->


                <!--Start Item-->
                <div class="col-sm-4">
                    <div class="counter-item">
                        <i class="fa fa-users text-center"></i>
                        <h1 class="text-center extra integers">{{ $super_donors->count() }}</h1>
                        <h4 class="text-center">Available Donors</h4>
                    </div>
                </div>
                <!--End Item-->


                <!--Start Item-->
                <div class="col-sm-4">
                    <div class="counter-item">
                        <i class="fa fa-medkit text-center"></i>
                        <h1 class="text-center extra integers">{{ $blood_groups->count() }}</h1>
                        <h4 class="text-center">Blood Groups</h4>
                    </div>
                </div>
                <!--End Item-->

            </div>
        </div>
        <!--Start container-->
    </section>
    <section class="doctor testimonial three">
        <!--Start container-->
        <div class="container">
            <!--Start Section Title-->
            <div class="section-title two">
                <h2 class="text-center text-bold">Testimonial</h2>
            </div>
            <!--End Section Title-->

            <!--Start Testimonial Item Row-->
            <div class="row">
                <!--Start Testimonial Item Col-->
                <div class="col-md-6">
                    <!--Start Testimonial Item-->
                    <div class="testi-item-three">
                        <div class="testi-item-left float-left">
                            <img class="img-responsive"
                                src="../shanto.thesoftking.com/eblood/new/assets/img/1504983857.html" alt="">
                        </div>
                        <div class="testi-item-right float-right">
                            <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis totam ex architecto labore dolores, itaque sapiente aliquam quae quidem deserunt cupiditate distinctio ipsa expedita iste, fugit illum. Autem, accusamus consectetur.s</blockquote>
                        </div>
                    </div>
                    <!--End Testimonial Item-->
                </div>
                <!--End Testimonial Item Col-->


                <!--Start Testimonial Item Col-->
                <div class="col-md-6">
                    <!--Start Testimonial Item-->
                    <div class="testi-item-three">
                        <div class="testi-item-left float-left">
                            <img class="img-responsive" src="../shanto.thesoftking.com/eblood/assets/img/1504983807.html"
                                alt="">
                        </div>
                        <div class="testi-item-right float-right">
                            <blockquote>Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.
                                Dignissimos veritatis, suscipit beatae
                                sunt assumenda ipsum earum recusandae
                                fuga, omnis nam laborum, accusamus
                                inventore cupiditate libero fugit at.
                                Enim, impedit, perspiciatis.</blockquote>
                        </div>
                    </div>
                    <!--End Testimonial Item-->
                </div>
                <!--End Testimonial Item Col-->


            </div>
            <!--End Testimonial Item Row-->
        </div>
        <!--End container-->
    </section>
@endsection
