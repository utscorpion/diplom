@extends('layouts.front')

@section('content')
	<!-- MAIN -->
	<div id="main">
		<div class="wrapper cf">
		<!-- portfolio content-->
		<div id="portfolio-content" class="cf">

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
						<a href="{{route('single')}}" class="thumb"><img src="{{$product['picture']}}" alt="alt" /></a>
						<figcaption>
							<a href="{{route('single')}}"><h4 class="heading">{{$product['title']}}</h4></a>
							<div class="portfolio-cat">
								<a href="#" >{{$product['description']}}</a>
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

