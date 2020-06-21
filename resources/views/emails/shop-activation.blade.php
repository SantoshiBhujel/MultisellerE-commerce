@component('mail::message')

Please Activate Shop.
Here is the shop details

Shop Name : {{ $shop->name }}
<hr>
Shop Owner : {{ $shop->owner->name }}



@component('mail::button', ['url' => url('/admin/shops')])
Manage Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
