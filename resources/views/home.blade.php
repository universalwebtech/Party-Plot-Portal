<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>:: Book Party Plot ::</title>

<!-- =================== FAVICON ==================== -->
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
<!-- =================== FAVICON ==================== -->

<!-- =================== WEB CSS BOC ==================== -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}"/>
<link href="{{ asset('css/media.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/webfont.css') }}" rel="stylesheet" type="text/css">
<link rel='stylesheet' id='shop-isle-flexslider-css'  href="{{ asset('css/flexslider.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='shop-isle-main-style-css'  href="{{ asset('css/slider.css') }}" type='text/css' media='all' />
<!-- =================== WEB CSS EOC ==================== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<!-- ================ GOOGLE FONT BOC =================== -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- ================ GOOGLE FONT EOC =================== -->

<!-- ================== HTML5 JS BOC ==================== -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- ================== HTML5 JS EOC ==================== -->
<script>
$('#myModal').modal('show');
// www.jquery2dotnet.com
</script>
</head>

<body>

<!-- ====== WRAPPER BOC ====== -->
<div class="wrapper">
  <header>
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
            <ul class="social text-right">
              <li class="help"><a href="#"><i class="fa fa-question-circle"></i>help</a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12 login_form">
            <ul class="user-links list-inline">
              <li><a data-toggle="modal" data-target="#myModallog" href="Javascript:void(0);" title="Login"><i class="fa fa-lock"></i> <span>Login</span></a></li>
              <li><a data-toggle="modal" data-target="#myModalreg" href="Javascript:void(0);" title="Register"><i class="fa fa-user"></i> <span>Register</span> </a></li>
            </ul>
            <div class="modal fade" id="myModallog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="border">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-left text-uppercase" id="myModalLabel"> Login to account</h4>
                    <p>Login to your account to discover all great features in our store.</p>
                    <ul class="nav nav-tabs">
                          <li class="active"><a href="#Login" data-toggle="tab"><i class="fa fa-lock"></i>Login</a></li>
                          <li><a href="#Registration" data-toggle="tab"><i class="fa fa-user"></i>Registration</a></li>
                        </ul>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;"> 
                        <!-- Nav tabs -->
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="Login">
                            <form role="form" class="form-horizontal common-form">
                              <div class="form-group">
                                <label for="email" class="col-sm-2 control-label"> Email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email1" placeholder="Enter Email" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1" class="col-sm-2 control-label"> Password</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" />
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-2"> </div>
                                <div class="col-sm-10">
                                  <button type="submit" class="btn read_more"> Login</button>
                                  <a href="javascript:;">Forgot your password?</a> </div>
                              </div>
                            </form>
                          </div>
                          <div class="tab-pane" id="Registration">
                            <form role="form" class="form-horizontal common-form">
                              <div class="form-group">
                                <label for="email" class="col-sm-2 control-label"> Name</label>
                                <div class="col-sm-10">
                                  <div class="row">
                                    <div class="col-md-3">
                                      <select class="form-control">
                                        <option>Mr.</option>
                                        <option>Ms.</option>
                                        <option>Mrs.</option>
                                      </select>
                                    </div>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" placeholder="Enter Name" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="email" class="col-sm-2 control-label"> Email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email" placeholder="Enter Email" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="mobile" class="col-sm-2 control-label"> Mobile</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="mobile" placeholder="Enter Mobile" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="password" class="col-sm-2 control-label"> Password</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="password" placeholder="Enter Password" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="confirm_password" class="col-sm-2 control-label"> Confirm Password</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="confirm_password" placeholder="Enter Confirm Password" />
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-2"> </div>
                                <div class="col-sm-10">
                                  <button type="button" class="btn read_more"> Register</button>
                                  <button type="button" class="btn read_more"> Cancel</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div id="OR" class="hidden-xs"> OR</div>
                      </div>
                      <div class="col-md-4">
                        <div class="row text-center sign-with">
                          <div class="col-md-12">
                            <h3> Sign in with</h3>
                          </div>
                          <div class="col-md-12">
                            <div class="btn-group btn-group-justified"> <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger"> Google</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="myModalreg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                 <div class="border">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
                    <h4 class="modal-title text-left text-uppercase" id="myModalLabel"> DON'T HAVE AN ACCOUNT?</h4>
                    <h5> REGISTER NOW !</h5>
                     <ul class="nav nav-tabs">
                          <li class="active"><a href="#Registration1" data-toggle="tab"><i class="fa fa-user"></i>Registration</a></li>
                          <li ><a href="#Login1" data-toggle="tab"><i class="fa fa-lock"></i>Login</a></li>
                        </ul>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;"> 
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="Registration1">
                            <form role="form" class="form-horizontal common-form">
                              <div class="form-group">
                                <label for="email" class="col-sm-2 control-label"> Name</label>
                                <div class="col-sm-10">
                                  <div class="row">
                                    <div class="col-md-3">
                                      <select class="form-control">
                                        <option>Mr.</option>
                                        <option>Ms.</option>
                                        <option>Mrs.</option>
                                      </select>
                                    </div>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" placeholder="Enter Name" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="email" class="col-sm-2 control-label"> Email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email" placeholder="Enter Email" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="mobile" class="col-sm-2 control-label"> Mobile</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="mobile" placeholder="Enter Mobile" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="password" class="col-sm-2 control-label"> Password</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="password" placeholder="Enter Password" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="confirm_password" class="col-sm-2 control-label"> Confirm Password</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="confirm_password" placeholder="Enter Confirm Password" />
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-2"> </div>
                                <div class="col-sm-10">
                                  <button type="button" class="btn read_more"> Register</button>
                                  <button type="button" class="btn read_more"> Cancel</button>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="tab-pane" id="Login1">
                            <form role="form" class="form-horizontal common-form">
                              <div class="form-group">
                                <label for="email" class="col-sm-2 control-label"> Email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email1" placeholder="Email" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1" class="col-sm-2 control-label"> Password</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" />
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-2"> </div>
                                <div class="col-sm-10">
                                  <button type="submit" class="btn read_more"> Login</button>
                                  <a href="javascript:;">Forgot your password?</a> </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div id="OR" class="hidden-xs"> OR</div>
                      </div>
                      <div class="col-md-4">
                        <div class="row text-center sign-with">
                          <div class="col-md-12">
                            <h3> Sign in with</h3>
                          </div>
                          <div class="col-md-12">
                            <div class="btn-group btn-group-justified"> <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger"> Google</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main_header">
      <div class="container">
        <nav class="navbar">
          <div class="">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"/></a> </div>
            <div class="call pull-right">
              <div class="call_img"> <img src="images/call.png" alt="call"/> </div>
              <div class="call_desc"> <span>Call Us</span>
                <h4>+91-9429564481</h4>
              </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">about us</a></li>
                <li><a href="#">view party  plot</a></li>
                <li><a href="#contact_form" role="button"  data-toggle="modal">contact us</a>
                  <div id="contact_form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h3 id="myModalLabel">Get in Touch with us</h3>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                        <div class="modal-body row">
                          <form class="form-horizontal common-form col-lg-12">
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label>Name</label>
                                <input class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text">
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label>E-Mail</label>
                                <input class="form-control email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text">
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text">
                              </div>
                              <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <div class="form-group">
                            <button type="submit" class="btn read_more">SEND</button>
                            <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <section id="home" class="home-section">
    <div class="hero-slider">
      <ul class="slides">
        <li class="bg-dark-30 bg-dark bgdarkmg1 flex-active-slide">
          <div class="hs-caption">
            <div class="caption-content">
              <div class="hs-title-size-1 mb-20">We Provide best</div>
              <div class="hs-title-size-4  mb-30">LOREM IPSUM <span>DOLOR</span><br>
                sit amet</div>
              <div class="hs-title-size-1 font-alt mb-40">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <a href="#" class="section-scroll btn read_more">READ MORE</a></div>
          </div>
        </li>
        <li class="bg-dark-30 bg-dark bgdarkmg2">
          <div class="hs-caption">
            <div class="caption-content">
              <div class="hs-title-size-1 mb-20">We Provide best</div>
              <div class="hs-title-size-4  mb-30">LOREM IPSUM <span>DOLOR</span> <br>
                sit amet</div>
              <div class="hs-title-size-1 font-alt mb-40">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
              <a href="#" class="section-scroll btn read_more">READ MORE</a></div>
          </div>
        </li>
      </ul>
      <div class="filter">
        <div class="container">
          <div class="row">
            <div class=" col-lg-offset-1 col-lg-10  col-xs-12 col-sm-offset-1 col-sm-10 formsection">
              <div class="panel">
                <h6>Book Party Plot</h6>
                <form class="common-form">
                  <div class="form-group col-lg-3 col-md-3 col-sm-4 col-xs-12 filter_padding_0">
                    <div class="inner-addon left-addon">
                      <label for="email">Search Party Plot....</label>
                      <i class="fa fa-map-marker"></i>
                      <input type="email" class="form-control" id="email" placeholder="Search Party Plot....">
                    </div>
                  </div>
                  <div class="form-group select col-lg-2 col-md-2 col-sm-2 col-xs-6 filter_padding_0">
                    <label for="sel1">City:</label>
                    <select class="form-control" id="sel1">
                      <option>Select</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="form-group select col-lg-2 col-md-2 col-sm-2 col-xs-6 filter_padding_0">
                    <label for="sel1">Area:</label>
                    <select class="form-control" id="sel1">
                      <option>Select</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="form-group select col-lg-3 col-md-3 col-sm-4 col-xs-12 filter_padding_0 filter_padding_0_last">
                    <label for="sel1">Budget:</label>
                    <select class="form-control" id="sel1">
                      <option>1.0 lacs to 3.0 lacs</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="col-lg-2 col-xs-12 col-md-2">
                    <button type="submit" class="btn submit">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6"> <span class="title_tag">About us</span>
          <h2>We See Your<br>
            Potential, We <br>
            Invest in Your <br>
            Future</h2>
          <p>We provide a professional dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper sem quam suscipit lacus maecenas tortor. Suspendisse gravida ornare non mattis velit rutrum modest.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="about_img"> <img src="images/about.jpg" class="img-responsive" alt="about"/>
            <div class="overlay"> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="service_contant">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading"> <span class="title_tag">Services</span>
            <h2>WHAT WE DO</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="service"> <img src="images/service_1.jpg" class="img-responsive" alt="Best Party Plots"/>
            <h4 class="service_title">Best Party Plots</h4>
            <div class="overlay">
              <div class="text">
                <h4>Best Party Plots</h4>
                <p>It is a long established fact that a reader will be distracted</p>
                <a href="#" class="btn view">view</a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="service"> <img src="images/service_3.jpg" class="img-responsive" alt="Best Party Plots"/>
            <h4 class="service_title">Wedding & Marriage Reception,
              Banquet Halls</h4>
            <div class="overlay">
              <div class="text">
                <h4>Wedding & Marriage Reception,
                  Banquet Halls</h4>
                <p>It is a long established fact that a reader will be distracted </p>
                <a href="#" class="btn view">view</a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="service"> <img src="images/service_2.jpg" class="img-responsive" alt="Best Party Plots"/>
            <h4 class="service_title">Resorts near Ahmedabad</h4>
            <div class="overlay">
              <div class="text">
                <h4>Resorts near Ahmedabad</h4>
                <p>It is a long established fact that a reader will be distracted </p>
                <a href="#" class="btn view">view</a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="service"> <img src="images/service_4.jpg" class="img-responsive" alt="Best Party Plots"/>
            <h4 class="service_title">The Garden Party
              Plots</h4>
            <div class="overlay">
              <div class="text">
                <h4>The Garden Party
                  Plots</h4>
                <p>It is a long established fact that a reader will be distracted </p>
                <a href="#" class="btn view">view</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="main_contain">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-sm-2 col-md-2 hidden-xs hidden-sm">
        <div class="advertisement"> <img src="images/adv.jpg" class="img-responsive" alt=""/> <img src="images/adv1.jpg" class="img-responsive" alt=""/> <img src="images/adv.jpg" class="img-responsive" alt=""/> <img src="images/adv1.jpg" class="img-responsive" alt=""/> <img src="images/adv1.jpg" class="img-responsive" alt=""/> <img src="images/adv1.jpg" class="img-responsive" alt=""/> <img src="images/adv1.jpg" class="img-responsive" alt=""/> <img src="images/adv1.jpg" class="img-responsive" alt=""/></div>
      </div>
      <div class="col-lg-10 col-md-10 col-sm-12">
        <div class="plot_contain">
          <div class="plot_head">
            <h4><i class="fa fa-th-large"></i>Party Plots & Banquet Halls in <span>Ahmedabad, Gujarat</span></h4>
            <p class="text-right view_all"><a href="#">View All<i class="fa fa-angle-right"></i></a></p>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <ul>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right" data-toggle="modal" data-target="#myModal">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog"> 
                      
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Tell us your need, we'll connect you with service experts</h4>
                        </div>
                        <div class="modal-body">
                          <h5>What needs to be Place? *.</h5>
                          <div class="row filter_option">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <label class="quote_filter">Single Bed Room
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span> </label>
                              <label class="quote_filter">Double Bed Room
                                <input type="checkbox">
                                <span class="checkmark"></span> </label>
                              <label class="quote_filter">Double Bed Room
                                <input type="checkbox">
                                <span class="checkmark"></span> </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <label class="quote_filter">AC Room
                                <input type="checkbox">
                                <span class="checkmark"></span> </label>
                              <label class="quote_filter">Non AC Room
                                <input type="checkbox">
                                <span class="checkmark"></span> </label>
                              <label class="quote_filter">Double Bed Room
                                <input type="checkbox">
                                <span class="checkmark"></span> </label>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn read_more " data-toggle="modal" data-target="#myModal_next">Next</button>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
                  <div class="modal fade" id="myModal_next" role="dialog">
        <div class="modal-dialog"> 
          
          <!-- Modal content-->
          <div class="modal-content">
          <div class="">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title">Contact Form</h5>
            </div>
            <div class="modal-body">
              <form>
                <div class="row common-form" id="contact_form">
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Address" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="email" placeholder="Contact" class="form-control">
                    </div>
                    <div class="form-group">
                      <textarea placeholder="Query / Questions" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
               <a href="#" class="pull-left" data-target="#myModal"><i class="fa fa-long-arrow-left"></i>Back</a>
                          <button type="button" class="btn read_more " data-toggle="modal_next" data-dismiss="modal" >Next</button>
            </div>
            </div>
          </div>
        </div>
      </div>
                </div>
              </li>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="plot_contain">
          <div class="plot_head">
            <h4><i class="fa fa-th-large"></i>Best Party <span>Plots</span></h4>
            <p class="text-right view_all"><a href="#">View All<i class="fa fa-angle-right"></i></a></p>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <ul>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
              </li>
            </ul>
          </div>
        </div>
        <div class="plot_contain">
          <div class="plot_head">
            <h4><i class="fa fa-th-large"></i>Wedding & Marriage Reception,<span> Banquet Halls</span></h4>
            <p class="text-right view_all"><a href="#">View All<i class="fa fa-angle-right"></i></a></p>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <ul>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
              </li>
            </ul>
          </div>
        </div>
        <div class="plot_contain">
          <div class="plot_head">
            <h4><i class="fa fa-th-large"></i>The Garden Party <span>Plots</span></h4>
            <p class="text-right view_all"><a href="#">View All<i class="fa fa-angle-right"></i></a></p>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <ul>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>Lorem Ipsum dolor sit</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>USA</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right">Get Quotes</a>
                    <p><span>$</span>4582</p>
                  </div>
                </div>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section class="testimonial_contain">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading"> <span class="title_tag">Testimonial</span>
          <h2>OUR HAPPY 	CLIENTS</h2>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="testimonial-slider" class="owl-carousel">
          <div class="testimonial">
            <div class="description">
              <h5>Steve Thomas, <span>CEO</span></h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum augue, lacinia vel arcu condimentum, dictum tristique sem. Nam enim neque, mattis ut fermentum vitae, venenatis id tortor. Sed consectetur tortor ut arcu pharetra faucibus.</p>
            </div>
          </div>
          <div class="testimonial">
            <div class="description">
              <h5>Steve Thomas, <span>CEO</span></h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum augue, lacinia vel arcu condimentum, dictum tristique sem. Nam enim neque, mattis ut fermentum vitae, venenatis id tortor. Sed consectetur tortor ut arcu pharetra faucibus. </p>
            </div>
          </div>
          <div class="testimonial">
            <div class="description">
              <h5>Steve Thomas, <span>CEO</span></h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum augue, lacinia vel arcu condimentum, dictum tristique sem. Nam enim neque, mattis ut fermentum vitae, venenatis id tortor. Sed consectetur tortor ut arcu pharetra faucibus. In tristique sollicitudin mi ac congue. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="brand">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading"> <span class="title_tag">Partner</span>
          <h5>Plot Decoration, Catering, Security, Commutiing, Entertainers</h5>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="brand-slider" class="owl-carousel">
          <div class="testimonial"> </div>
          <div class="testimonial"> </div>
          <div class="testimonial"> </div>
          <div class="testimonial"> </div>
          <div class="testimonial"> </div>
          <div class="testimonial"> </div>
          <div class="testimonial"> </div>
          <div class="testimonial"> </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="contact_block">
  <div class="container">
    <div class="col-lg-9 col-md-9 col-sm-8">
      <h4>Can We Help with Your Unique Situation?<br>
        Would you like to work with us?</h4>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3"> <a href="#" class="btn contact_btn" data-toggle="modal" data-target="#myModalcontact">Contact Now</a>
      <div class="modal fade" id="myModalcontact" role="dialog">
        <div class="modal-dialog"> 
          
          <!-- Modal content-->
          <div class="modal-content">
          <div class="border">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title">Contact Form</h5>
            </div>
            <div class="modal-body">
              <form>
                <div class="row common-form" id="contact_form">
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Address" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="email" placeholder="Contact" class="form-control">
                    </div>
                    <div class="form-group">
                      <textarea placeholder="Query / Questions" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn read_more" data-dismiss="modal">Send</button>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-4">
        <div class="contact"> <img src="images/logo.png" alt="logo"/>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <ul>
            <li> <a href="#"><i class="fa fa-user"></i> Lorem ipsum dolor</a></li>
            <li> <a href="#"><i class="fa fa-map-marker"></i>4, Street,Thakkar Nagar,
              Ahmedabad - 382350</a></li>
            <li> <a href="#"><i class="fa fa-phone"></i>+91-2568952354</a></li>
            <li> <a href="#"><i class="fa fa-envelope"></i>Lorem@gmail.com</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <div class="links">
          <h5>CITy</h5>
          <ul>
            <li> <a href="#"><i class="fa fa-angle-right"></i>Ahmedabad</a></li>
            <li> <a href="#"><i class="fa fa-angle-right"></i>vadodara</a></li>
            <li> <a href="#"><i class="fa fa-angle-right"></i>Bharuch</a></li>
            <li> <a href="#"><i class="fa fa-angle-right"></i>Surat</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <div class="links">
          <h5>AREA</h5>
          <ul>
            <li> <a href="#"><i class="fa fa-angle-right"></i>Ahmedabad</a></li>
            <li> <a href="#"><i class="fa fa-angle-right"></i>vadodara</a></li>
            <li> <a href="#"><i class="fa fa-angle-right"></i>Bharuch</a></li>
            <li> <a href="#"><i class="fa fa-angle-right"></i>Surat</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-4 links">
        <div class="subscribe">
          <h5>Singup for Weekly Newsletter</h5>
          <p>We may send you information about related events, webinars, products and services which we believe.</p>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Enter your email address" aria-label="Search for...">
            <span class="input-group-btn">
            <button class="btn " type="button">SUBMIT</button>
            </span> </div>
        </div>
        <h5 class="social_link">social links</h5>
        <ul class="social">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <p>© 2017 Lorem Ipsum. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="back-top text-center"> <a class="" href="#" id="toTop"> <i class="fa fa-angle-double-up"></i> </a> </div>
</footer>
<!-- /Go To Top BOC -->

</div>
<!-- ====== WRAPPER EOC ====== --> 

<!-- =================== WEB JS BOC ==================== --> 
<script src="{{ asset('js/jquery.js') }}"></script> 
<script src="{{ asset('js/owl.carousel.js') }}"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script type='text/javascript' src="js/jquery.flexslider-min.js"></script> 
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script> 
<script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,1],
        pagination: true,
        autoPlay:false
    });
});
</script> 
<script>
$(document).ready(function(){
    $("#brand-slider").owlCarousel({
        items:6,
        itemsDesktop:[1000,6],
        itemsDesktopSmall:[979,4],
        itemsTablet:[768,2],
        pagination: true,
        autoPlay:false
    });
});
</script>
</body>

<!-- =================== WEB JS BOC ==================== -->
</html>