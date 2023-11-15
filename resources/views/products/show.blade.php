@extends('layouts.app')

@section('content')
    <!-- Отобразите основную информацию о товаре -->
    <!-- Пример: -->
    <h2>Название товара</h2>
    <img src="path/to/product/image.jpg" alt="Product Image" class="img-fluid">
    <p>Цена: $19.99</p>
    <p>Описание товара: Краткое описание...</p>
    <p>Размеры: S, M, L</p>

    <!-- Кнопка "Добавить в корзину" -->
    <button class="btn btn-success" data-toggle="modal" data-target="#cartModal">
        Добавить в корзину
    </button>
@endsection