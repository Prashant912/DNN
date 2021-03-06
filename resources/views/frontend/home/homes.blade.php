@extends('frontend.layouts.app')

@section('content')

 <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
                <div class="wrapper">
                <!-- News Slider -->
                    <div class="ticker marg-botm">
                        <div class="ticker-wrap">
                            <!-- News Slider Title -->
                            <div class="ticker-head up-case backg-colr col-md-2">Breaking News <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                            <div class="tickers col-md-10">
                                <div id="top-news-slider" class="owl-carousel ">


                                    <div class="item">
                                        <a href="blog-single.html"> <img src="{{asset('assets1/images/breaking/1.jpg')}}" alt="news image"> <span>Migrants Told: Stay in France </span></a>
                                    </div>
                                    <div class="item">
                                        <a href="blog-single.html"><img src="{{asset('assets1/images/breaking/2.jpg')}}" alt="news image"> <span>Duo Scripta An The Prieirmod</span></a>
                                    </div>
                                    <div class="item">
                                        <a href="blog-single.html"><img src="{{asset('assets1/images/breaking/3.jpg')}}" alt="news image"> <span>Two Loser Idaho Pot Smugglers </span></a>
                                    </div>
                                    <div class="item">
                                        <a href="blog-single.html"><img src="{{asset('assets1/images/breaking/4.jpg')}}" alt="news image"> <span>Car racer gives herself a mid-Event</span></a>
                                    </div>
                                    <div class="item">
                                        <a href="blog-single.html"><img src="{{asset('assets1/images/breaking/5.jpg')}}" alt="news image"> <span>Aaron Rodgers Criticizes </span></a>
                                    </div>
                                    <div class="item">
                                        <a href="blog-single.html"> <img src="{{asset('assets1/images/breaking/1.jpg')}}" alt="news image"> <span>Detroit Natives Wary & Recovery</span></a>
                                    </div>
                                    <div class="item">
                                        <a href="blog-single.html"><img src="{{asset('assets1/images/breaking/4.jpg')}}" alt="news image"> <span>Clinton campaign jilted as FBI</span></a>
                                    </div>                             
                               </div>
                           </div>
                        </div>
                    </div>  
                    <!-- End News Slider -->              
                </div>
            </div> 

            @if (Auth::check())           
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
                <div class="slider-area">
                    <div class="bend niceties preview-2">


                        <div id="ensign-nivoslider" class="slides">
                            
                            @foreach ($bannerImagedetal as $key=>$Image)
                            <img style="width: 500px; height: 500px;" src="/images/{{ $Image->image_name }}" alt="" title="#slider-direction-{{$key}}" /> @endforeach
                        </div>
                        <!-- direction 2 -->
                        @foreach ($bannerImagedetal as $key => $Image)
                            <div id="slider-direction-{{$key}}" class="slider-direction">
                                <div class="slider-content t-cn s-tb slider-{{$key}}">
                                    <div class="title-container s-tb-c">
                                        <div class="slider-botton">
                                            <ul>
                                                <li>
                                                    <a class="cat-link" href="category.html">{{ $Image->img_title }}</a> 
                                                    <span class="date"> 
                                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{ $Image->image_date }} 
                                                    </span>
                                                    <span class="comment">
                                                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                        </a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h1 class="title1"><a href="blog.html"><span>Record</span> proportion of women<br/>on degrees</a></h1>
                                        <div class="title2">{{ $Image->img_description }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <!-- Slider Area End Here-->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
                <div class="slider-right">
                    <ul>
                        <li>
                            <div class="right-content">
                                <span class="category"><a class="cat-link" href="blog.html">Business</a></span> 
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> June  28,  2017</span>
                                <h3><a href="blog-single.html">Trudeau forced to refugees.</a></h3>
                            </div>
                            <div class="right-image"><a href="blog-single.html"><img src="{{asset('assets1/images/sidebar-images/1.jpg')}}" alt="sidebar image"></a></div>
                        </li>
                        <li>
                            <div class="right-content">
                                <span class="category"><a class="cat-link" href="blog.html">Health</a></span> 
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>June  28,  2017 </span>
                                <h3><a href="blog-single.html">The exhibition Bankasy</a></h3>
                            </div>
                            <div class="right-image"><a href="blog-single.html"><img src="{{asset('assets1/images/sidebar-images/2.jpg')}}" alt="sidebar image"></a></div>
                        </li>
                        <li>
                            <div class="right-content">
                                <span class="category"><a class="cat-link" href="blog.html">Science</a></span> 
                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> June  28,  2017 </span> 
                                <h3><a href="blog-single.html">Hurricane Harvey: evacuations.</a></h3>                  
                            </div>
                            <div class="right-image"><a href="blog-single.html"><img src="{{asset('assets1/images/sidebar-images/3.jpg')}}" alt="sidebar image"></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section end Here -->
    <!-- All News Section Start Here -->
    <div class="all-news-area">
        <div class="container">
            <!-- latest news Start Here -->
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">
                    <ul class="nav nav-tabs">
                        <li class="title-bg">Latest News</li>
                       @foreach ($latestNewsCategory as $key => $category)
                        <li @if($key == count($latestNewsCategory)-1) class="active" @endif><a data-toggle="tab" href=#tab{{$key}}>{{$category->category_title}}</a></li>
                        @endforeach
                    </ul>


                    <div class="tab-content">
                        @foreach ($latestNewsCategory as $key => $category)
                            <div id=tab{{$key}} class="tab-pane fade in @if($key == count($latestNewsCategory)-1) active @endif">
                                <div class="tab-top-content">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">

                                            <a href="blog-single.html"><img class="img-responsive" src="{{isset($category->featuredImage[0]->img_name) ? asset($category->featuredImage[0]->img_name) : ''}}" alt="sidebar image"></a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">


                                            <span class="date"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> {{isset($category->featuredImage[0]->img_title) ? $category->featuredImage[0]->img_title : '' }} </a></span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                            <h3><a href="#">{{isset($category->featuredImage[0]->short_description) ? $category->featuredImage[0]->short_description : ''}}</a></h3>
                                            <p>{{isset($category->featuredImage[0]->long_description) ? $category->featuredImage[0]->long_description : '' }}</p>
                                            <a href="blog-single.html" class="read-more hvr-bounce-to-right">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-bottom-content">
                                    <div class="row">

                                        @foreach($category->newsaCategoryImageList as $key => $value)
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                            <div class="col-sm-12 col-xs-3 img-tab">
                                                <a href="blog-single.html"><img src="{{asset($value->img_name)}}" alt="News image"></a>
                                            </div>
                                            <div class="col-sm-12 col-xs-9 img-content">
                                                <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i>June 28, 2017</span>
                                                <h4><a href="blog-single.html">{{$value->img_title}}</a></h4>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Trending news  here-->
                    <div class="trending-news separator-large">
                        <div class="row">
                            <div class="view-area">
                                <div class="col-sm-8"> 
                                    <h3 class="title-bg">Trending News</h3>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <a href="#">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>    
                             
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="list-col">

                                    
                                    <a href="blog-single.html"> <img src={{$otherFourData['img_name'] }} alt="" title="Trending image" /></a>
                                    <div class="dsc">
                                        <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> {{$otherFourData['date']}} </span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="blog-single.html">{{$otherFourData['short_description']}} </a></h3>
                                        <p>{{$otherFourData['long_description']}}</p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="news-post">                        
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        @foreach($TrendNewsCategory as $key => $value)
                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                                            <a href="blog-single.html"> <img src={{$value['img_name']}} alt="" title="Trending image"></a>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                                            <h4><a href="blog-single.html">{{$value['short_description']}} </a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                        </div>
                                                         @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Start what’s hot now -->
                    <div class="hot-news">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="view-area">
                                    <div class="row">
                                        <div class="col-sm-8"> 
                                            <h3 class="title-bg">What’s hot now</h3>
                                        </div>
                                        <div class="col-sm-4 text-right">
                                            <a href="#">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured">
                                    <div class="blog-img">
                                        <a href="blog-single.html"><img src="{{asset('assets1/images/hot-news/1.jpg')}}" alt="" title="News image" /></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="category-sports.html" class="cat-link">Sports</a><span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017</span>
                                        <h4><a href="#">Car racer gives herself a mid-Event haicut</a></h4>
                                    </div>
                                </div>
                                <ul class="news-post news-feature-mb">
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4">
                                                <a href="blog-single.html"><img src="{{asset('assets1/images/hot-news/3.jpg')}}" alt="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 content">
                                                <h4><a href="#">Clinton Campaign Jilted & Search Emails</a></h4>
                                                <span class="author"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> yeamin</a></span> <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestib vitae libero vel purus tincidunt aliquet at nec erat. Mauris the diam, ultrices quis leo sed lacinia egestas.The wise man there always holds in these matters.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4">
                                                <a href="blog-single.html"><img src="{{asset('assets1/images/hot-news/2.jpg')}}" alt="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 content">
                                                <h4><a href="#">Aaron Rodgers Criticizes For</a></h4> <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestib vitae libero vel purus tincidunt aliquet at nec erat. Mauris the diam, ultrices quis leo sed lacinia egestas.The wise man there always holds in these matters.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4">
                                                <a href="blog-single.html"><img src="{{asset('assets1/images/hot-news/4.jpg')}}" alt="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 content">
                                                <h4><a href="#">Detroit Natives Wary & Recovery Threatens</a></h4>
                                                <span class="author"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> yeamin</a></span> <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestib vitae libero vel purus tincidunt aliquet at nec erat. Mauris the diam, ultrices quis leo sed lacinia egestas.The wise man there always holds in these matters.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End what’s hot now -->
                </div>
                <!--Sidebar Start Here -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none sidebar-latest">
                    <!--Like Box Start Here -->
                    <div class="like-box">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> </a><span>210,956 <br />likes</span>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a><span>350,580 <br />followers</span>
                            </li>
                            <li class="last">
                                <a href="#"><i class="fa fa-rss" aria-hidden="true"></i> </a><span>210,956 <br />subscribers</span>
                            </li>
                        </ul>
                    </div>
                    <!--Like Box End Here -->

                    <!--Add Start Here -->
                    <div class="add-section">
                        <img src="{{asset('assets1/images/add/2.jpg')}}" alt="add image">
                    </div>
                    <!--Add Box End Here -->
                    
                    <!--Newsletter Start Here -->
                    <div class="newsletter-info">
                        <form>
                            <fieldset>
                                <div class="form-group">
                                    <h4>Subscribe to Newsletter</h4>                                
                                    <div class="newsletter">
                                    <input class="form-control" placeholder="Email address..." type="text">
                                    <button class="btn-send" type="submit">Subscribe</button>
                                    <p>Get the latest news stories in your inbox</p>
                                    </div> 
                                </div>                                       
                            </fieldset>
                        </form>
                    </div>

                    <!--Newsletter End Here -->

                    <!--popular Post Start Here -->
                    <div class="sidebar popular">
                        <h3 class="title-bg">Popular Now</h3>
                        <ul>
                            <li>
                                <a href="category.html" class="category-btn hvr-bounce-to-right">Business</a>
                                <div class="post-image"><img src="{{asset('assets1/images/sidebar/1.jpg')}}" alt="News image"></div>
                                <div class="content">
                                    <h4>
                                        <a href="#">The exhibition Bankasy doesn’t want you to see</a>
                                    </h4>
                                    <span class="date"> 
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 
                                    </span> 
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                        </a>
                                    </span>
                                </div>
                            </li>
                        </ul> 
                    </div>
                     

                    <div class="hot-news popular-related">
                        <ul class="news-post">
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3 paddimg-right-none">
                                                    <img src="{{asset('assets1/images/popular/1.jpg')}}" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
                                                    <h4><a href="#"> US should prepare for <br /> Russian election</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3 paddimg-right-none">
                                                    <img src="{{asset('assets1/images/popular/2.jpg')}}" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
                                                    <h4><a href="blog-single.html"> Pellentesque Odio Nisi<br /> Euismod In Pharet</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3 paddimg-right-none">
                                                    <img src="{{asset('assets1/images/popular/3.jpg')}}" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
                                                    <h4><a href="blog-single.html"> Erant Aeque Neius No <br />Numes Electram</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3 paddimg-right-none">
                                                    <img src="{{asset('assets1/images/popular/4.jpg')}}" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
                                                    <h4><a href="blog-single.html"> Erant Aeque Neius No <br />Numes Electram</a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> 
                    <!--popular Post End Here --> 

                    <!--Recent comments Start Here -->
                        <div class="recent-comments separator-large">
                            <div id="comments-Carousel" class="carousel carousel-comments slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                <div class="next-prev-top">
                                    <div class="row">
                                        <div class="col-sm-9 col-xs-9">
                                            <div class="view-area">
                                                <h3 class="title-bg">Recent Comments</h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3 next-prev">
                                            <a class="left news-control" href="#comments-Carousel" data-slide="prev">
                                                <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                            </a>
                                            <a class="right news-control" href="#comments-Carousel" data-slide="next">
                                                <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>    
                                </div>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="dsc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipe isicing elit, sed do they eiusmod tempor incidin dunt ut labore et dolore</p>
                                            <span>- Thesera Minton</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="dsc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipe isicing elit, sed do they eiusmod tempor incidin dunt ut labore et dolore</p>
                                            <span>- Jon Min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    <!--Recent comments Start Here -->
                     <!--Add Start Here -->
                    <div class="add-section add-section2">
                        <img src="{{asset('assets1/images/add/3.jpg')}}" alt="add image">
                    </div>
                    <!--Add Box End Here -->          
                </div>
            </div>
        </div>
    </div>
    <!-- Fetuered videos Start Here -->
            <div class="fetuered-videos">
                <div class="container">
                    <div class="row">
                        <div class="view-area">
                            <div class="col-sm-12"> 
                                <h3 class="title-bg">Fetuered Videos</h3>
                            </div>
                        </div>
                    </div>
                    <div id="featured-videos-section" class="owl-carousel">
					    <div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{asset('assets1/images/fetuered/1.jpg')}}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{asset('assets1/images/fetuered/video-icon.png ')}}" alt=""></a>                           
										</div>
									</div>
								</div>                            
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span>
                                    <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{asset('assets1/images/fetuered/2.jpg')}}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{asset('assets1/images/fetuered/video-icon.png')}}" alt=""></a>                      
										</div>
									</div>
								</div>                            
								<div class="videos-text">
									<h3><a href="#">Woman Endure Five Year Slvery</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{asset('assets1/images/fetuered/3.jpg')}}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{asset('assets1/images/fetuered/video-icon.png ')}}" alt=""></a>                      
										</div>
									</div>
								</div>                            
								<div class="videos-text">
									<h3><a href="#">Health Benefits of Morning Running</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{asset('assets1/images/fetuered/4.jpg')}}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{asset('assets1/images/fetuered/video-icon.png')}}" alt=""></a>                  
										</div>
									</div>
								</div>                            
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{asset('assets1/images/fetuered/5.jpg')}}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{asset('assets1/images/fetuered/video-icon.png')}}" alt=""></a>                  
										</div>
									</div>
								</div>                            
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="single-videos">
								<div class="images">
									<a href="#"><img src="{{asset('assets1/images/fetuered/2.jpg')}}" alt=""></a>
									<div class="overley">
										<div class="videos-icon">
											<a class="popup-videos" href="http://www.youtube.com/watch?v=Cdajfy4voyY"><img src="{{asset('assets1/images/fetuered/video-icon.png ')}}" alt=""></a>                  
										</div>
									</div>
								</div>                            
								<div class="videos-text">
									<h3><a href="#">Smart Packs Parking Sensor Tech</a></h3>
									<span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 </span><span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50 </a></span>
								</div>
							</div>
						</div>
                    </div>
                </div>    
            </div>
        
    <!-- Fetuered videos End Here -->

    <!-- Hot News Start Here -->
    <div class="hot-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div id="news-Carousel" class="carousel carousel-news slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                    <div class="next-prev-top">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-9">
                                                <div class="view-area">
                                                    <h3 class="title-bg">Health & LIFESTYLE</h3>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 next-prev col-xs-3">
                                                <a class="left news-control" href="#news-Carousel" data-slide="prev">
                                                    <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                                </a>
                                                <a class="right news-control" href="#news-Carousel" data-slide="next">
                                                    <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                </a>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img src="{{asset('assets1/images/news-slider-image/1.jpg')}}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    November 28, 2017 
                                                </span>
                                                <span class="comment">
                                                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                                <h4><a href="blog-single.html"> Nam suscipit pretium consectetur. Proin tristique fermentum.</a></h4>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <a href="#"><img src="{{asset('assets1/images/news-slider-image/3.jpg')}}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 
                                                </span>
                                                <span class="comment">
                                                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                                <h4><a href="blog-single.html"> Nam suscipit pretium consectetur. Proin tristique fermentum.</a></h4>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div id="news-Carousel2" class="carousel carousel-news slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <!-- Left and right controls -->
                                    <div class="next-prev-top">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-9">
                                                <div class="view-area">
                                                    <h3 class="title-bg">Politics</h3>
                                                </div>
                                            </div>

                                            <div class="col-sm-3 col-xs-3 next-prev">
                                                <a class="left news-control" href="#news-Carousel2" data-slide="prev">
                                                    <span class="news-arrow-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                                </a>
                                                <a class="right news-control" href="#news-Carousel2" data-slide="next">
                                                    <span class="news-arrow-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                </a>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img src="{{asset('assets1/images/news-slider-image/2.jpg')}}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                    November 28, 2017 
                                                </span>
                                                <span class="comment">
                                                    <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                    </a>
                                                </span>
                                                <h4><a href="blog-single.html">Disabled people must be front and centre on TV – representation</a></h4>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a href="#"><img src="{{asset('assets1/images/news-slider-image/4.jpg')}}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017 </span>
                                                <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a></span>
                                                <h4><a href="blog-single.html">After Kim Briggs’s death, cyclists must realise that they are traffic too</a></h4>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <a href="#"><img src="{{asset('assets1/images/news-slider-image/2.jpg')}}" alt="" title="#slider-direction-1" /></a>
                                            <div class="dsc">
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017 </span>
                                                <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a></span>
                                                <h4><a href="blog-single.html">The new-style GCSEs show why politicians must do more explaining.</a></h4>
                                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Two Slider -->
                        <!--Around Area Start Here -->
                        <div class="view-area separator-large3">
                                <div class="row">
                                    <div class="col-sm-8"> 
                                        <h3 class="title-bg">Around the world</h3>
                                    </div>
                                    <div class="col-sm-4 text-right">
                                        <a href="#">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                            </div>
                        </div> 
                    <ul class="news-post news-post2 around-news">
                        <li>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content">
                                    <div class="item-post">

                                        <div class="blog-image">
                                            <a href="blog-single.html"><img src="{{asset('assets1/images/world/5.jpg')}}" alt="" title="News image" /></a>
                                        </div>
                                        <div class="content">
                                           <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017 
                                            </span>
                                            <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a>
                                            </span>
                                            <h4><a href="blog-single.html">Clinton campaign jilted as FBI to search emails</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestib vitae libero vel purus tincidunt aliquet at nec erat. Mauris the diam, ultrices quis leo sed lacinia egestas.The wise man there always holds in these matters.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="blog-image">
                                            <a href="blog-single.html"><img src="{{asset('assets1/images/world/6.jpg')}}" alt="" title="News image" /></a>
                                        </div>
                                        <div class="content">
                                            <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017 
                                            </span>
                                            <span class="comment">
                                                <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a>
                                            </span>
                                            <h4><a href="blog-single.html">Clinton campaign jilted as FBI to search emails</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestib vitae libero vel purus tincidunt aliquet at nec erat. Mauris the diam, ultrices quis leo sed lacinia egestas.The wise man there always holds in these matters.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="news-post news-post2 related">
                        <li>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                <a href="blog-single.html"><img src="{{asset('assets1/images/world/1.jpg')}}" alt="" title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html">Pellentesque Odio Nisi Euismod In Pharet</a></h4>
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                <a href="blog-single.html"><img src="{{asset('assets1/images/world/2.jpg')}}" alt="" title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html">prepare for Russian election</a></h4>
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                June 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                <a href="blog-single.html"><img src="{{asset('assets1/images/world/3.jpg')}}" alt="" title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html"> Erant Aeque Neius No Numes Electram </a></h4>
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                November 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 content">
                                    <div class="item-post">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 paddimg-right-none">
                                                <a href="blog-single.html"><img src="{{asset('assets1/images/world/4.jpg')}}" alt="" title="News image" /></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
                                                <h4><a href="blog-single.html">YouTube Acquire Twitch <br />For $1Billion</a></h4>
                                                <span class="date">
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                                June 28, 2017
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none">
                    <h3 class="title-bg featured-title">Featured News</h3>
                    <div class="sidebar">
                        <ul>
                            <li>
                                <a href="#" class="category-btn hvr-bounce-to-right">Business</a>
                                <div class="post-image"><a href="blog-single.html"><img src="{{asset('assets1/images/sidebar/1.jpg')}}" alt="News image" /></a></div>
                                <div class="content">
                                    <h4><a href="blog-single.html">The exhibition Bankasy doesn’t want you to see</a></h4>
                                    <span class="date"> 
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 
                                    </span> 
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                        </a>
                                    </span>
                                   
                                </div>
                            </li>
                            <li>
                                <a href="category-health.html" class="category-btn hvr-bounce-to-right">Health</a>
                                <div class="post-image"><a href="blog-single.html"><img src="{{asset('assets1/images/sidebar/2.jpg')}}" alt="News image" /></a></div>
                                <div class="content">
                                    <h4><a href="#">The exhibition Bankasy doesn’t want you to see</a></h4>
                                    <span class="date"> 
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 
                                    </span>
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="category-btn hvr-bounce-to-right">Fashion</a>
                                <div class="post-image"><a href="blog-single.html"><img src="{{asset('assets1/images/sidebar/3.jpg')}}" alt="News image" /></a></div>
                                <div class="content">
                                    <h4><a href="#">The exhibition Bankasy doesn’t want you to see</a></h4>
                                    <span class="date"> 
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017 
                                    </span> 
                                    <span class="comment">
                                        <a href="#">
                                            <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                        </a>
                                    </span>

                                </div>
                            </li>
                        </ul>
                        <div class="categories-home separator-large3">
                            <h3 class="title-bg">Categories</h3>
                            <ul>
                                <li><a href="category.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Business <span>45</span></a></li>
                                <li><a href="category-world.html"><i class="fa fa-angle-right" aria-hidden="true"></i> World <span>70</span></a></li>
                                <li><a href="category-fashion.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion <span>45</span></a></li>
                                <li><a href="category-politics.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Politics <span>55</span></a></li>
                                <li><a href="category-sports.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Sports <span>50</span></a></li>
                                <li><a href="category-health.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Health <span>65</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All News Section end Here -->
    <!-- Footer Area Section Start Here -->
    <!-- <div class="add-section separator-large2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="{{asset('assets1/images/footer-top.png')}}" alt="footer">
                </div>
            </div>
        </div>
    </div> -->
@endsection
