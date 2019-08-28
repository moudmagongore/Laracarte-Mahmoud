@component('mail::message')
# Hey admin

- {{$name}}
- {{$email}}


@component('mail::panel')
	{{$msg}}
@endcomponent


@endcomponent
