@extends('layout.nightlayout')

@section('content')
<!-- end of nightheader -->
<div class="row" id="news">
</div>
<div class="container">
 
	<div class="col-md-8">
	<h2 align="center">{{ $theme->name }}</h2>
    <hr class="intro-divider" id="mydivider" />
		<div class="panel">
			<div class="panel-heading">
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
					<img src="{{ $theme->picture }}" class="img-responsive" />
					</div>
					<div class="col-md-8">
					<p>{{ $theme->description }}</p>
					</div>
				</div>
			</div>
		</div><!-- end of panel -->
	</div><!-- end of col-md-4 -->
</div><!-- end of container -->
@endsection