<!DOCTYPE html>
<html lang="en">
@include('front.includes.head')
<body>
<div class="wrapper">
  @include('front.includes.header')
   <section class="listing_content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li class="active">Ahmedabad</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="plot_head">
            <h4><i class="fa fa-th-large"></i>Party Plots & Banquet Halls in <span>Ahmedabad, Gujarat</span></h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-md-3">
          <div class="filter_list">
            <div class="price_range">
              <h4 class="title">Price</h4>
              <div class="range_slider_demo">
                <p>
                  <label for="amount">Price range:</label>
                  <input id="amount" style="border:0; color:#f6931f; font-weight:bold; background:transparent;" type="text">
                </p>
                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                  <div class="ui-slider-range ui-widget-header"></div>
                  <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 21.2%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 60%;"></a></div>
              </div>
            </div>
            <div class="select_location">
              <h4 class="title">Select City</h4>
              <ul>
                <li>
                  <label class="quote_filter">Ahmedabad
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Surat
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Bharuch
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Vadodara
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Mumbai
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Anand
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Mahesana
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Nadiad
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Navsari
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                
              </ul>
            </div>
            <div class="select_location">
              <h4 class="title">Select Area</h4>
              <ul>
                <li>
                  <label class="quote_filter">Ahmedabad
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Surat
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Bharuch
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Vadodara
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Mumbai
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Anand
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Mahesana
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Nadiad
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
                <li>
                  <label class="quote_filter">Navsari
                    <input type="checkbox">
                    <span class="checkmark"></span> </label>
                </li>
              </ul>
            </div>
            <div class="advertisement hidden-xs"> <img src="images/adv.jpg" class="img-responsive" alt=""/> <img src="images/adv1.jpg" class="img-responsive" alt=""/> </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-9 col-md-9  plot_contain">
          <div class="row">
            <div class="col-lg-12">
              <div class="listing_control">
                <div class="view_list pull-left">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                    <li class="active"><a href="#"><i class="fa fa-th-list"></i></a></li>
                  </ul>
                </div>
                <ul class="sort pull-right list-inline form-inline">
                  <li>
                    <div class="form-group select">
                      <label for="sel1">Sort by:</label>
                      <select class="form-control" id="sel1">
                        <option>Default</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </li>
                  <li>
                    <div class="form-group select">
                      <label for="sel1">Show:</label>
                      <select class="form-control" id="sel1">
                        <option>12</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="row listing_view">
            <ul>
              <li class="col-lg-12">
                <div class="thumbnail">
                  <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#"> <img src="{{ asset('images/plot.jpg') }}" alt="plot" class="img-responsive"></a> </div>
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
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  @include('front.includes.footer')
 </div>
<!-- =================== WEB JS BOC ==================== --> 
<script src="{{ asset('js/jquery.js') }}"></script> 
<script src="{{ asset('js/owl.carousel.js') }}"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script type='text/javascript' src="{{ asset('js/jquery.flexslider-min.js') }}"></script> 
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
<script type="text/javascript" src="{{ asset('js/slider_jquary.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/jquery_ui.js') }}"></script> 
<script type="text/javascript">//<![CDATA[
$(window).load(function(){
function showProducts(minPrice, maxPrice) {
    $("#products li").hide().filter(function() {
        var price = parseInt($(this).data("price"), 10);
        return price >= minPrice && price <= maxPrice;
    }).show();
}

$(function() {
    var options = {
        range: true,
        min: 0,
        max: 500,
        values: [50, 300],
        slide: function(event, ui) {
            var min = ui.values[0],
                max = ui.values[1];

            $("#amount").val("$" + min + " - $" + max);
            showProducts(min, max);
        }
    }, min, max;

    $("#slider-range").slider(options);

    min = $("#slider-range").slider("values", 0);
    max = $("#slider-range").slider("values", 1);

    $("#amount").val("$" + min + " - $" + max);

    showProducts(min, max);
});
});//]]> 

</script>
</body>

<!-- =================== WEB JS BOC ==================== -->
</html>