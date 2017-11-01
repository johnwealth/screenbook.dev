@extends('layouts.app')
@section('title', 'Blog')



 @section('header')
 @include('partials.blogcss')
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 col-md-offset-2 mx-auto">
            <div class="site-heading">
              <h2>Screenbook.ng</h2>
              <hr class ="small">
              <span class="subheading">Blog Posts</span>
            </div>
          </div>
        </div>
      </div>
    </header>
   @stop
         
        
    <!--/ SERVICE SECTION --> 
    @section('content')  
    <section >
    <div class="blog" id="blog">   
        <div class="container">
           <div class=" main-content col-lg-8  col-md-10 col-md-offset-2 mx-auto">
          @foreach($posts as $post)

          <div class="post-preview">
            <a href="/post/{{$post->slug}}">

              <h2 class="post-title">
                {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                {{$post->excerpt}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{ $post->author->name }}</a>
              {{Date('F, dS Y g:i A', strtotime($post->created_at))}}</p>
            <hr>
            </div>
             @endforeach
            
            </div>
        </div><!-- end #testimonial -->
        </div><!-- end customnav -->
    </div> <!-- end container -->
    </section><!-- Service and Testimonial End --> 
       
    <!--/ VIDEO PARALLAX SECTINO  -->   
    <section class="videobg clearfix text-center">
        
                 <div class ="col-md-10 " > 
                 {{ $posts->links() }}
                  </div>
               </div><!-- end container -->
            </div>
     </div>
    </div>
   </div>
</section><!--/ Video Parallex  End --> 
@include('partials.blogscr') 
@endsection
    
