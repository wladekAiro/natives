@extends('layout.nightlayout')

@section('content')

    <style type="text/css">
        .thumbs{
            clear: both;
            width: 510px;
            margin:0 auto;
            position: relative;
            overflow: auto;
        }

        .thumbs ul{
            padding:0;
            margin:0;
            list-style-type:none;
            width: 1000px;
        }

        .thumbs li{
            float:left;
            padding:0;
            margin:5px 5px 0 0;
            display: inline;
        }

        .thumbs li a{
            background-color:#2B2B2B;
            margin:0;
            padding:5px;
            display:block;
            width: 125px;
            height: 75px;
            text-decoration:none;
            color: #fff;
        }

        .thumbs li a:hover, .thumbs li.active a{
            background-color:#990000;
        }

        .thumbs img{
            border: none;
            padding: 0;
            margin: 0;
        }

        .viewer{
            clear: both;
            margin:10px auto;
            padding:0;
            background-color:#990000;
            overflow:hidden;
            height:310px;
            width:510px;
            color: #fff;
            font-size: .9em;
        }

        .viewer img{
            border: 5px solid #990000;
        }

        .viewer-image{
            clear:both;
            padding:0;
            margin:0;
            position: relative;
            display: block;
            height:310px;
            width:510px;
        }

        .viewer-image cite {
            background: #111;
            -moz-opacity:.7;
            filter:alpha(opacity=70);
            opacity:.7;
            color: #fff;
            text-align: left;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 480px;
            padding: 10px;
            margin: 5px;
            border-top: 1px solid #999;
            font-style: normal;
        }
    </style>

    <div class="viewer">
        <div id="image1" class="viewer-image">
            <img src="images/sport1.jpg" alt="basketball" />
            <cite>Basketball</cite>
        </div>
        <div id="image2" class="viewer-image">
            <img src="images/sport2.jpg" alt="Cricket" />
            <cite>Cricket</cite>
        </div>
        <div id="image3" class="viewer-image">
            <img src="images/sport3.jpg" alt="rugby" />
            <cite>Rugby</cite>
        </div>
        <div id="image4" class="viewer-image">
            <img src="images/sport4.jpg" alt="soccer" />
            <cite>Soccer</cite>
        </div>
        <div id="image5" class="viewer-image">
            <img src="images/sport5.jpg" alt="squash" />
            <cite>Squash</cite>
        </div>
        <div id="image6" class="viewer-image">
            <img src="images/sport6.jpg" alt="tennis" />
            <cite>Tennis</cite>
        </div>
    </div>
    <div class="thumbs">
        <ul>
            <li class="active"><a href="#image1"><img src="images/sport-s1.jpg" alt="basketball" /></a></li>
            <li><a href="#image2"><img src="images/sport-s2.jpg" alt="cricket" /></a></li>
            <li><a href="#image3"><img src="images/sport-s3.jpg" alt="rugby" /></a></li>
            <li><a href="#image4"><img src="images/sport-s4.jpg" alt="soccer" /></a></li>
            <li><a href="#image5"><img src="images/sport-s5.jpg" alt="squash" /></a></li>
            <li><a href="#image6"><img src="images/sport-s6.jpg" alt="tennis" /></a></li>
        </ul>
    </div>

@endsection
