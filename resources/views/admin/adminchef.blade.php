<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller" align="center" >
    
       @include("admin.navbar")

       <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div  style="padding: 20px;">
            <label>Name</label>
            <input style="color:blue;" type="text" name="name" required="" placeholder="Enter the name">
        </div>

        <div  style="padding: 20px;">
            <label>Speciality</label>
            <input style="color:blue;" type="text" name="Speciality" required="" placeholder="Enter the Speciality">
        </div>

        <div  style="padding: 20px;">
            
            <input  name="image"  type="file" required="" >
        </div>

        <div >
            <button class="btn btn-success"><input  type="submit" value="Upload"></button>
        </div>
       </form>

       <div>

        <table bgcolor="black">
            <tr bgcolor="#FF5733" style="padding:30px;border:3px solid white">
            <th style="padding:30px">Chef Name</th>
            <th style="padding:30px">Speciality</th>
            <th style="padding:30px">Image</th>
            <th style="padding:30px">Update</th>
            <th style="padding:30px">Delete</th>
            </tr>
            @foreach($data as $data)
            <tr align="center" style="padding:30px;border:3px solid white">
                 <td style="padding:30px;border:1px solid white">{{$data->name}}</td>
                 <td style="padding:30px;border:1px solid white">{{$data->Speciality}}</td>
                 <td style="padding:30px;border:1px solid white"><img height="200" width="200" src="/chefimage/{{$data->image}}"></td>
                 <td style="padding:30px;border:1px solid white"><a   class="btn btn-warning" href="{{url('/updatechef',$data->id)}}">Update</a></td> 
                 <td style="padding:30px;border:1px solid white"><a  class="btn btn-info" href="{{url('/deletechef',$data->id)}}">Delete</a></td> 
             </tr>
            @endforeach 
        </table>
        <br/>
        <br/>
        <br/>
    </div>

    </div>
       @include("admin.adminscript")


  </body>
</html>