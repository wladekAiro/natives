@extends('layout.nightlayout')

@section('content')
<!-- end of nightheader -->
<style type="text/css">
    /*Time for the CSS*/
    * {margin: 0; padding: 0;}
    .slider{
        width: 640px; /*Same as width of the large image*/
        position: relative;
        /*Instead of height we will use padding*/
        padding-top: 320px; /*That helps bring the labels down*/

        margin: 100px auto;

        /*Lets add a shadow*/
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75);
    }


    /*Last thing remaining is to add transitions*/
    .slider>img{
        position: absolute;
        left: 0; top: 0;
        transition: all 0.5s;
    }

    .slider input[name='slide_switch'] {
        display: none;
    }

    .slider label {
        /*Lets add some spacing for the thumbnails*/
        margin: 18px 0 0 18px;
        border: 3px solid #999;

        float: left;
        cursor: pointer;
        transition: all 0.5s;

        /*Default style = low opacity*/
        opacity: 0.6;
    }
</style>
{{--<div class="container" style="margin-top: 10%;">--}}
{{--<header>--}}
    {{--<h1>Natives Gallery</h1>--}}
{{--</header>--}}

<!--
We will make a slider with stylized thumbnails using CSS3
The markup is very simple:
Radio Inputs
Labels with thumbnails to detect click event
Main Image
-->
<div class="slider">
    <input type="radio" name="slide_switch" id="id1"/>
    <label for="id1">
        <img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg" width="100"/>
    </label>
    <img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg"/>

    <!--Lets show the second image by default on page load-->
    <input type="radio" name="slide_switch" id="id2" checked="checked"/>
    <label for="id2">
        <img src="http://thecodeplayer.com/uploads/media/40Ly3VB.jpg" width="100"/>
    </label>
    <img src="http://thecodeplayer.com/uploads/media/40Ly3VB.jpg"/>

    <input type="radio" name="slide_switch" id="id3"/>
    <label for="id3">
        <img src="http://thecodeplayer.com/uploads/media/00kih8g.jpg" width="100"/>
    </label>
    <img src="http://thecodeplayer.com/uploads/media/00kih8g.jpg"/>

    <input type="radio" name="slide_switch" id="id4"/>
    <label for="id4">
        <img src="http://thecodeplayer.com/uploads/media/2rT2vdx.jpg" width="100"/>
    </label>
    <img src="http://thecodeplayer.com/uploads/media/2rT2vdx.jpg"/>

    <input type="radio" name="slide_switch" id="id5"/>
    <label for="id5">
        <img src="http://thecodeplayer.com/uploads/media/8k3N3EL.jpg" width="100"/>
    </label>
    <img src="http://thecodeplayer.com/uploads/media/8k3N3EL.jpg"/>
</div>
{{--</div><!-- end of container -->--}}
</div>



@endsection