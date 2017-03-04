@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Cuenta Usuario</h1>
            <hr>
            <h2>Mis Ordenes</h2>
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">${{ $item['price'] }}</span>
                                    {{ $item['item']['title'] }} | Cantidad de Unidades {{ $item['qty'] }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong>Total Pagado: ${{ $order->cart->totalPrice }}</strong>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection