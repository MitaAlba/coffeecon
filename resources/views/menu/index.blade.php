@extends('plantilla.index')
@section('titulo','Menu')
@section('contenido')

<div class="container px-6 mx-auto">
	<h3 class="text-2xl font-medium text-gray-700">Product List</h3>
	<div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
		 @foreach ($products as $product)
		<div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
			<img src="{{ url($product->image_1) }}" alt="" class="w-full max-h-60">
			<div class="flex items-end justify-end w-full bg-cover">
				
			</div>
			<div class="px-5 py-3">
				<h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
				<span class="mt-2 text-gray-500">${{ $product->price }}</span>
				<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<input type="hidden" value="{{ $product->id }}" name="id">
					<input type="hidden" value="{{ $product->category_id }}" name="category_id">
					<input type="hidden" value="{{ $product->name }}" name="name">
					<input type="hidden" value="{{ $product->description }}" name="description">
					<input type="hidden" value="{{ $product->image_1 }}"  name="image_1">
					{{-- <input type="hidden" value="{{ $product->image_2 }}"  name="image_2">
					<input type="hidden" value="{{ $product->image_3 }}"  name="image_3"> --}}
					<input type="hidden" value="{{ $product->status }}" name="status">
					<input type="hidden" value="{{ $product->price }}" name="price">
					{{-- <input type="hidden" value="{{ $product->size_id }}" name="size_id"> --}}
					<input type="hidden" value="1" name="quantity">
					<button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
				</form>
			</div>
			
		</div>
		@endforeach
	</div>
</div>
	<div id="fh5co-featured-menu" class="fh5co-section">
		<div class="container">
			<div class="row">
				
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					<div class="fh5co-item animate-box">
						<img src="images/gallery_1.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Bake Potato Pizza</h3>
						<span class="fh5co-price">$20<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
					<div class="fh5co-item animate-box">
						<img src="images/gallery_2.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Bake Potato Pizza</h3>
						<span class="fh5co-price">$20<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					<div class="fh5co-item margin_top animate-box">
						<img src="images/gallery_3.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Salted Fried Chicken</h3>
						<span class="fh5co-price">$19<sup>.00</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
					<div class="fh5co-item animate-box">
						<img src="images/gallery_4.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Bake Potato Pizza</h3>
						<span class="fh5co-price">$20<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					<div class="fh5co-item animate-box">
						<img src="images/gallery_5.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Italian Sauce Mushroom</h3>
						<span class="fh5co-price">$17<sup>.99</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
					<div class="fh5co-item animate-box">
						<img src="images/gallery_6.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Bake Potato Pizza</h3>
						<span class="fh5co-price">$20<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
					<div class="fh5co-item margin_top animate-box">
						<img src="images/gallery_7.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Fried Potato w/ Garlic</h3>
						<span class="fh5co-price">$22<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
					<div class="fh5co-item animate-box">
						<img src="images/gallery_8.jpeg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3>Bake Potato Pizza</h3>
						<span class="fh5co-price">$20<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
			</div>
		</div>
	</div> 

	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Book a Table</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
					<p><a href="reservation.html" class="btn btn-primary btn-outline">Book Now</a></p>
				</div>
			</div>
		</div>
	</div>
@endsection

