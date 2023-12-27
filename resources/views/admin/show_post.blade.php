<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
  </head>
  <style>
    .title_deg{
        font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px
    }

    .table_deg{
        border: 1px solid;
        width: 80%;
        text-align: center;
        margin-left: 60px;
    }
    .image_deg{
        height: 100px;
        padding: 10px;
        width: 150px;
    }
  </style>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')

      <div class="page-content">


        @if (session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>

        @endif

        <h1 class="title_deg">All Posts</h1>


        <table class="table_deg">
            <tr>
                <th>Post Title</th>
                <th>Description</th>
                <th>Post by</th>
                <th>Post Status</th>
                <th>Usertype</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach ($post as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->post_status}}</td>
                <td>{{$post->usertype}}</td>
                <td><img class="image_deg" src="postimage/{{$post->image}}" alt=""></td>
                <td><a href="{{url('delete_post',$post->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this Post?')">Delete</a></td>
                <td><a href="{{url('edit_page',$post->id)}}" class="btn btn-success">edit</a></td>
            </tr>
            @endforeach
        </table>


      </div>
     @include('admin.footer')
    </div>
  </body>
</html>

