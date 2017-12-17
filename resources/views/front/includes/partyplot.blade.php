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
            
              @foreach ($partyplot as $retrive)
              <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
                <div class="thumbnail"> <a href="#"> <img src="images/plot.jpg" alt="plot" class="img-responsive">
                  <div class="caption">
                    <h5>{{ $retrive->name }}</h5>
                    <div class="rating pull-right"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><span> (15 reviews)</span> </div>
                    <p><i class="fa fa-map-marker"></i>INR</p>
                    <p class="short_desc">Lorem ipsum dolor sit amet, consectetur adips elit. Nunc congue diam sit amet sem tristque utrum sem ornare.</p>
                  </div>
                  </a>
                  <div class="price"> <a href="#" class="btn book pull-right" data-toggle="modal" data-target="#myModal">Get Quotes</a>
                    <p><span>$</span>{{ $retrive->price }}</p>
                  </div>
                  <!-- <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog"> 
                      
                      Modal content
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
                      
                      Modal content
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
                                  </div> -->
              </li>
               @endforeach
              <!-- <li class="col-sm-4 col-md-4 col-xs-12 col-lg-4">
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
              </li> -->
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