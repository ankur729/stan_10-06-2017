<?php 
$body_class ="gallery-page";
$meta_title ="Stanza Living : Gallery";
$meta_keyword ="Stanza Living,Premium student";
$meta_description ="Premium student accommodation in India - move over PGs and hostels!";
?>

@extends('layouts.master.front.landing')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/plugin/portfolio/css/demo.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('landing/plugin/portfolio/css/component.css') }}" />
<script src="{{ URL::asset('landing/plugin/portfolio/js/modernizr.custom.js') }}"></script>
@endsection

@section('content')


	
	<div class="row section-1">
	<div class="container">
			<div id="grid-gallery" class="grid-gallery col-md-100 left portfolio-name">
				<h2 class="heading">Our Gallery</h2>
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/1.jpg') }}" alt="img01"/><!-- 
								<figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption> -->
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/2.jpg') }}" alt="img02"/><!-- 
								<figcaption><h3>Vice velit chia</h3><p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p></figcaption> -->
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/3.jpg') }}" alt="img03"/>
								
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/4.jpg') }}" alt="img04"/>
								
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/5.jpg') }}" alt="img05"/>
								
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/6.jpg') }}" alt="img06"/>
							</figure>
						</li>
							<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/7.jpg') }}" alt="img06"/>
							</figure>
						</li>
							<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/8.jpg') }}" alt="img06"/>
							</figure>
						</li>
							<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/9.jpg') }}" alt="img06"/>
							</figure>
						</li>
							<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/10.jpg') }}" alt="img06"/>
							</figure>
						</li>
							<li>
							<figure>
								<img src="{{ URL::asset('landing/images/assets/gallery/11.jpg') }}" alt="img06"/>
							</figure>
						</li>
					</ul>
				</section>
				<section class="slideshow">
					<ul>
						<li>
							<figure>
								<figcaption>
									<h3>bedroom</h3>
									<!-- <p>london house</p> -->
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/1.jpg') }}" alt="img01"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>dining area</h3>
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/2.jpg') }}" alt="img02"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>gym</h3>
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/3.jpg') }}" alt="img03"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>reception</h3>
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/4.jpg') }}" alt="img04"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>lounge</h3>
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/5.jpg') }}" alt="img05"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>study area</h3>
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/6.jpg') }}" alt="img06"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>dinning area</h3>
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/7.jpg') }}" alt="img07"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>bedroom</h3>
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/8.jpg') }}" alt="img08"/>
							</figure>
						</li>
						<li>
							<figure>
								<figcaption>
									<h3>gym area</h3>
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/9.jpg') }}" alt="img08"/>
							</figure>
						</li>
							<li>
							<figure>
								<figcaption>
									<h3>pool area</h3>
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/10.jpg') }}" alt="img08"/>
							</figure>
						</li>
							<li>
							<figure>
								<figcaption>
									<h3>reception area</h3>
								</figcaption>
								<img  src="{{ URL::asset('landing/images/assets/gallery/11.jpg') }}" alt="img08"/>
							</figure>
						</li>
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navigate with arrow keys</div>
				</section><!-- // slideshow -->
				
			</div><!-- // grid-gallery -->
		</div>
		</div>

@endsection

@push('scripts')

<script src="{{ URL::asset('landing/plugin/portfolio/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('landing/plugin/portfolio/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('landing/plugin/portfolio/js/classie.js') }}"></script>
<script src="{{ URL::asset('landing/plugin/portfolio/js/cbpGridGallery.js') }}"></script>
<script>
new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>

@endpush