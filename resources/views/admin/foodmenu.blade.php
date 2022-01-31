<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
        <!-- main-panel ends -->
       
        <div style= "position: relative; top: 60px ;right: -150px ">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" >

                @csrf

                <div style=" padding:20px">
                    <label> Title</label>
                    <input style="color:blue;" type="text" name="title" placeholder="Write a Title" require>
                </div>
                <div style=" padding:20px">
                    <label> Price</label>
                    <input style= "color:blue;" type="num" name="price" placeholder="Write a Price" require>
                </div>
                <div style=" padding:20px">
                    <label> Image</label>
                    <input type="file" name="image"  require>
                </div>
                <div style=" padding:20px">
                    <label> Description</label>
                    <input style="color:blue;" type="text" name="description" placeholder="Write a Descrption" require>
                </div>
                <div>
                 
                    <input style = " color : black ; background:white" type="submit" value = "save">

                </div>

            </form>
            <div>
                <table bgcolor="black">
                    <tr>
                        <th style=" padding:30px">Food Name</th>
                        <th style=" padding:30px">price</th>
                        <th style=" padding:30px">description</th>
                        <th style=" padding:30px">Image</th>
                        <th style=" padding:30px">Action</th>
                        
                    </tr>
                     


                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img hight="200" width="200" src="/foodimage/{{$data->image}}"></td>
                        <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>          




        </div>

</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminsicrpt")
  </body>
</html>