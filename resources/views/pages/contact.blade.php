@extends('layouts.app')
@section('title', 'Contact')

    
@section('header')
 @include('partials.blogcss')
    <header class="masthead" style="background-image: url('img/contact.png')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 col-md-offset-2 mx-auto">
            <div class="page-heading">
              <h1>Contact Us</h1>
              <span class="subheading">Want to work with us? get in touch.</span>
            </div>
          </div>
        </div>
      </div>
    </header>
   @stop         
   
    @section('content')
     <section id="features" class="feature-wrapper">
     <div class="container">
  <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                  <div class="contact_tab text-center">
                    <ul id="myTab" class="container text-center nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Contact Details</a></li>
                        <li><a href="#" role="tab" data-toggle="tab">Location Maps</a></li>
                    </ul>
           <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="container">
                        <p><b>Send us your request, we will get back to you within</b> <i> 24hrs</i></p>
                            <div id="message"><ul>
                         @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                           </ul></div>
                            <form id="contactform" action="{{ url('contact') }}" name="contactform" method="POST" data-scroll-reveal="enter from the bottom after 0.4s">
                              {{ csrf_field() }}
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email Address"> 
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"> 
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Message"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" value="SEND" id="submit" class="jtbtn ">SUBMIT</button>
                                </div>
                            </form> <!-- End Form -->
                        </div> <!-- End Container -->
                    </div><!-- End Tab Pane -->
                       <!-- /Google Map -->     
                  <div class="tab-pane fade" id="tab2">
                   <div id="map"></div>
                  </div>   
            </div><!-- /end my tab content -->  
        </div><!-- /contact_tab --> 
     </div>
</div><!-- end col-lg-6 -->
</section>
    <!--/ SERVICE SECTION -->   
    <section id="services" class="white-wrapper">
        <div class="container">
            <div class="title text-center">
                <div class="clearfix"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <a title="" href="#"><i class="fa fa-envelope-o aligncenter"></i></a>
                        <h2>info@screenbook.ng</h2>
                    </div>
                </div>
    

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <a title="" href="#"><i class="fa fa-map-marker
                         aligncenter"></i></a>
                        <h2>362, Peridot fuel Station, <br/>Isheri-Olofin, Lagos, Nigeria.</h2>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box"  data-scroll-reveal="enter     from the bottom after 0.6s">
                         <a title="" href="#"><i class="fa fa-phone aligncenter"></i></a>
                        <h2>(+234) 0813-618-1285 </h2>
                    </div>
                </div>
              </div>
            </div> <!-- end title -->
        </div><!-- end container -->
    </section><!-- Service and Testimonial End --> 
        
     @endsection
    
