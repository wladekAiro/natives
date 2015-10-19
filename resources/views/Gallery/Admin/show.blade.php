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
                    <a href="#" class="navbar-brand">{{ $gallery -> name }}</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/admin/gallery/home">View All</a></li>
                        <li><a href="/admin/gallery/form">Create</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="panel-body">
            <div class="row">
                <div class="Col-md-4 col-lg-4 col-sm-12">
                    <img class="thumbnail" src="{{ $gallery -> picture }}" width="200px" height="250px">
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12">
                    <p>{{ $gallery -> description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
