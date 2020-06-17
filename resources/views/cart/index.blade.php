@extends('layouts.app')

@section('content')
    <h2>Your Cart</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead> 
        @foreach ($cartItem as $item)
            <tbody>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ Cart::session(auth()->user()->id)->get($item->id)->getPriceSum() }}</td> 
                    <td>
                        <form action="{{route('addtoCart.update',$item->id)}}" method="POST">
                            @csrf
                            {{method_field('PUT')}}
                            <input type="number" name="qty" id="" value="{{ $item->quantity }}">
                        
                            <input type="submit" value="OK">
                        </form>
                        
                    </td>
                    <td>
                        <form action="{{ route('addtoCart.destroy',$item->id) }}" method="POST">
                            {{method_field('DELETE')}}
                            @csrf
                            <button type="submit">Remove</button>                                
                        </form>
                        
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>

    <h3>
        Total Price: Rs. {{ \Cart::session(auth()->user()->id)->getTotal() }}
    </h3>

    <a href="{{ route('cart.checkout') }}" class="btn btn-primary">Proceed To Checkout</a>
@endsection