<!DOCTYPE html>
<html lang="en">
@include('front.includes.head')
<body>
<div class="wrapper">
<<<<<<< HEAD:resources/views/pages/home.blade.php
  @include('includes.header')
  @include('includes.slider')
  @include('includes.about')
  @include('includes.category')
  @include('includes.partyplot')
  @include('includes.testimonial')
  @include('includes.brand')
  @include('includes.contact')
  @include('includes.footer')
=======
  @include('front.includes.header')
  @include('front.includes.slider')
  @include('front.includes.about')
  @include('front.includes.category')
  @include('front.includes.maincontain')
  @include('front.includes.testimonial')
  @include('front.includes.brand')
  @include('front.includes.contact')
  @include('front.includes.footer')
>>>>>>> 03d243c2217c0c57552d851f7962bc673cb62b44:resources/views/front/pages/home.blade.php
</div>
<script src="{{ asset('js/jquery.js') }}"></script> 
<script src="{{ asset('js/owl.carousel.js') }}"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script type='text/javascript' src="js/jquery.flexslider-min.js"></script> 
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script> 
 <!-- page script -->
    <script type="text/javascript">
        // To make Pace works on Ajax calls
        // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        
    </script>
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
 <script>
$( document ).ready(function() {

    var loginForm = $("#loginForm");
	loginForm.submit(function(e){
	e.preventDefault();
    $.ajax({   
        type: "POST",
        data: loginForm.serialize(),
		url: "login", 
		success : function (data) {
			window.location.reload();
		},
		error : function (data){
			$( ".validation" ).remove();
			if (jQuery.isEmptyObject(data.responseJSON.errors.email)) 
			{
				$("#email").parent().next(".validation").remove(); // remove it
			}else{
				$("#email").parent().after("<div class='validation'><div class='col-sm-2'> </div><span class='col-sm-10 alert-message-danger' >"+data.responseJSON.errors.email+"</span></div>"); 
			}
			if (jQuery.isEmptyObject(data.responseJSON.errors.password)) 
			{
				$("#password").parent().next(".validation").remove(); // remove it
			}else{
				$("#password").parent().after("<div class='validation'><div class='col-sm-2'> </div><span class='col-sm-10 alert-message-danger' >"+data.responseJSON.errors.password+"</span></div>"); 
			}
			
		},
    })
		
	});	


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