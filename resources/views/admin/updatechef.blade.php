<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
    
  </head>
  <body>
    <div class="container-scroller">
    
       @include("admin.navbar")

       <div style="position: relative; top:60px; right:-150px">
        <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
             @csrf
            <div>
                <label>Name</label>
                <input style="color:blue" type="text" name="name" value="{{$data->name}}" required>
            </div> 
            <div>
                <label>Speciality</label>
                <input style="color:blue" type="text" name="Speciality"  value="{{$data->Speciality}}"  required>
            </div> 
        
            <div>
                <label>Old Image</label>
                <img height="300" width="300" src="/chefimage/{{$data->image}}">
            </div>
            <div>
                <label>New Image</label>
                <input style="color:blue" type="file" name="image"  required>
            </div>  
            <div>
              
                <button><input style="color:black;background-color:azure" type="submit" value="Update Chef"></button>
            </div> 
        </form>

      <div>
    </div>
       @include("admin.adminscript")


  </body>
</html>