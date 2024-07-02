@extends('layouts.main')
 
@section('title', 'Products')
 
@section('content')
<style>
   table {
    border-collapse: collapse ;
   }
   table,th,td {
    border:1px solid black ;
   }
   .app-cmp-product-image {
    width: 64px;
   }
</style>
<main>
    <table>
        <p>Product List</p>
        <thead>
        <table>
            <tr>
                <th>Images</th>
                <th>Code</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            @continue($product['catCode'] !== $category['code'])
            <tr>
                <td><img
                     src="{{ asset('images/products/'.$product['code'].'.jpg')}}"
                     alt="Image of {{ $product['name']}}"
                    class="app-cmp-product-image"
                    />
                <td><a href="{{ route('product-view',[
                'product' => $product['code'],
                ]) }}">
                <em>{{ $product['code'] }}</em></a></td>
 
                <td>{{ $product['name'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection