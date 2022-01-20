@component('mail::message')
Welcome to camp : {{$checkout->Camp->title}}
<br>
Thank you for register on <b>{{$checkout->Camp->title}}</b>, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
