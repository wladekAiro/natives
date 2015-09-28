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
                        <li><a href="/admin/theme-night/home">View All</a></li>
                        <li><a href="/admin/theme-night/form">Create</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="panel-body">
            <div class="row">
                <div class="Col-md-4 col-lg-4 col-sm-12">
                    <img class="thumbnail" src="{{ $event -> picture }}">
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12">
                    <p>{{ $event -> description }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Partners</div>
                        <div class="panel-body">
                            Partners list
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Sponsors</div>
                        <div class="panel-body">
                            Sponsor list
                        </div>
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
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                                Dj 1
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                                Dj 2
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                                Dj 3
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
