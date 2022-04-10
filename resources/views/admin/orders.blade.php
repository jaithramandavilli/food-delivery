<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">
    
       @include("admin.navbar")
       <div class="container">

       <form action="{{url('/search')}}" method="get">
        @csrf
         <input type="text" name="search" style="color:blue">
         <input type="submit" value="Search" class="btn btn-success" style="margin-bottom:90px;margin-top:90px;padding:10px;margin-left:20px">
       </form>

       

       <table align="center">
           <tr align="center" style="background-color:blue;border:3px solid white">
            <td style="padding:30px">Name</td>
            <td style="padding:30px">Phone</td>
            <td style="padding:30px">Address</td>
            <td style="padding:30px">FoodName</td>
            <td style="padding:30px">Price</td>
            <td style="padding:30px">Quantity</td>
            <td style="padding:30px">Total Price</td>
            <td style="padding:30px">Status</td>
            <td style="padding:30px">Action</td>
            
           </tr>
           @foreach($data as $data)
           <tr align="center" style="background-color: black;border:3px solid white">
              <td style="padding:30px">{{$data->name}}</td>
              <td style="padding:30px">{{$data->phone}}</td>
              <td style="padding:30px">{{$data->address}}</td>
              <td style="padding:30px">{{$data->foodname}}</td>
              <td style="padding:30px">{{$data->price}}</td>
              <td style="padding:30px">{{$data->quantity}}</td>
              <td style="padding:30px">{{$data->price*$data->quantity}}</td>
              <td style="padding:30px">{{$data->status}}</td>
              <td>
                <a class="btn btn-success" href="{{url('updatestatus',$data->id)}}">Delivered</a>
           </td>
              <td>

                
           </td>
              

           </tr>
           @endforeach
       </table>
    </div>
    </div>
       @include("admin.adminscript")


  </body>
</html>