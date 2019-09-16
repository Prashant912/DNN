    
@extends('frontend.layouts.app')

@section('content')

    <div class="inner-page-header">
        <div class="banner">
            <img src="{{asset('assets1/images/banner/1.jpg')}}" alt="Banner">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="index.html">Home <i class="fa fa-compress" aria-hidden="true"></i> </a> Single Post</li>
                            </ul>
                        </div>
                        <div class="header-page-title">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="header-page-subtitle">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                <br>alteration in some form, by injected humou</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Header serction end here -->
 
   <!-- Contact Us Page Start Here -->
    <div class="single-blog-page-area contact-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9364273.363926433!2d-12.392661146939734!3d55.03971934808962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited+Kingdom!5e0!3m2!1sen!2sbd!4v1500619264549" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> 
                    <div class="location-area">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <h3>Location</h3>
                        <p>{{$locationdata->description}}</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{$locationdata->address}} </li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> Phone: {{$locationdata->contact_number}}</a></li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i> Fax:<a href="fax:+3450-875-3313">{{$locationdata->fax}}</a></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@gmail.com">{{$locationdata->email}}</a></li>
                        </ul>
                        </div>
                    </div> 
                    </div>                 
                    <div class="leave-comments-area">
                        <h3>Contact Us</h3>
                        <div id="form-messages"></div>
                        {!! Form::open(['method' => 'POST','route' => ['post_contact'], 'class'=>'form form-horizontal','enctype'=>'multipart/form-data']) !!}

                        @csrf

                       <!--  @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif -->

                        <div style="color: red;" id="pk"></div>

                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::text('fname', null, array('placeholder' => 'fname','class' => 'form-control')) !!}

                                            @error('fname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div style="color: red;" id="prashant"></div>
                                    </div>                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                    
                                            {!! Form::text('lname', null, array('placeholder' => 'lname','class' => 'form-control')) !!}
                                            @error('lname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div style="color: red;" id="pandey"></div>
                                    </div>
                                </div> 
                                <div class="row">   
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                             {!! Form::email('email', null, array('placeholder' => 'email','class' => 'form-control')) !!}
                                             @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                          <div style="color: red;" id="pk"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            

                                             {!! Form::text('phone', null, array('placeholder' => 'phone','class' => 'form-control')) !!}

                                             @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-sm-12">
                                        <div class="form-group">

                                             {!! Form::textarea('message', null, array('placeholder' => 'message','class' => 'form-control','id'=>'message')) !!}

                                             @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send" type="submit">Send Message </button>
                                        </div>
                                    </div>
                                </div>    
                            </fieldset>
                       {!! Form::close() !!}
                    </div>                                 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="sidebar-area">
                        <div class="like-box-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="like-page">Follow us on twitter<br/>2109 followers</span> <span class="like">
                                <i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="recent-post-area hot-news">
                            <h3 class="title-bg">Recent Post</h3>
                            <ul class="news-post">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="images/popular/1.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="blog-single.html"> US should prepare for<br/> Russian election</a></h4>
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
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="images/popular/2.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="blog-single.html">Pellentesque Odio Nisi <br/>Euismod In Pharet</a></h4>
                                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>June 28, 2017</span>
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
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="images/popular/3.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="blog-single.html"> Erant Aeque Neius No <br/>Numes Electram</a></h4>
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
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="images/popular/4.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="blog-single.html">Erant Aeque Neius No <br/>Numes Electram</a></h4>
                                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>June 28, 2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="add">
                            <img src="images/add/4.jpg" alt="Add">
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>




@push('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){

    $("form").submit(function(event){
        
        event.preventDefault();

        var fname = ($("input[name=fname]").val());
        var lname = ($("input[name=lname]").val());
        var email = ($("input[name=email]").val());
        var phone = ($("input[name=phone]").val());
        // var message = ($("input[name=message]").val());
        var message = $('textarea#message').val();


         if (fname.length == 0) {
            // alert("Please input a first name");

            $('#prashant').html('fuck you');


        } else if (lname.length == 0) {
            $('#pandey').html('fuck you');
        } else if (email.length == 0) {
            $('#pk').html('fuck you');
        }
    
       /* alert("value:: "+fname+lname+email+phone+message);*/
        // $('#target').val(phoneNumber);

        $.ajax({
        type:'post',
        url:'/front/post-contact',
        data:{'fname' : fname, 'lname' : lname,'email':email,'phone':phone,'message':message,"_token": "{{ csrf_token() }}",},
        cache:true,
        //dataType: 'JSON',
        success:function(res){

            console.log(res);
            $('#pk').html(res.message);
            // alert('Records Sucessfuly Recorded');
            // window.location = 'add_member.php';
            // $('#houseid').val(hhouseid);    
        }
        });

    })

})


</script>

@endsection


