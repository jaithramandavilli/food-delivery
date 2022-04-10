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
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
             @csrf
            <div>
                <label>Title</label>
                <input style="color:blue" type="text" name="Title" value="{{$data->Title}}" required>
            </div> 
            <div>
                <label>Price</label>
                <input style="color:blue" type="num" name="Price"  value="{{$data->Price}}"   required>
            </div> 
        
            <div>
                <label>Description</label>
                <input style="color:blue" type="text" name="Description" value="{{$data->Description }}"  required>
            </div> 

            <div>
                <label>Old Image</label>
                <img height="200" width="200" src="/foodimage/{{$data->Image}}">
            </div>
            <div>
                <label>New Image</label>
                <input style="color:blue" type="file" name="Image"  required>
            </div>  
            <div>
              
                <button><input style="color:black;background-color:azure" type="submit" value="Save"></button>
            </div> 
        </form>

      <div>
    </div>
       @include("admin.adminscript")


  </body>
</html>