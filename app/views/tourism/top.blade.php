@extends('../master')

@section('content')
	<!-- welcome-bottom -->
			<div class="gallery">
			<div class="container">
				
								<div class="welcome-aaleft" align="center">

				<h4 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Tour Packages</h4>
				</div>
				
				<div class="gallery-grids">
					@foreach($packages as $package)
						<?php
							$folder = $package->folder;
							$name = $package->filename;
							$url = "images/".$folder."/".$name;
						?>
					<div class="col-md-6 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
						<div class="grid">
							<figure class="effect-layla">
								<a class="example-image-link" href="details?id={{$package->id}}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
									{{ HTML::image($url) }}
									<figcaption>
										<h3>{{$package->name}}</h3>
										<p>{{$package->location}}</p>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					@endforeach

						</div>
					</div>
					</div>
	<!-- //welcome-bottom -->
@stop
