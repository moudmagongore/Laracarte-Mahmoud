@component('mail::message')
# Hey admin

- {{$msg->name}}
- {{$msg->email}}


@component('mail::panel')
	{{$msg->message}}
@endcomponent


@endcomponent
