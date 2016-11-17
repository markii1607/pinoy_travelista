@extends('../master')

@section('content')
<br>
<div class="container">
								<div class="welcome-aaleft" align="center">

				<h4>Travel and Tour Package</h4>
				</div>
				
<br>
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
							@foreach($package->sites as $site)
								@if ($site->folder && $site->filename)
									<?php 
										$url = "images/".$site->folder."/".$site->filename;
									?>
									<img src="{{$url}}" height="300" width="500" />
								@endif
							@endforeach
					</div>
					</div>
	          </div>
	          <br><br>
	        <div class="client-say">
	 <div class="client-say-layer">
	     <div class="client-say-head text-center">
			  <h3>TOUR REVIEWS</h3>
			  <span></span>{{ HTML::image('images/face.png') }}<span></span>
			  <!-- requried-jsfiles-for owl -->
				
			 <!-- //requried-jsfiles-for owl -->
		     <div id="owl-demo1" class="owl-carousel">
		     @foreach($reviews as $review)
				  <div class="item">
					  <div class="client-say-info">
							<p>{{ HTML::image('images/dots1.png') }}{{ $review->review }}{{ HTML::image('images/dots2.png') }}</p>
							<h4>{{ $review->name }}</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
				  @endforeach
				  
			  </div>
			  
          </div>
		  
      </div>
	  
</div>
<div class="contact-top">
		<!-- container -->
		<div class="container">
			
			<div class="map wow fadeInUp animated animated" data-wow-delay=".5s">
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left wow fadeInLeft animated animated" data-wow-delay=".5s">

						<a href="#"><img src="images/2.png" id="section-1" class="img-responsive" alt=""/></a>
				</div>
				<div class="col-md-6 contact-form wow fadeInRight animated animated" data-wow-delay=".5s">
	<div class="col-md-6 mail-grid-left wow fadeInLeft animated animated" data-wow-delay=".5s">

					<h3 align="center">REVIEW</h3>
					<hr>
				</div>
					{{ Form::open(['route' => 'reviews.store']) }}
					{{ Form::hidden('tour_package_id', $id) }}
					{{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Name')) }}
					{{ $errors->first('name', '<font color="red">* :message</font>')}}
					{{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email')) }}
					{{ $errors->first('email', '<font color="red">* :message</font>')}}
					{{ Form::textarea('review', '', array('class' => 'form-control', 'placeholder' => 'How is your experience with the tour package?')) }}
					{{ $errors->first('review', '<font color="red">* :message</font>')}}
						<br>
					{{ Form::button('SEND', ['class' => 'btn btn-success form-control', 'type' => 'submit']) }}
					{{ Form::close() }}
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	</div>

					<br><br>
					<div class="gallery">
					<div class="container">
						<div class="gallery-info wow fadeInDown animated" data-wow-delay=".5s">
							<h2>You might also like...</h2>
						</div>
						
						<div class="gallery-grids">
						@foreach($others as $other)
							<?php
								$folder = $other->folder;
								$name = $other->filename;
								$url = "images/".$folder."/".$name;
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






