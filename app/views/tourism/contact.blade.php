@extends('../master')

@section('content')
	<div class="contact-top">
		<!-- container -->
		<div class="container">

				<div class="gallery-info wow fadeInDown animated" data-wow-delay=".5s">
					<div class="welcome">
								<div class="col-md-6 welcome-left">

				<h3 class="wow fadeInLeft animated animated" data-wow-delay=".5s">Contact</h3>
				</div>
				</div>
				</div>
									<a href="#" align="center"><img src="images/2.png" id="section-1" class="img-responsive" alt=""/></a>
									

			<div class="map wow fadeInUp animated animated" data-wow-delay=".5s">
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left wow fadeInLeft animated animated" data-wow-delay=".5s">
					<h3>Address</h3>
					<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
					<h4>Headquarters</h4>
					<p>123 T. Globel Place.
						<span>CG 09-123</span>
						London, Ba. 4567
					</p>
					<h4>Get In Touch</h4>
					<p>Telephone: +1 234 567 9871
						<span>FAX: +1 234 567 9871</span>
						E-mail: <a href="mailto:info@example.com">mail@example.com</a>
					</p>
				</div>
				
				<div class="col-md-6 contact-form wow fadeInRight animated animated" data-wow-delay=".5s">
					{{ Form::open(['route' => 'contacts.store']) }}
					{{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Name')) }}
					{{ $errors->first('name', '<font color="red">* :message</font>')}}
					{{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email')) }}
					{{ $errors->first('email', '<font color="red">* :message</font>')}}
					{{ Form::text('subject', '', array('class' => 'form-control', 'placeholder' => 'Subject')) }}
					{{ Form::textarea('message', '', array('class' => 'form-control', 'placeholder' => 'Message')) }}
					{{ $errors->first('message', '<font color="red">* :message</font>')}}
						<br>
					{{ Form::button('SEND', ['class' => 'btn btn-success form-control', 'type' => 'submit']) }}
					{{ Form::close() }}
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //contact -->
@stop