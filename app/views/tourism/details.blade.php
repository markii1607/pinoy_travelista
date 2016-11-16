@extends('../master')

@section('content')
<br>
	<div class="gallery-info wow fadeInDown animated" data-wow-delay=".5s">
		<h2>Travel and Tour Package </h2>
	</div>
	<div id="exTab3" class="container">	
	<ul  class="nav nav-pills">
				<li class="active">
	        <a  href="#1b" data-toggle="tab">Details</a>
				</li>
				<li><a href="#2b" data-toggle="tab">Photos</a>
				
				</li>
				
			</ul>
						<div class="tab-content clearfix">
				 

				<div class="tab-pane active" id="1b">
					<!-- Description -->
					<h3>Description</h3>
		      <p>{{ $package->description }}</p>
		      <br />

					<h4>Travel Time</h4>
					<p>{{ $package->travel_time }}</p>
					<br />
					
					<h4>Package Inclusion</h4>
					<p>{{ $package->package_inclusion }}</p>
					<br />
					
					<h4>Package exclusion</h4>
					<p>{{ $package->package_exclusion }}</p>
					<br />
					
					<h4>Sites to visit</h4>
						<ul>
							@foreach($package->sites as $site)
								<li>{{$site->name}}</li>
							@endforeach
						</ul>
					<br />

					<h4>Price List</h4>
						<ul>
							@foreach($package->price_lists as $list)
								<li>{{$list->name}}</li>
							@endforeach
						</ul>
					<br />

					<h4>Sample Itinerary</h4>
					<ul>
						@foreach($package->itineraries as $itinerary)
							<li>{{ "Day ".$itinerary->day." ".$itinerary->time." ".$itinerary->event}}</li>
						@endforeach
					</ul>
					<br />

					<h4>How to Avail of the Package</h4>
					<p>{{ $package->avail }}</p>
					<br />
				</div>
					<div class="tab-pane" id="2b">
							@foreach(range(3,1) as $i)
								<?php 
									$url = "images/".$package->filename."/".$package->filename."".$i.".jpg";
								?>
								<img src="{{$url}}" height="300" width="500" />
							@endforeach
					</div>
					</div>
	          </div>
	          <br><br>
	        <div class="gallery-info wow fadeInDown animated" data-wow-delay=".5s">
						<h2>Tour Reviews</h2>
					</div>
					<br><br>
					@foreach($package->tour_reviews as $review)
						<div class="container">
							<h3 align="center">{{ $review->review }}</h3>
							<p align="center">{{ $review->name }}</p>
						</div>
						<br><br>
					@endforeach

					<br><br>
					<div class="gallery">
					<div class="container">
						<div class="gallery-info wow fadeInDown animated" data-wow-delay=".5s">
							<h2>You might also like...</h2>
						</div>
						
						<div class="gallery-grids">
						@foreach($others as $other)
							<?php
								$name = $other->filename;
								$url = "images/".$name."/".$name."1.jpg";
							?>
							<div class="col-md-6 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
								<div class="grid">
									<figure class="effect-layla">
										<a class="example-image-link" href="details?id={{ $other->id }}" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
											{{ HTML::image($url) }}
											<figcaption>
												<h3>{{ $other->name }}</h3>
												<p>{{ $other->location }}</p>
												<p>{{ $other->description }}</p>
											</figcaption>	
										</a>
									</figure>
								</div>
							</div>
						@endforeach

					</div>
			</div>
		</div>

				</div>
	  </div>
@stop






