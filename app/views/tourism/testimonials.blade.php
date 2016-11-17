@extends('../master')

@section('content')
<div class="client-say">
	 <div class="client-say-layer">
	     <div class="client-say-head text-center">
			  <h3>CLIENT SAY</h3>
			  <span></span>{{ HTML::image('images/face.png') }}<span></span>
			  <!-- requried-jsfiles-for owl -->
				
			 <!-- //requried-jsfiles-for owl -->
		     <div id="owl-demo1" class="owl-carousel">
		     	@foreach($feedbacks as $feedback)
				  <div class="item">
					  <div class="client-say-info">
							<p>{{ HTML::image('images/dots1.png') }}{{ $feedback->feedback }}{{ HTML::image('images/dots2.png') }}</p>
							<h4>{{ $feedback->name }}</h4>
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

					<h3 align="center">COMMENTS</h3>
					<hr>
				</div>
					{{ Form::open(['route' => 'testimonials.store']) }}
					{{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Name')) }}
					{{ $errors->first('name', '<font color="red">* :message</font>')}}
					{{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email')) }}
					{{ $errors->first('email', '<font color="red">* :message</font>')}}
					{{ Form::textarea('feedback', '', array('class' => 'form-control', 'placeholder' => 'How is your experience with us?')) }}
					{{ $errors->first('feedback', '<font color="red">* :message</font>')}}
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

@stop
