@extends('layouts.app')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', " $titleTag")

@section('header')
@include('partials.blogcss')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=768631110006177';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <section>
    <div class="tp-banner-container">      
     <header class="masthead" style="background-image: url('/storage/app/public/{{$post->image}}')">
        <div class="row">
          <div class="col-lg-8 col-md-10 col-md-offset-2 mx-auto">
            <div class="site-heading">
              <h1>{{ $post->title }}</h1>
              <hr class ="small">
              <h2 class="subheading">{{ $post->seo_title }}</h2>
              <span class="#">Posted by
                <a href="#">{{ $post->author->name }}</a>
                 {{Date('F, dS Y g:i A', strtotime($post->created_at))}}</span>
            </div>
          </div> 
        </div>
    </div>
    </section><!-- end slider-wrapper -->  
   @endsection      
   
  @section('content')
   <section id="features" class="feature-wrapper">
     <div class="container">
  <div data-scroll-reveal="enter from the bottom after 0.3s" class="title " data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
   
    <div class ="col-md-8 col-md-offset-2">
    <div class="row">
    
            {!! $post->body !!}
          </div>
          <h4>Comments:</h4>
          <div class="fb-comments" data-href="https://screenbook.ng" data-numposts="5"></div>
        </div>
      </div>
    </div>
</div>
</div><!-- end col-lg-6 -->
 </section>
  
          
    

  <section class="videobg clearfix text-center">
     <div class="col-lg-8  col-md-8 col-md-offset-4 mx-auto">
    <a href="{{url('blog')}}" class ="jtbtn" >ALL Post</a>
    </div>
         </div><!-- end container -->
      </div>
     </div>
    </div>
   </div>
</section><!--/ Video Parallex  End -- >
    
@include('partials.blogscr')
@endsection
    
