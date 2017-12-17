@if (Session::has('alert-success'))
	<div class="alert alert-success">{{ Session::get('alert-success') }}</div>
@endif
@if (Session::has('alert-error'))
	<div class="alert alert-danger">{{ Session::get('alert-error') }}</div>
@endif