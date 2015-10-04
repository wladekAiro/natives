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
                    <a href="#" class="navbar-brand">Partner(s)</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/admin/sponsor/home">View All</a></li>
                        <li><a href="/admin/sponsor/form">Create</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-striped">
                <thead>
                  <th>Sponsor Picture</th>
                  <th>Sponsor Name</th>
                  <th>Sponsor Description</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </thead>
                <tbody>
                @foreach ($sponsors as $sponsor)
                  <tr>
                      <td>
                          <img src="{{ $sponsor->picture }}" alt="Picture" width="200px" height="250px">
                      </td>
                      <td>{{ $sponsor->name }}</td>
                      <td>{{ $sponsor->description }}</td>
                      <td><a href="/admin/sponsor/more/{{ $sponsor->id }}">View more</a></td>
                      <td><a href="/admin/sponsor/edit/{{ $sponsor->id }}">Edit</a></td>
                      <td><a href="/admin/sponsor/delete/{{ $sponsor->id }}">Delete</a></td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
	{!! $sponsors -> render() !!}
@endsection
