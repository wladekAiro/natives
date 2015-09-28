@extends('layout.nightlayout')
@section('content')
<!-- end of nightheader -->
<div class="container" style="margin-top: 10%;">
 <div class="row">
     <div class="col-md-6">
         <img src="{{ $showtheme->picture }}" class="img-responsive" height="200%" width="100%"/>
         <!-- end of panel -->
     </div>
     <div class="col-md-6 col-lg-6 col-sm-12" style="color: #d6fcff">
         <div class="row">
             <div class="col-sm-12 col-md-12 col-lg-12">
                 <p>{{ $showtheme->description }}</p>
                 <p>
                     <a href="" class="btn btn-default btn-group-sm">Resident Dj</a>
                 </p>
             </div>
         </div>
         <div class="row">

         </div>
     </div>
 </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-lg-offset-1 col-md-offset-1" id="event_attributes">
            <p>
                This project has been prepared as my final year project and apart from fulfilling the requirements of
                the University for an Award of degree; this project is going to be deployed by a serious organization
                which wants to use technology to improve their daily objectives. Skyplus agencies is a real estate
                consultancy farm that deals with leasing and selling of real estates, land and offers consultancy
                services on real estates. As a Computer Science student who has known the advantages of automated
                systems over manual work and who is willing to join in the transformation of our community to adhere to
                the technological changes of the current world. My readiness and willingness to undertake this project
                given the knowledge of software development I have gained in the course of my education, justifies my
                credibility in undertaking this work. This project will enable online lease of real estates and submission
                of payment details by customers. These customers can be local customers within the country or those
                living in the diaspora.
            </p>
        </div>
    </div>
	 <!-- end of col-md-4 -->
</div><!-- end of container -->
@endsection