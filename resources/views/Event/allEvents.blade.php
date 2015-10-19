@extends('layout.nightlayout')

@section('content')
<!-- end of nightheader -->
<div class="container" style="margin-top: 10%;">
	<div class="col-md-8">
	 @if ($events->isEmpty())
                          <p> Currently, there are no events!</p>
                          @else
	<h2 align="center">All Events</h2>
    <hr class="intro-divider" id="mydivider" />
		@foreach($events as $event)
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $event->name }}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ $event->picture }}" class="img-responsive" />
                            </div>
                            <div class="col-md-8">
                                <p>{{ $event->description }}</p>
                                <a href="/event/more/{{$event->id}}" class="btn btn-primary btn-lg" id="viewue">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
			@endforeach
		</div><!-- end of panel -->
		@endif<!-- end of col-md-4 -->
	<div class="col-md-4">
	<a class="twitter-timeline" href="https://twitter.com/maiko_47" data-widget-id="566582921361108992">Tweets by @maiko_47</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
</div><!-- end of container -->
</div>
@endsection