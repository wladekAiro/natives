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
                    <a href="#" class="navbar-brand">{{ $event -> name }}</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/admin/event/home">View All</a></li>
                        <li><a href="/admin/event/form">Create</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="panel-body">
            <div class="row">
                <div class="Col-md-4 col-lg-4 col-sm-12">
                    <img class="thumbnail" src="{{ $event -> picture }}" width="200px" height="250px">
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12">
                    <p>{{ $event -> description }}</p>
                </div>
            </div>
			<div align="center" class="row" style="">
                <a href="/admin/event/assignDj/{{ $event->id }}" class="btn btn-primary">Assign Dj</a>
                <a href="/admin/event/addPartnerForm/{{ $event->id }}" class="btn btn-primary">Add Partner</a>
           
                <a href="/admin/event/addSponsorForm/{{ $event->id }}" class="btn btn-primary">Add Sponsor</a>
			</div>
			<br />
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Partners</div>
						@foreach($event -> partner as $eventPartners)
                        <div class="panel-body">
                            {{ $eventPartners -> name }}
                        </div>
						@endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sponsors</div>
						@foreach($event -> sponsor as $eventSponsors)
                        <div class="panel-body">
                            {{ $eventSponsors -> name }}
                        </div>
						@endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if($event -> djs -> isEmpty())
                        <h1>No djs</h1>
                        @else
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Dj's
                            </div>
                            <div class="panel-body">
							@foreach($event -> djs as $eventDj)
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                                {{ $eventDj -> name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
									@endforeach
                            </div>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
