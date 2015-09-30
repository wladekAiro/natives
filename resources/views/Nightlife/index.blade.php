@extends('layout.nightlayout')
@section('content')
<div class="body">
<div class="row" id="nightheader">

	<div id="slider-container">
		<div id="nightdescription">
			<div id="nightslider" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#nightslider" data-slide-to="{{ $theme1->id }}" class="active"></li>
      @foreach( $theme2 as $c)
    <li data-target="#nightslider" data-slide-to="{{ $c -> id }}"></li>
      @endforeach
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <div class="item active">
      <a href="/theme/show/{{ $theme1->id }}"><img src="{{ $theme1->picture }}" alt="..."></a>
      <div class="carousel-caption">
      <h3>Monday Event</h3>
       <p>No limits</p>
      </div>
    </div>
    @foreach($theme2 as $theme)
    <div class="item">
      <a href="/theme/show/{{ $theme->id }}"><img src="{{ $theme->picture }}" alt="..."></a>
      <div class="carousel-caption">
        <h3>Tuesday Event</h3>
        <p>No limits</p>
      </div>
    </div>
      @endforeach
    {{--<div class="item" style="background: url('/images/slide3.jpg') center center no-repeat; background-size: cover">--}}
      {{--<img src="/images/slide3.jpg" alt="...">--}}
      {{--<div class="carousel-caption">--}}
        {{--<h3>Wednesday Event</h3>--}}
        {{--<p>No Limits</p>--}}
      {{--</div>--}}
    {{--</div>--}}
      {{--<div class="item" style="background: url('/images/slide2.jpg') center center no-repeat; background-size: cover">--}}
          {{--<img src="/images/slide2.jpg" alt="...">--}}
          {{--<div class="carousel-caption">--}}
              {{--<h3>Thursday Event</h3>--}}
              {{--<p>No limits</p>--}}
          {{--</div>--}}
      {{--</div>--}}
      {{--<div class="item" style="background: url('/images/poster1.jpg') center center no-repeat; background-size: cover">--}}
          {{--<img src="/images/poster1.jpg" alt="...">--}}
          {{--<div class="carousel-caption">--}}
              {{--<h3>Friday Event</h3>--}}
              {{--<p>No limits</p>--}}
          {{--</div>--}}
      {{--</div>--}}
      {{--<div class="item" style="background: url('/images/slide3.jpg') center center no-repeat; background-size: cover">--}}
          {{--<img src="/images/slide3.jpg" alt="...">--}}
          {{--<div class="carousel-caption">--}}
              {{--<h3>Sarturday Event</h3>--}}
              {{--<p>No limits</p>--}}
          {{--</div>--}}
      {{--</div>--}}
      {{--<div class="item" style="background: url('/images/slide2.jpg') center center no-repeat; background-size: cover">--}}
          {{--<img src="/images/slide2.jpg" alt="..." >--}}
          {{--<div class="carousel-caption">--}}
              {{--<h3>Sunday Event</h3>--}}
              {{--<p>No limits</p>--}}
          {{--</div>--}}
      {{--</div>--}}

    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#nightslider" role="button" data-slide="prev">
    <span class="fa fa-chevron-circle-left fa-3x" id="nav" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#nightslider" role="button" data-slide="next">
    <span class="fa fa-chevron-circle-right fa-3x" id="nav" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>

	</div>
	
</div>
    <div id="facebook_landing">
        <div class="col-md-12 col-lg-12 col-sm-12">
            Facebook section

            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
            took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
            but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
            software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
    </div><!-- end of nightheader -->
<div class="row" id="twiter_landing">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <a class="twitter-timeline" href="https://twitter.com/maiko_47" data-widget-id="566582921361108992">Tweets by @maiko_47</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        </script>
    </div>
</div>
<!-- end of container -->
</div>

@endsection
