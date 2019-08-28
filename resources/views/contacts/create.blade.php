@extends('layouts.default', ['title' => 'Contact'])

@section('container')
	<div class="container container col-md-6 col-md-offset-2 col-sm-10 col-sm-offset-1" style="margin-top: 4em; margin-bottom: 4em;">
			
				<h2>Get In Touch</h2>

				<p class="text-muted">If you having trouble with this service, please <a href="mailto:moudmagongore@gmail.com">ask for help.</a></p>


				<form action="{{route('contact_path')}}" method="POST">

					{{csrf_field()}}

					<div class="form-group {{$errors->has('name') ? 'has-error' : '' }}">
						<label for="name" class="control-label">Name</label>
						<input type="text" name="name" id="name" class="form-control" required="required" value="{{old('name')}}">


						 {{-- {!!$errors->first('name', '<span class="help-block">:message</span>')!!} --}}
					  {!!$errors->first('name', '<p class="error">:message</p>') !!}
					</div>

					<div class="form-group {{$errors->has('email') ? 'has-error' : '' }}">
						<label for="email" class="control-label">Email</label>
						<input type="email" name="email" id="email" class="form-control" required="required" value="{{old('email')}}">

						 {{-- {!!$errors->first('email', '<span class="help-block">:message</span>')!!} --}}
						 {!!$errors->first('email', '<p class="error">:message</p>') !!}
					</div>

					<div class="form-group {{$errors->has('message') ? 'has-error' : '' }}">
						<label for="message" class="control-label sr-only">
							Message
						</label>
						<textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message">{{old('message')}}</textarea>

						{{--  {!!$errors->first('message', '<span class="help-block">:message</span>')!!} --}}
						{!!$errors->first('message', '<p class="error">:message</p>') !!}
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-dark btn-block">Submit Enquiry &raquo;</button>
					</div>
				</form>
	</div>
@stop