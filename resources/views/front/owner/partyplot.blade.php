<!DOCTYPE html>
<html lang="en">
@include('front.includes.head')
<body>
<div class="wrapper">
  @include('front.includes.header') 
   <section class="listing_content my_account">
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i></a></li>
          <li><a href="#">My Account</a></li>
          <li class="active">Party Plot</li>
        </ol>
      </div>
    </div>
    <div class="row">
      
        <div class="col-lg-3 col-md-3 col-sm-3">
          <ul class="nav nav-stacked">
            <li><a href="{{url('my-account')}}">My Account</a></li>
            <li class="active"><a href="#">Manage Party Plot</a></li>
          </ul>
        </div>
        
        <!-- /.col-lg-3 -->
        
        <div class="col-lg-9 col-md-9 col-sm-9 ">
		<!-- will be used to show any messages -->
			@include('front.includes.alert') 
          <div class=" tab-content">
              <div>
               <div class="">
          <div class="row">
            <div class="col-lg-12 form-group text-right">
              <a href="{{url('party-plot/add')}}" class="btn read_more"> Add New Party Plot</a>
            </div>
          </div>
          <div class="row listing_view">
            <ul>
              <li class="col-lg-12">
                <div class="thumbnail">
                  <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive"></a> </div>
                  <div class="col-lg-8 padd_left_0 col-md-8 col-sm-8">
                    <div class="caption">
                      <h5>Lorem Ipsum dolor sit</h5>
                      <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                      <p><i class="fa fa-map-marker"></i>USA</p>
                      <p class="short_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <a href="#" class="btn book" data-toggle="modal" data-target="#myModal">Get Quotes</a>
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
                    
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li class="col-lg-12">
                <div class="thumbnail">
                  <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive"></a> </div>
                  <div class="col-lg-8 padd_left_0 col-md-8 col-sm-8">
                    <div class="caption">
                      <h5>Lorem Ipsum dolor sit</h5>
                      <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                      <p><i class="fa fa-map-marker"></i>USA</p>
                      <p class="short_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <a href="#" class="btn book" data-toggle="modal" data-target="#myModal">Get Quotes</a>
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
                            <div class="modal-footer"> <a href="#" class="pull-left" data-target="#myModal"><i class="fa fa-long-arrow-left"></i>Back</a>
                              <button type="button" class="btn read_more " data-toggle="modal_next" data-dismiss="modal" >Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li class="col-lg-12">
                <div class="thumbnail">
                  <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive"></a> </div>
                  <div class="col-lg-8 padd_left_0 col-md-8 col-sm-8">
                    <div class="caption">
                      <h5>Lorem Ipsum dolor sit</h5>
                      <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                      <p><i class="fa fa-map-marker"></i>USA</p>
                      <p class="short_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <a href="#" class="btn book" data-toggle="modal" data-target="#myModal">Get Quotes</a>
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
                            <div class="modal-footer"> <a href="#" class="pull-left" data-target="#myModal"><i class="fa fa-long-arrow-left"></i>Back</a>
                              <button type="button" class="btn read_more " data-toggle="modal_next" data-dismiss="modal" >Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li class="col-lg-12">
                <div class="thumbnail">
                  <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive"></a> </div>
                  <div class="col-lg-8 padd_left_0 col-md-8 col-sm-8">
                    <div class="caption">
                      <h5>Lorem Ipsum dolor sit</h5>
                      <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                      <p><i class="fa fa-map-marker"></i>USA</p>
                      <p class="short_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <a href="#" class="btn book" data-toggle="modal" data-target="#myModal">Get Quotes</a>
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
                            <div class="modal-footer"> <a href="#" class="pull-left" data-target="#myModal"><i class="fa fa-long-arrow-left"></i>Back</a>
                              <button type="button" class="btn read_more " data-toggle="modal_next" data-dismiss="modal" >Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li class="col-lg-12">
                <div class="thumbnail">
                  <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive"></a> </div>
                  <div class="col-lg-8 padd_left_0 col-md-8 col-sm-8">
                    <div class="caption">
                      <h5>Lorem Ipsum dolor sit</h5>
                      <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                      <p><i class="fa fa-map-marker"></i>USA</p>
                      <p class="short_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <a href="#" class="btn book" data-toggle="modal" data-target="#myModal">Get Quotes</a>
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
                            <div class="modal-footer"> <a href="#" class="pull-left" data-target="#myModal"><i class="fa fa-long-arrow-left"></i>Back</a>
                              <button type="button" class="btn read_more " data-toggle="modal_next" data-dismiss="modal" >Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li class="col-lg-12">
                <div class="thumbnail">
                  <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive"></a> </div>
                  <div class="col-lg-8 padd_left_0 col-md-8 col-sm-8">
                    <div class="caption">
                      <h5>Lorem Ipsum dolor sit</h5>
                      <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                      <p><i class="fa fa-map-marker"></i>USA</p>
                      <p class="short_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <a href="#" class="btn book" data-toggle="modal" data-target="#myModal">Get Quotes</a>
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
                            <div class="modal-footer"> <a href="#" class="pull-left" data-target="#myModal"><i class="fa fa-long-arrow-left"></i>Back</a>
                              <button type="button" class="btn read_more " data-toggle="modal_next" data-dismiss="modal" >Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li class="col-lg-12">
                <div class="thumbnail">
                  <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive"></a> </div>
                  <div class="col-lg-8 padd_left_0 col-md-8 col-sm-8">
                    <div class="caption">
                      <h5>Lorem Ipsum dolor sit</h5>
                      <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                      <p><i class="fa fa-map-marker"></i>USA</p>
                      <p class="short_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <a href="#" class="btn book" data-toggle="modal" data-target="#myModal">Get Quotes</a>
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
                            <div class="modal-footer"> <a href="#" class="pull-left" data-target="#myModal"><i class="fa fa-long-arrow-left"></i>Back</a>
                              <button type="button" class="btn read_more " data-toggle="modal_next" data-dismiss="modal" >Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li class="col-lg-12">
                <div class="thumbnail">
                  <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive"></a> </div>
                  <div class="col-lg-8 padd_left_0 col-md-8 col-sm-8">
                    <div class="caption">
                      <h5>Lorem Ipsum dolor sit</h5>
                      <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                      <p><i class="fa fa-map-marker"></i>USA</p>
                      <p class="short_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <a href="#" class="btn book" data-toggle="modal" data-target="#myModal">Get Quotes</a>
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
                            <div class="modal-footer"> <a href="#" class="pull-left" data-target="#myModal"><i class="fa fa-long-arrow-left"></i>Back</a>
                              <button type="button" class="btn read_more " data-toggle="modal_next" data-dismiss="modal" >Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li class="col-lg-12">
                <div class="thumbnail">
                  <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive"></a> </div>
                  <div class="col-lg-8 padd_left_0 col-md-8 col-sm-8">
                    <div class="caption">
                      <h5>Lorem Ipsum dolor sit</h5>
                      <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                      <p><i class="fa fa-map-marker"></i>USA</p>
                      <p class="short_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <a href="#" class="btn book" data-toggle="modal" data-target="#myModal">Get Quotes</a>
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
                            <div class="modal-footer"> <a href="#" class="pull-left" data-target="#myModal"><i class="fa fa-long-arrow-left"></i>Back</a>
                              <button type="button" class="btn read_more " data-toggle="modal_next" data-dismiss="modal" >Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
     
            </div>
             
          </div>
        </div>
        <!-- /.col-lg-9 --> 
        
      </div>
    </div>
  </section>
 
  
  
  
  @include('front.includes.footer')
