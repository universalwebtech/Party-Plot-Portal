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
            <li class="active"><a href="{{url('party-plot')}}">Manage Party Plot</a></li>
          </ul>
        </div>
        
        <!-- /.col-lg-3 -->
        
        <div class="col-lg-9 col-md-9 col-sm-9 ">
		<!-- will be used to show any messages -->
			@include('front.includes.alert') 
			<div class=" tab-content">
				<div>
					<div class="">
					  <div class="row listing_view">
						Add Form Here
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