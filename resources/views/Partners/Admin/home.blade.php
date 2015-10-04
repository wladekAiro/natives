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
                        <li><a href="/admin/partner/home">View All</a></li>
                        <li><a href="/admin/partner/form">Create</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-striped">
                <thead>
                  <th>Partner Picture</th>
                  <th>Partner Name</th>
                  <th>Partner Description</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </thead>
                <tbody>
                @foreach ($partners as $partner)
                  <tr>
                      <td>
                          <img src="{{ $partner->picture }}" alt="Picture" width="200px" height="250px">
                      </td>
                      <td>{{ $partner->name }}</td>
                      <td>{{ $partner->description }}</td>
                      <td><a href="/admin/partner/more/{{ $partner->id }}">View more</a></td>
                      <td><a href="/admin/partner/edit/{{ $partner->id }}">Edit</a></td>
                      <td><a href="/admin/partner/delete/{{ $partner->id }}">Delete</a></td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
	{!! $partners -> render() !!}
@endsection
