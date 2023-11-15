@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <img src="{{ $product->image_path }}" alt="Product Image" class="img-fluid">
                <h3>{{ $product->name }}</h3>
                <p>Цена: ${{ $product->price }}</p>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Подробнее о товаре</a>
            </div>
        @endforeach
    </div>
@endsection
