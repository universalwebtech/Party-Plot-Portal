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
							
							<form action="login" method="POST">
                                {{ csrf_field() }} <input type="hidden" name="redirurl"
                                    value="{{ $_SERVER['REQUEST_URI'] }}"> <label><b>Username</b></label>
                                <input name="username"
                                    class="w3-input w3-border w3-margin-bottom" type="text"
                                    placeholder="Enter Username" required> <label><b>Password</b></label>
                                <input class="w3-input w3-border w3-margin-bottom"
                                    name="password" type="password" placeholder="Enter Password"
                                    required> <input type="submit"
                                    class="w3-btn w3-btn-block w3-green" value="Login"> <input
                                    class="w3-check w3-margin-top" type="checkbox"
                                    checked="checked"> Remember me
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