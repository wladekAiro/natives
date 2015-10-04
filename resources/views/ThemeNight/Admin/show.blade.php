@extends('app')

@section('content')
    <div class="panel panel-default">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">{{ $themeNight -> name }}</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/admin/theme-night/home">View All</a></li>
                        <li><a href="/admin/theme-night/form">Create</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="panel-body">
            <div class="row">
                <div class="Col-md-4 col-lg-4 col-sm-12">
                    <img class="thumbnail" src="{{ $themeNight -> picture }}" width="250px" height="150px">
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12">
                    <p>{{ $themeNight -> description }}</p>
                </div>
            </div>
			<div align="center" class="row" style="">
                <a href="/admin/theme-night/assignDjForm/{{ $themeNight -> id }}" class="btn btn-primary">Assign Dj</a>
                <a href="/admin/theme-night/addPartnerForm/{{ $themeNight -> id }}" class="btn btn-primary">Add Partner</a>
           
                <a href="/admin/theme-night/addSponsorForm/{{ $themeNight -> id }}" class="btn btn-primary">Add Sponsor</a>
			</div>
			<br />
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Partners</div>
						@foreach ($themeNight -> partners as $themeNightPartner)
                        <div class="panel-body">
                            {{ $themeNightPartner -> name }}
                        </div>
						@endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sponsors</div>
						@foreach ($themeNight -> sponsors as $themeNightSponsor)
                        <div class="panel-body">
                             {{ $themeNightSponsor -> name }}
                        </div>
						@endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Dj's
                        </div>
                        <div class="panel-body">
						@foreach ($themeNight -> djs as $themeNightDj)
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            {{ $themeNightDj -> name }}
                                        </div>
                                    </div>
								
                                </div>
                            </div>
							@endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
