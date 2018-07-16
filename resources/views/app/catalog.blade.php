@extends('layouts.front')

@section('content')
	<!-- MAIN -->
	<div id="main">
		<div class="wrapper cf">
		<!-- portfolio content-->
		<div id="portfolio-content" class="cf">

			<ul id="filter-buttons">
				<li><a href="#" data-filter="*" class="selected">show all</a></li>
				<li><a href="#" data-filter=".web">web</a></li>
				<li><a href="#" data-filter=".print">print</a></li>
				<li><a href="#" data-filter=".design">design</a></li>
				<li><a href="#" data-filter=".photo">photo</a></li>
			</ul>
			<!-- Filter container -->

			<div id="filter-container" class="cf">
				@for($i=1; $i<10; $i++)
				<figure class="web print">
					<a href="{{route('single')}}" class="thumb"><img src="{{asset('images/catalog/dummies/featured/01.jpg')}}" alt="alt" /></a>
					<figcaption>
						<a href="{{route('single')}}"><h3 class="heading">Pellentesque </h3></a>
						<div class="portfolio-cat">
							<a href="#" >web</a>,
							<a href="#" >print</a>
						</div>
					</figcaption>
				</figure>

				<figure class="design">
					<a href="{{route('single')}}" class="thumb"><img src="{{asset('images/catalog/dummies/featured/01.jpg')}}" alt="alt" /></a>
					<figcaption>
						<a href="{{route('single')}}" ><h3 class="heading">Habitant morbi</h3></a>
						<div class="portfolio-cat">
							<a href="#" >design</a>
						</div>
					</figcaption>
				</figure>

				<figure class="web photo">
					<a href="{{route('single')}}" class="thumb"><img src="{{asset('images/catalog/dummies/featured/01.jpg')}}" alt="alt" /></a>
					<figcaption>
						<a href="{{route('single')}}" ><h3 class="heading">Pellentesque habitant morbi</h3></a>
						<div class="portfolio-cat">
							<a href="#" >web</a>,
							<a href="#" >photo</a>
						</div>
					</figcaption>
				</figure>
				@endfor
			</div><!-- ENDS Filter container -->

			<ul class="dc_pagination dc_paginationA dc_paginationA06">
				<li><a href="#" class="current">Prev</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">...</a></li>
				<li><a href="#">19</a></li>
				<li><a href="#">20</a></li>
				<li><a href="#" class="current">Next</a></li>
			</ul>
		</div>
		<!-- ENDS featured -->


		</div><!-- ENDS WRAPPER -->

	</div>
	<!-- ENDS MAIN -->

@endsection

