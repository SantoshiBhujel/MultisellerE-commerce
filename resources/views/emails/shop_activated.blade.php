@component('mail::message')
Dear {{ $shop->owner->name }}

Congratulations!!

Your shop {{ $shop->name }} is fully active

The body of your message.

@component('mail::button', ['url' => url('shops.show',$shop->id)])
Visit Your Shop
@endcomponent 
 
Thanks,<br>
{{ config('app.name') }}
@endcomponent
 