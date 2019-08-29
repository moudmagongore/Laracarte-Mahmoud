@extends('layouts.default', ['title' => 'Contact'])

@section('container')
	<div class="container col-md-6 col-md-offset-2 col-sm-10 col-sm-offset-1" {{-- style="margin-top: 4em; margin-bottom: 4em;" --}}>
			
				<h2>Get In Touch</h2>

				<p class="text-muted">If you having trouble with this service, please <a href="mailto:{{config('laracarte.admin_support_email')}}">ask for help.</a></p>


				<form action="{{route('contact_path')}}" method="POST">

					{{csrf_field()}}

					<div class="form-group">
						<label for="name" class="control-label">Name</label>
						<input type="text" name="name" id="name" class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" required="required" value="{{old('name')}}">


						 {!!$errors->first('name', '<div class="invalid-feedback">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<input type="email" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : '' }}" required="required" value="{{old('email')}}">

						 {!!$errors->first('email', '<div class="invalid-feedback">:message</div>')!!}
					</div>

					<div class="form-group">
						<label for="message" class="control-label sr-only">
							Message
						</label>
						<textarea class="form-control {{$errors->has('message') ? 'is-invalid' : '' }}" rows="10" cols="10" required="required" name="message" id="message">{{old('message')}}</textarea>

						 {!!$errors->first('message', '<div class="invalid-feedback">:message</div>')!!}
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-dark btn-block">Submit Enquiry &raquo;</button>
					</div>
				</form>
	</div>
@stop