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
                        <a href="#" class="navbar-brand">Gallery</a>
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
            <div class="container-fluid">
                <div class="row">
                            <div class="panel-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form class="form-horizontal" role="form" method="POST" action="/admin/gallery/update/{{ $gallery->id }}" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Cover Picture</label>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control" name="picture" id="picture" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Gallery Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="name" value="{{ $gallery->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Description</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" name="description" value="{{ $gallery->description }}"></textarea>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-4 control-label">Date</label>
                                        <div class="col-md-6">
                                            <input type="date" class="form-control" name="date" id="date" value="{{ $gallery->date }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Edit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
