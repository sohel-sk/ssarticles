<!DOCTYPE html>
<html>
  <head>
    <style>
        .post_title{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px
        }
        .div_center{
            text-align: center;
            padding: 30px;
        }
    </style>
    <base href="/public">
    @include('admin.css')
  </head>

  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')


      <div class="page-content">

        @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>

        @endif

        <h1 class="post_title">Update Post</h1>

        <form action="{{url('update_post',$post->id)}}"  method="POST" enctype="multipart/form-data">
            @csrf

            <div class="div_center">
                <label for="">Post Title</label>
                <input type="text" name="title" value="{{$post->title}}">
            </div>
            <div class="div_center">
                <label for="">Post Description</label>
                <textarea name="description" id="" cols="30" rows="10" >{{$post->description}}</textarea>
            </div class="div_center">
            <div class="div_center">
                <label for="">Old image</label>
                <img style="margin: auto;" height="100px" width="150px" src="/postimage/{{$post->image}}" alt="">
            </div>
            <div class="div_center">
                <label for="">Update old Image</label>
                <input type="file" name="image">
            </div>
            <div class="div_center">
                <input type="submit" class="btn btn-primary">
            </div>

        </form>

      </div>

      <!-- Sidebar Navigation end-->
     @include('admin.footer')
    </div>
  </body>
</html>



