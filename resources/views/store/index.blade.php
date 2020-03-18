<!--CREAMOS EL TEMPLATE DE NUESTA PAGINA-->

@extends('store.template')

@section('content')

	<div class="products">
		@foreach($products as $product)
			<div class="product">
				<h3>{{ $product->name }}</h3>
				<img src="{{ $product->image }}" width="250">
				<div class="product_info">
					<p>{{ $product->extract }}</p>
					<p>Precio: ${{ number_format($product->price,2) }}</p>
					<p>
						<a href="#">I want</a>
						<a href="#">Read More</a>
					</p>
				</div>
			</div>
		@endforeach
	</div>
	

@stop