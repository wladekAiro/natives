@extends('layout.resturantlayout')
@section('content')
<div class="row" id="mainheader">
	<div class="col-md-6 col-sm-12 " id="resturant" >
		<div class="select">
			<h1>Resturant</h1>
			<hr class="intro-divider" id="mydivider" />
			<a href="/Resturant" class="btn btn-primary" id="proceed">Enter</a>
		</div>
	</div>
	<div class="col-md-6 col-sm-12" id="club">
		<div class="select">
			<h1>Night Life</h1>
			<hr class="intro-divider" id="mydivider" />
			<a href="/Nightlife" class="btn btn-primary" id="proceed">Enter</a>
		</div>
	</div>
</div>

@endsection