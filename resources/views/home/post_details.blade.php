<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
        </div>
      <!-- header section end -->

      <div style="text-align:center" class="col-md-12">
        <div><img style="padding:20px; height:300px; width:450px; margin:auto;" src="/postimage/{{$post->image}}" class="services_img"></div>
        <h4>{{$post->title}}</h4>
        <h4>{{$post->description}}</h4>
        <p>Post By <b>{{$post->name}}</b></p>

     </div>



      <!-- about section start -->
      @include('home.footer')
      <!-- footer section end -->
   </body>
</html>
