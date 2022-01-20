@component('mail::message')
# your transaction has been confirmed

<b>Hi, {{$checkout->User->name}}</b> 
<br>
<p>your transaction {{$checkout->Camp->title}} has been confirmed.</p>
<br>
<p>Enjoy Learning :)</p>

@component('mail::button', ['url' => route('user.dashboard')])
Learn
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
