<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C&R</title>

  <link href="/css/app.css" rel="stylesheet">
  <link href="/css/club.css" rel="stylesheet">
  <style type="text/css">
  body{
  background:#000;

  
  
}
</style>

  <!-- animate min css -->
  <link rel="stylesheet" type="text/css" href="/components/animate.css/animate.min.css">

  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <!-- font awesome -->
  <link rel="stylesheet" type="text/css" href="/components/fontawesome/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Chonburi' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" id="mynavbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Natives</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Theme nights</a></li>
          <li><a href="/event/">Events</a></li>
          <li><a href="#">Gallery</a></li>
         <li><a href="#">Find Us</a></li>
        <li><a href="#">Contact Us</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


@yield('content')

  <!-- Scripts -->
  <script src="/components/jquery/dist/jquery.min.js"></script>
  <script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
    $('#resturant' ).addClass("animated fadeInLeft",0);
    $('#club' ).addClass("animated fadeInRight",0);
    $('.select' ).addClass("animated bounceInDown",2000);

 }); 


</script>


</body>
</html>