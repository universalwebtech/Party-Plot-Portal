<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
<div class="wrapper">
  @include('includes.header')
  @include('includes.slider')
  @include('includes.about')
  @include('includes.service')
  @include('includes.maincontain')
  @include('includes.testimonial')
  @include('includes.brand')
  @include('includes.contact')
  @include('includes.footer')
</div>
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
</html>