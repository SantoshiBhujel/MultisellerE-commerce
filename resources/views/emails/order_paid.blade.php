@component('mail::message')
Hello {{ $order->user->name }}

Thank you for the purchase


Here is the receipt:

<table class="table">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order->items as $item)
            <tr>
                <td scope="row">{{ $item->name }}</td>
                <td>{{ $item->pivot->quantity }}</td>
                <td>{{ $item->pivot->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
Grand Total: {{ $order->grand_total }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
