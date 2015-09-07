@extends('layout.nightlayout')

@section('content')
<!-- end of nightheader -->
<div class="row" id="upcoming">
 <h2>Upcoming Events</h2>
	<div class="col-md-3">
		<div class="thumbnail" id="upcomingthumb" style="background:url('../images/poster2.jpg') center center no-repeat;background-size:contain">
		
		<div class="caption">
		<div id="captioncontent">
		
		<a href="" class="btn btn-primary" id="viewue">View Details</a>
		</div>
		</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="thumbnail" id="upcomingthumb" style="background:url('../images/poster3.jpg') center center no-repeat;background-size:contain">
		
		<div class="caption">
		<div id="captioncontent">
		
		<a href="" class="btn btn-primary" id="viewue">View Details</a>
		</div>
		</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="thumbnail" id="upcomingthumb" style="background:url('../images/poster4.jpg') center center no-repeat;background-size:contain">
		
		<div class="caption">
		<div id="captioncontent">
		
		<a href="" class="btn btn-primary" id="viewue">View Details</a>
		</div>
		</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="thumbnail" id="upcomingthumb" style="background:url('../images/poster5.jpg') center center no-repeat;background-size:contain">
		
		<div class="caption">
		<div id="captioncontent">
		
		<a href="" class="btn btn-primary" id="viewue">View Details</a>
		</div>
		</div>
		</div>
	</div>
	<div class="col-md-offset-5 col-md-4">
	<a href="" class="btn btn-primary btn-lg" id="viewue">View All Events</a>

	</div>

</div>
<div class="row" id="news">
<div class="container">
 
	<div class="col-md-8">
	<h2 align="center">What Happened</h2>
    <hr class="intro-divider" id="mydivider" />
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">All White Party</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
					<img src="/images/allwhite.jpg" class="img-responsive" />
					</div>
					<div class="col-md-8">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
					 into electronic typesetting, remaining essentially unchanged.</p>
					 <a href="" class="btn btn-primary btn-lg" id="viewue">Read More</a>
					</div>
				</div>
			</div>
		</div><!-- end of panel -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Kenyan Affair Autumn Bash</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
					<img src="/images/ka.jpg" class="img-responsive" />
					</div>
					<div class="col-md-8">
					<p>Second leg of our monthly event in Melbourne on Saturday 9th March 2014 with the 
					ever-entertaining DJ Kwenda, DJ Bumaye and DJ Sam.</p>
					 <a href="" class="btn btn-primary btn-lg" id="viewue">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end of col-md-4 -->
	<div class="col-md-4">
	<a class="twitter-timeline" href="https://twitter.com/maiko_47" data-widget-id="566582921361108992">Tweets by @maiko_47</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
</div><!-- end of container -->
</div>



@endsection