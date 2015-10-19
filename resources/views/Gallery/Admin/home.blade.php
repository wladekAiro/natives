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
		@if (Session::has('message'))
	        <p style="text-align:center;color:red;">{{ Session::get('message') }}</p>
		@endif
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-striped">
                <thead>
                  <th>Gallery Picture</th>
                  <th>Gallery Name</th>
				  <th>Gallery Date</th>
                  <th>Gallery Description</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </thead>
                <tbody>
                @foreach ($gallery as $galleries)
                  <tr>
                      <td>
                          <img src="{{ $galleries->picture }}" alt="Picture" width="200px" height="250px">
                      </td>
                      <td>{{ $galleries->name }}</td>
					  <td>{{ $galleries->date }}</td>
                      <td>{{ $galleries->description }}</td>
                      <td><a href="/admin/gallery/more/{{ $galleries->id }}">View more</a></td>
                      <td><a href="/admin/gallery/edit/{{ $galleries->id }}">Edit</a></td>
                      <td><a href="/admin/gallery/delete/{{ $galleries->id }}">Delete</a></td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
