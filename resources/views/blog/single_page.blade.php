
@extends('layout.master')
@section('content')
<section class="section-content-block">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <article class="post single-post-inner">
                    <div class="post-inner-featured-content">
                        <img alt="" src="{{ asset('assets/images/blog_3.jpg') }}">
                    </div>
                    <div class="single-post-inner-title">
                        <h2>Attendance Allowance campaign</h2>
                        <p class="single-post-meta"><i class="fa fa-user"></i>&nbsp; Deborah Beck &nbsp; &nbsp; <i class="fa fa-share"></i>&nbsp; Environment, Pet &amp; Education</p>
                    </div>
                    <div class="single-post-inner-content">
                        <p>
                            The theme of this yearâ€™s World Blood Donor Day is â€œBlood connects us allâ€. It focuses on thanking blood donors and highlights the dimension of â€œsharingâ€ and â€œconnectionâ€ between blood donors and patients. In addition, we have adopted the slogan â€œShare life, give bloodâ€, to draw attention to the roles that voluntary donation systems play in encouraging people to care for one another and promote community cohesion.
                        </p>
                        <p>
                            The campaign aims to highlight stories of people whose lives have been saved through blood donation, to motivate regular blood donors to continue giving blood, and motivate people in good health who have never given blood to begin doing so, particularly young people.
                        </p>
                    </div>

                    <div class="single-post-inner-meta">
                        <div class="tag-list">
                            <a href="#">Donation</a>
                            <a href="#">Blood</a>
                            <a href="#">Happy</a>
                            <a href="#">People</a>
                        </div>
                    </div>


                </article> <!--  end single-post-container -->

                <div class="article-author clearfix">

                    <div class="topic-bold-header clearfix">
                        <h4>Article by <a href="#">Deborah Beck</a></h4>
                    </div> <!-- end .topic-bold-header  -->

                    <figure class="author-avatar">
                        <a href="#">
                            <img src="{{ asset('assets/images/user_1.jpg') }}" alt="Avatar">
                        </a>
                    </figure>

                    <div class="about_author">
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam feugiat vitae ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                    </div>

                    <div class="social-icons margin-top-11 clearfix">
                        <a class="fa fa-facebook social_icons" href="#" data-original-title="Facebook"></a>
                        <a class="fa fa-twitter social_icons" href="https://twitter.com/#" data-original-title="Twitter"></a>
                        <a class="fa fa-flickr social_icons" href="http://www.flickr.com/photos/#" data-original-title="Flickr"></a>
                        <a class="fa fa-youtube social_icons" href="http://www.youtube.com/#" data-original-title="Youtube"></a>
                        <a class="fa fa-linkedin social_icons" href="#" data-original-title="Linkedin"></a>
                    </div>

                </div> <!-- end .article-author  -->

                <div class="post-nav-section clearfix">

                    <a class="btn btn-primary fr" href="#">Next Post <i class="fa fa-angle-double-right"></i></a>
                    <a class="btn btn-primary" href="#"><i class="fa fa-angle-double-left"></i> Previous Post</a>

                </div> <!-- end .post-nav-section  -->

                <div class="related-post">

                    <div class="topic-bold-header clearfix">
                        <h4>Related Posts</h4>
                    </div> <!-- end .topic-bold-header  -->

                    <ul>
                        <li><a href="#">- Make Kalam's House A Knowledge Centre</a></li>
                        <li><a href="#">- TRAI Pledges to Protect Net Neutrality </a></li>
                        <li><a href="#">-  Improve Safety Measures For Women Passengers</a></li>
                    </ul>

                </div> <!-- end .related-post  -->

                <div class="comments-area" id="comments">
                    <a href="#respond" class="article-add-comments"><i class="fa fa-plus"></i></a>         
                    <div class="topic-bold-header clearfix">
                        <h4>4 comments to this article</h4>
                    </div> <!-- end .topic-bold-header  -->
                    <ol class="commentslist">
                        <li>
                            <article class="clearfix">
                                <header>
                                    <h5><a href="#">Mahbub Alam Khan</a></h5>
                                    <p><span>on jan 19th, 2013 at 3:05 Pm - </span><a href="#">Reply</a></p>
                                </header>
                                <figure class="comment-avatar">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/user_1.jpg') }}" alt="Avatar">
                                    </a>
                                </figure>
                                <p class="waiting-moderation">
                                    Your comment is awaiting for moderation.
                                </p>

                                <div class="comment_text">
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                </div>

                            </article>
                        </li>

                        <li>
                            <article class="clearfix">
                                <header>
                                    <h5><span>ADMIN</span><a href="#">Mahbub Alam Khan</a></h5>
                                    <p><span>on jan 19th, 2013 at 3:05 Pm - </span><a href="#">Reply</a></p>
                                </header>

                                <figure class="comment-avatar">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/user_2.jpg') }}" alt="Avatar">
                                    </a>
                                </figure>

                                <p class="waiting-moderation">
                                    Your comment is awaiting for moderation.
                                </p>

                                <div class="comment_text">
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                </div>

                            </article>


                            <ol>

                                <li>
                                    <article class="clearfix">
                                        <header>
                                            <h5>Mahbub Alam Khan</h5>
                                            <p><span>on jan 19th, 2013 at 3:05 Pm - </span><a href="#">Reply</a></p>
                                        </header>

                                        <figure class="comment-avatar">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/user_3.jpg') }}" alt="Avatar">
                                            </a>
                                        </figure>
                                        <div class="comment_text">
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                        </div>
                                    </article>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <article class="clearfix">
                                <header>
                                    <h5><a href="#">Mahbub Alam Khan</a></h5>
                                    <p><span>on jan 19th, 2013 at 3:05 Pm - </span><a href="#">Reply</a></p>
                                </header>
                                <figure class="comment-avatar">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/user_4.jpg') }}" alt="Avatar">
                                    </a>
                                </figure>
                                <p class="waiting-moderation">
                                    Your comment is awaiting for moderation.
                                </p>
                                <div class="comment_text">
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                                </div>
                            </article>
                        </li>
                    </ol>
                    <div class="comments-nav-section clearfix">
                        <a href="#" class="btn btn-primary fr">Newer Comments <i class="fa fa-angle-double-right"></i></a>
                        <a href="#" class="btn btn-primary"><i class="fa fa-angle-double-left"></i> Older Comments</a>
                    </div> <!-- end comments-nav-section-->
                    <div id="respond">
                        <div class="topic-bold-header clearfix">
                            <h4>Leave a reply</h4>
                        </div> <!-- end .topic-bold-header  -->
                        <form role="form" action="#" method="post" id="comment-form">
                            <div class="form-group">

                                <input type="text" class="form-control" id="author" placeholder="Name">                                            
                            </div>
                            <div class="form-group">

                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="url" placeholder="URL">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="comment" id="comment" placeholder="Write Your Comment"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-custom">Submit Comment</button>
                            </div>
                        </form>
                    </div> <!-- end respond-->
                </div> <!-- end comments-area-->
            </div> <!--  end .single-post-container -->
            <div class="col-md-4 col-sm-12">
                <div class="widget site-sidebar">
                    <h2 class="widget-title">Search</h2>
                    <form action="http://templates.bwlthemes.com/blood_donation/index.html" id="search-form" class="search-form" role="form" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search....">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        </div>
                        <input type="hidden" value="submit">
                    </form> <!-- end #search-form  -->
                </div> <!--  end .widget -->            

                <div class="widget site-sidebar">
                    <h2 class="widget-title">Categories</h2>
                    <ul class="widget-post-category clearfix">
                        <li>
                            <a title="View all posts filed under Environment" href="#">Blood Relation</a>
                            <span class="pull-right badge">42</span>
                        </li>
                        <li>
                            <a title="View all posts filed under Technology" href="#">AB- Blood donor</a>
                            <span class="pull-right badge">40</span>
                        </li>
                        <li>
                            <a title="View all posts filed under Health" href="#">Keep Safe Blood</a>
                            <span class="pull-right badge">32</span>
                        </li>
                        <li>
                            <a title="View all posts filed under Disaster" href="#">Preserve Blood</a>
                            <span class="pull-right badge">26</span>
                        </li>
                        <li>
                            <a title="View all posts filed under Environment Right" href="#">Donation center</a>
                            <span class="pull-right badge">18</span>
                        </li>
                        <li>
                            <a title="View all posts filed under Education" href="#">Proper Education</a>
                            <span class="pull-right badge">12</span>
                        </li>
                    </ul>
                </div> <!--  end .widget -->
                <div class="widget site-sidebar">
                    <h2 class="widget-title">Recent Posts</h2>
                    <div class="single-recent-post">
                        <a href="#">Zomato Commits to Making Food Delivery</a>
                        <span><i class="fa fa-calendar icon-color"></i>&nbsp; April 19, 2017</span>
                    </div>
                    <div class="single-recent-post">
                        <a href="#">Make Kalam's House A Knowledge Centre</a>
                        <span><i class="fa fa-calendar icon-color"></i>&nbsp; April 18, 2017</span>
                    </div>
                    <div class="single-recent-post">
                        <a href="#">Central Government Retracts Proposal</a>
                        <span><i class="fa fa-calendar icon-color"></i>&nbsp; April 17, 2017</span>
                    </div>
                </div> <!--  end .widget -->
                <div class="widget site-sidebar">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="widget-recent-tags clearfix">
                        <li>
                            <a href="#" title=""> claycold</a> 
                        </li>
                        <li>
                            <a href="#" title=""> crushing</a> 
                        </li>
                        <li>
                            <a href="#" title=""> chattels</a> 
                        </li>
                        <li>
                            <a href="#" title=""> dinarchy</a> 
                        </li>
                        <li>
                            <a href="#" title=""> cienaga</a> 
                        </li>
                        <li>
                            <a href="#" title=""> doolie</a> 
                        </li>
                    </ul><!--  end .widget-recent-tags -->
                </div> <!--  end .widget -->
            </div> <!-- end .col-sm-4  -->
        </div> <!--  end row  -->
    </div> <!--  end container -->
</section>
@endsection