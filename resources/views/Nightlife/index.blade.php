@extends('layout.nightlayout')

@section('content')
<div class="row" id="nightheader">

	<div class="col-md-9 col-sm-12 col-lg-9 col-md-offset-1 col-lg-offset-1" id="slider-container">
		<div id="nightdescription">
			<div id="nightslider" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#nightslider" data-slide-to="0" class="active"></li>
    <li data-target="#nightslider" data-slide-to="1"></li>
    <li data-target="#nightslider" data-slide-to="2"></li>
      <li data-target="#nightslider" data-slide-to="3"></li>
      <li data-target="#nightslider" data-slide-to="4"></li>
      <li data-target="#nightslider" data-slide-to="5"></li>
      <li data-target="#nightslider" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <div class="item active" style="background: url('/images/poster1.jpg') center center no-repeat; background-size: cover">
      {{--<img src="/images/poster1.jpg" alt="...">--}}
      <div class="carousel-caption">
      <h3>Monday Event</h3>
       <p></p>
      </div>
    </div>
    <div class="item" style="background: url('/images/slide2.jpg') center center no-repeat; background-size: cover">
      {{--<img src="/images/slide2.jpg" alt="...">--}}
      <div class="carousel-caption">
        <h3>Tuesday Event</h3>
        <p>No limits</p>
      </div>
    </div>
    <div class="item" style="background: url('/images/slide3.jpg') center center no-repeat; background-size: cover">
      {{--<img src="/images/slide3.jpg" alt="...">--}}
      <div class="carousel-caption">
        <h3>Wednesday Event</h3>
        <p>No Limits</p>
      </div>
    </div>
      <div class="item" style="background: url('/images/slide2.jpg') center center no-repeat; background-size: cover">
          {{--<img src="/images/slide2.jpg" alt="...">--}}
          <div class="carousel-caption">
              <h3>Thursday Event</h3>
              <p>No limits</p>
          </div>
      </div>
      <div class="item" style="background: url('/images/poster1.jpg') center center no-repeat; background-size: cover">
          {{--<img src="/images/poster1.jpg" alt="...">--}}
          <div class="carousel-caption">
              <h3>Friday Event</h3>
              <p>No limits</p>
          </div>
      </div>
      <div class="item" style="background: url('/images/slide3.jpg') center center no-repeat; background-size: cover">
          {{--<img src="/images/slide3.jpg" alt="...">--}}
          <div class="carousel-caption">
              <h3>Sarturday Event</h3>
              <p>No limits</p>
          </div>
      </div>
      <div class="item" style="background: url('/images/slide2.jpg') center center no-repeat; background-size: cover">
          {{--<img src="/images/slide2.jpg" alt="..." >--}}
          <div class="carousel-caption">
              <h3>Sunday Event</h3>
              <p>No limits</p>
          </div>
      </div>

    
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
	
</div><!-- end of nightheader -->
<div class="row" id="news">
<!-- end of container -->
</div>



@endsection