</div>
<script src="{{ asset('js/jquery.js') }}"></script> 
<script src="{{ asset('js/owl.carousel.js') }}"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script type='text/javascript' src="js/jquery.flexslider-min.js"></script> 
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script> 
 <script>
$( document ).ready(function() {

	var registrationForm = $("#registrationForm");
	registrationForm.submit(function(e){
	e.preventDefault();
	
    $.ajax({   
        type: "POST",
        data: registrationForm.serialize(),
		url: "register", 
		success : function (data) {
			window.location.reload();
		},
		error : function (data){
			$( ".validation" ).remove();
			if (jQuery.isEmptyObject(data.responseJSON.errors.name)) 
			{
				$("#name").parent().next(".validation").remove(); // remove it
			}else{
				$("#name").parent().after("<div class='validation'><div class='col-sm-3'> </div><span class='col-sm-9 alert-message-danger' >"+data.responseJSON.errors.name+"</span></div>"); 
			}
			if (jQuery.isEmptyObject(data.responseJSON.errors.email)) 
			{
				$("#reg_email").parent().next(".validation").remove(); // remove it
			}else{
				$("#reg_email").parent().after("<div class='validation'><div class='col-sm-2'> </div><span class='col-sm-10 alert-message-danger' >"+data.responseJSON.errors.email+"</span></div>"); 
			}
			if (jQuery.isEmptyObject(data.responseJSON.errors.mobile)) 
			{
				$("#mobile").parent().next(".validation").remove(); // remove it
			}else{
				$("#mobile").parent().after("<div class='validation'><div class='col-sm-2'> </div><span class='col-sm-10 alert-message-danger' >"+data.responseJSON.errors.mobile+"</span></div>"); 
			}
			if (jQuery.isEmptyObject(data.responseJSON.errors.password)) 
			{
				$("#reg_password").parent().next(".validation").remove(); // remove it
			}else{
				$("#reg_password").parent().after("<div class='validation'><div class='col-sm-2'> </div><span class='col-sm-10 alert-message-danger' >"+data.responseJSON.errors.password+"</span></div>"); 
			}

			
			//$('#error_msg_regi').text(data.responseJSON.message);
		},
    })
		
	});	
});
 </script>
</body>
</html>