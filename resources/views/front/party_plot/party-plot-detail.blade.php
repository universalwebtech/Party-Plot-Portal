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
            <h4><i class="fa fa-th-large"></i>Lorem Ipsum Dolor Sit</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="detail_content">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
          <div id="pdpNav" class="nav-bar-h  detail_nav">
            <ul>
              <li class="active" id="overview1"> <a href="#reviews">Overview</a> <span class="nav-border">&nbsp;</span> </li>
              <li id="reviews1"> <a href="#reviews">Reviews</a> <span class="nav-border">&nbsp;</span> </li>
              <li id="amenities1"> <a href="#amenities">Amenities</a> <span class="nav-border">&nbsp;</span> </li>
              <li id="availability1"> <a href="#availability">Availability</a> <span class="nav-border">&nbsp;</span> </li>
              <li id="map1"> <a href="#map">Map</a> <span class="nav-border">&nbsp;</span> </li>
            </ul>
          </div>
          <div class="detail_view">
            <div class="large_image"> <a href="#"><img src="images/detail_image.jpg" alt="image view" class="img-responsive"/></a> </div>
            <ul class="list-inline small_thumb">
              <li class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><a href="#"><img src="images/small_thumb_image.jpg" alt="thumb_image"/></a></li>
              <li class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><a href="#"><img src="images/small_thumb_image.jpg" alt="thumb_image"/></a></li>
              <li class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><a href="#"><img src="images/small_thumb_image.jpg" alt="thumb_image"/></a></li>
              <li class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><a href="#"><img src="images/small_thumb_image.jpg" alt="thumb_image"/></a></li>
              <li class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><a href="#"><img src="images/small_thumb_image.jpg" alt="thumb_image"/></a></li>
              <li class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><a href="#"><img src="images/small_thumb_image.jpg" alt="thumb_image"/></a></li>
            </ul>
          </div>
          <div class="detail_description">
            <div class="overview" id="overview">
              <div class="desc_head">
                <h5><i class="fa fa-th-large"></i> Overview</h5>
              </div>
              <div class="desc_box">
                <div class="overview_title">
                  <h5><span>Hotel</span> :1 Bed room, 1 Bathroom, 2 Sleep</h5>
                  <h6 class="location pull-left">Ahmedabad, Gujarat</h6>
                  <a href="#" class="pull-right send_friend"><i class="fa fa-envelope"></i> Send to a friend</a>
                  <div class="clear-fix"></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
            </div>
            <div class="review" id="reviews">
              <div class="desc_head">
                <h5><i class="fa fa-th-large"></i> Review</h5>
              </div>
              <div class="desc_box">
                <div class="overview_title">
                  <h5><span>Reviews from our community</span></h5>
                  <h6 class="rating pull-left"></h6>
                  <a href="#" class="pull-right btn">Write a Review</a>
                  <div class="clear-fix"></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
            </div>
            <div class="Amenities" id="amenities">
              <div class="desc_head">
                <h5><i class="fa fa-th-large"></i> Amenities</h5>
              </div>
              <div class="desc_box">
                <div class="overview_title">
                  <h5><span>Reviews from our community</span></h5>
                  <h6 class="rating pull-left"></h6>
                  <a href="#" class="pull-right btn">Write a Review</a>
                  <div class="clear-fix"></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
            </div>
            <div class="Availability" id="availability">
              <div class="desc_head">
                <h5><i class="fa fa-th-large"></i> Availability</h5>
              </div>
              <div class="desc_box">
                <div class="overview_title">
                  <h5><span>Reviews from our community</span></h5>
                  <h6 class="rating pull-left"></h6>
                  <a href="#" class="pull-right btn">Write a Review</a>
                  <div class="clear-fix"></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
            </div>
            <div class="scrollTop map" id="map">
              <div class="desc_head">
                <h5><i class="fa fa-th-large"></i> Map</h5>
              </div>
              <div class="desc_box">
                <div class="overview_title">
                  <h5><span>Reviews from our community</span></h5>
                  <h6 class="rating pull-left"></h6>
                  <a href="#" class="pull-right btn">Write a Review</a>
                  <div class="clear-fix"></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="right_desc">
            <div class="detail_desc">
              <h3>Lorem Ipsum Dolor Sit</h3>
              <div class="availability">
                <p>Availability: <span>NA</span></p>
              </div>
              <div class="price">
                <h3>$45826.00<span>$48200.00</span></h3>
                <p>(15% Save)</p>
              </div>
            </div>
            <div class="detail_form">
              <form role="form" class="common-form">
                <div class="form-group">
                  <input type="text" class="form-control" id="email1" placeholder="Enter Name" />
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email" />
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone No." />
                </div>
                <div class="form-group">
                  <input type="button" class="btn read_more"  value="GET QUOTES" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('front.includes.contact')

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