<footer class="footer switcher-footer-three">
    <!--Start Footer Top-->
    <div class="footer-top">
        <!--Start container-->
        <div class="container">
            <!--Start Row-->
            <div class="row">
                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-cont-details">
                        <h5 class="text-left text-upper">Short About us</h5>
                        <div class="border-line"></div>
                        <img class="img-responsive" src="new/images/logo/logo-footer.html" alt="">
                        <p class="text-left"> Blood Donation Pakistan is founded in 2020 is a nonprofit organization that is one of the largest independent, community-based blood centers in the Pakistan. 
                             Along with its operating divisions Community Blood Center. 
                            collect approximately 4,000 units of blood products each day
                            and serve local communities .</p>
                        <div class="footer-address">
                            <p class="text-left"><i class="fa fa-phone"></i> <a style="color: #ff9600" href="tel:+92 42 3590">+92 42 3590</a></p>

                       
                            <p class="text-left"><i class="fa fa-envelope"> </i>     <a style="color: #ff9600" href="mailto:bdsppakistan@gmail.com">bdsppakistan@gmail.com</a>  </p>
                        </div>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-categories">
                        <h5 class="text-left text-upper">Menus</h5>
                        <div class="border-line"></div>
                        <div class="footer-categories-links">
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fa fa-arrow-circle-right"></i> Home</a></li>
                                <li><a href="{{ route('about') }}"><i class="fa fa-arrow-circle-right"></i>About Us</a>
                                </li>
                                <li><a href="{{ route('why_donor') }}"><i class="fa fa-arrow-circle-right"></i>Why
                                        Become Donor</a></li>
                                <li><a href="{{ route('contact') }}"><i class="fa fa-arrow-circle-right"></i>contact</a>
                                </li>
                                <li><a href="{{ route('become_donor') }}"><i class="fa fa-arrow-circle-right"></i>Become
                                        A Donor</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-categories">
                        <h5 class="text-left text-upper">New Doners</h5>
                        <div class="border-line"></div>
                        <div class="footer-categories-links">
                            <ul>
                                @foreach ($super_donors as $donor)
                                <li>
                                    <a> <i class="fa fa-user">
                                        {{ $donor->donor_name }}
                                    </i></a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-contact-form">
                        <h5 class="text-left text-upper">Feeadback</h5>
                        @if(session()->has('successs'))
                         <div class="alert alert-success">
                              {{ session()->get('success') }}
                          </div>
                       @endif

                        <div class="border-line"></div>
                        {{-- http://ebloodbank.rexbd.net/contact.php --}}
                        <form action="{{ route('send_messge') }}" method="POST" id="feed-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="message_name">
                                @error('message_name')
                                <span class="text-danger">{{$message}}</span>
                              @enderror
                                <input type="text" class="form-control" placeholder="Email" name="message_email">
                                @error('message_email')
                                <span class="text-danger">{{$message}}</span>
                              @enderror
                                <input type="text" class="form-control" placeholder="Mobile" name="message_mobile">
                                @error('message_mobile')
                                <span class="text-danger">{{$message}}</span>
                              @enderror
                                <input type="hidden" name="location" value="feedback-location">
                                <textarea class="form-control" rows="5" placeholder="Message" name="message_message"></textarea>
                                @error('message_message')
                                <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-primary cont-frm-btn">Send Message</button>
                        </form>
                    </div>
                </div>
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
        <!--End container-->
    </div>
    <!--End Footer Top-->
    <!--Start Footer Bottom-->
    <div class="footer-bottom">
        <!--Start container-->
        <div class="container">
            <!--Start Row-->
            <div class="row">
                <!--Start Col-->
                <div class="col-sm-6 col-xs-12">
                    <div class="copy-right-text">
                        <p class="text-left">Copyright © 2018 - Blood Donation Pakistan - All Rights Reserved</p>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->
                <div class="col-sm-6 col-xs-12">
                    <div class="footer-menu">
                        <nav>
                            <ul>
                                <li><a href="">Home</a></li>

                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('why_donor') }}">Why Become Donor</a></li>
                                <li><a href="{{ route('contact') }}">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
        <!--End container-->
    </div>
    <!--End Footer Bottom-->

    <!--Start ClickToTop-->
    <div class="totop">
        <!--Start ClickToTop-->
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--End ClickToTop-->
</footer>
