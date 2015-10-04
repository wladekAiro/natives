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
                    <a href="#" class="navbar-brand">Theme Night</a>
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
            <table class="table table-bordered table-responsive table-striped">
                <thead>
                  <th>Theme Night Picture</th>
                  <th>Theme Night Name</th>
                  <th>Theme Night Description</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </thead>
                <tbody>
                @foreach ($themeNights as $themeNight)
                  <tr>
                      <td>
                          <img src="{{ $themeNight->picture }}" alt="Picture" width="250px" height="150px">
                      </td>
                      <td>{{ $themeNight->name }}</td>
                      <td>{{ $themeNight->description }}</td>
                      <td><a href="/admin/theme-night/more/{{ $themeNight->id }}">View more</a></td>
                      <td><a href="/admin/theme-night/edit/{{ $themeNight->id }}">Edit</a></td>
                      <td><a href="/admin/theme-night/delete/{{ $themeNight->id }}">Delete</a></td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
	{!! $themeNights -> render() !!}
@endsection
