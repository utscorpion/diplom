@extends('layouts.front')

@section('content')
	<!-- MAIN -->
	<div id="main">
		<div class="wrapper cf">
		<!-- portfolio content-->
			<div><a href="{{route('catalog')}}">Каталог</a><a href="{{route('catalog')}}">{{--{{$products['sort']}}--}}</a></div>
			<form action="{{'search'}}" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="text" name="request">
				<input type="submit" name="button" value="ПОИСК">
			</form>
		<div id="portfolio-content" class="cf">
			<a href="{{route('catalogup')}}">&#9650;</a>
			<a href="{{route('catalogdown')}}">&#9660;</a>
			<ul id="filter-buttons">
				<li><a href="#" data-filter="*" class="selected">Вся продукция</a></li>
				<li><a href="#" data-filter=".web">БАДы</a></li>
				<li><a href="#" data-filter=".print">Косметика</a></li>
				<li><a href="#" data-filter=".design">Гигиена</a></li>
			</ul>
			<!-- Filter container -->

			<div id="filter-container" class="cf">

				@foreach ($products as $product)
					<figure class="{{$product['tag']}}">
						<a href="{{route('single', array('id' => $product['id']))}}" class="thumb"><img src="{{$product['picture']}}" alt="alt" /></a>
						<figcaption>
							<a href="{{route('single', array('id' => $product['id']))}}"><h4 class="heading">{{$product['title']}}</h4></a>
							<div class="portfolio-cat">
								<a href="#" >{!! $product['characteristic'] !!}</a>
							</div>
						</figcaption>
					</figure>
				@endforeach
			</div><!-- ENDS Filter container -->
		</div>
		<!-- ENDS featured -->


		</div><!-- ENDS WRAPPER -->

	</div>
	<!-- ENDS MAIN -->

@endsection

