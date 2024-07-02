@extends('layouts.main')
 
@section('title', 'Products')
 
@section('content')
<style>
    dl {
    display: grid;
    grid-template-columns: auto 1fr;
    }
    dt {
    display: flex;
    flex-direction: row; 
    font-weight: bold;
    }
    dt::after {
    content: '::';
    padding-left: 1ch;
    padding-right: 1ch;
    margin-left: auto;
    }
    </style>
<main>
    <img
         src="{{ asset('images/products/'.$product['code'].'.jpg')}}"
        alt="Image of {{ $product['name']}}"
                    />
    <dl>
        <dt>Code</dt>
        <dd>{{$product['code']}}</dd>
        
        <dt>Category</dt>
        
        <dd><a href="{{ route('categories-view',[
            'category' => $category['code'],
            ]) }}">{{ $category['name']}}</a></dd>
        
        <dt>Name</dt>
        <dd>{{$product['name']}}</dd>
 
        <dt>Description</dt>
        <dd>{{$product['description']}}</dd>
        
    </dl>
</main>
@endsection