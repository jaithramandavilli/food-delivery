<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
    <style>
        label{
            display: inline-block;
            width:200px;
        }
        </style>

  </head>
  <body>
    <div class="container-scroller" style="background-color:black">
       @include("admin.navbar")
       
    <div style="position: relative; top:60px; right:-150px" align="center">
        @if(session()->has('message'))
    <div class="alert alert-success">
        
        {{session()->get('message')}}
    </div>
    @endif
        <h1 style="color:whitesmoke">Upload new food items</h1>
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
             @csrf
            <div>
                <label style="padding: 20px;">Title</label>
                <input style="color:blue" type="text" name="Title" placeholder="write a title here " required>
            </div> 
            <div style="padding: 20px;">
                <label>Price</label>
                <input style="color:blue;" type="num" name="Price" placeholder="Price " required>
            </div> 
            <div style="padding: 20px;">
                <label>Description</label>
                <input style="color:blue" type="text" name="Description" placeholder="Description" required>
            </div> 
            <div style="padding: 20px;">
                <label >Image</label>
                <input style="color:blue;" type="file" name="Image"  required>
            </div> 
        
            <div >
              
                <button class="btn btn-success"><input style="font-size:20px" type="submit" value="Save"></button>
            </div> 
        </form>
        <br/>
        <br/>

      <div>
      

          <table bgcolor="black">
              <tr bgcolor="#3498DB" style="padding:30px;border:3px solid white" >
              <th style="padding:30px">Food Item Name</th>
              <th style="padding:30px">Price</th>
              <th style="padding:30px">Description</th>
              <th style="padding:30px">Image</th>
              <th style="padding:30px">Deleteitem</th>
              <th style="padding:30px">Updateitem</th>
              </tr>
              @foreach($data as $data)
              <tr align="center" style="padding:30px;border:3px solid white">
                   <td >{{$data->Title}}</td>
                   <td>{{$data->Price}}</td>
                   <td>{{$data->Description}}</td>
                   <td><img height="200" width="200" src="/foodimage/{{$data->Image}}"></td>
                   <td><a  class="btn btn-warning" href="{{url('/deleteitem',$data->id)}}">Delete</a></td>
                   <td><a class="btn btn-info"  href="{{url('/updateview',$data->id)}}">Update</a></td>
              </tr>
              @endforeach
          </table>
          <br/>
          <br/>
          <br/>
      </div>

    </div>

    </div>

       @include("admin.adminscript")


  </body>
</html>