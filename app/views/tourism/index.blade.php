@extends('../master')

@section('content')
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="col-md-6 welcome-left">
				<h3 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Welcome</h3>
				<h4 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit amet eros sagittis, quis hendrerit libero aliquam. Fusce semper augue ac dolor efficitur, a pretium metus pellentesque.</h4>
				<p class="wow fadeInLeft animated animated" data-wow-delay=".5s">Sed posuere laoreet neque, eu rhoncus libero accumsan eget. Morbi tempor nibh ullamcorper urna hendrerit, at molestie tortor molestie. Suspendisse vel porttitor metus, vitae luctus velit. Donec dictum suscipit orci nec facilisis. Sed pretium eu diam id tincidunt. </p>
			</div>
			<div class="col-md-6 welcome-right">
				<div class="welcome-right-top wow fadeInUp animated animated" data-wow-delay=".5s">
					<img src="images/2.png">
				</div>
				
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- welcome-bottom -->
		<div class="gallery">
			<div class="container">
			
				<div class="gallery-info wow fadeInDown animated" data-wow-delay=".5s">
					<div class="welcome">
								<div class="col-md-6 welcome-left">

				<h3 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Our tour packages</h3>
				</div>
				</div>
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
									<a class="example-image-link" href="details?id={{ $package->id }}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										{{ HTML::image($url) }}
										<figcaption>
											<h3>{{ $package->name }}</h3>
											<p>{{ $package->location }}</p>
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

	<!-- //services -->
@stop


