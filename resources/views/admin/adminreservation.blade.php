<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller" style="background-color:black">
       @include("admin.navbar")
    <div style="position: relative; top:60px; right:-100px">

      <table  >
         <tr bgcolor=" #8E44AD " style="padding:30px;border:3px solid white">
             <th style="padding:30px;border:3px solid white">Name</th>
             <th style="padding:30px;border:3px solid white">Email</th>
             <th style="padding:30px;border:3px solid white">Phone</th>
             <th style="padding:30px;border:3px solid white">No. of Guests</th>
             <th style="padding:30px;border:3px solid white">Time</th>
             <th style="padding:30px;border:3px solid white">Date</th>
             <th style="padding:30px;border:3px solid white">Message</th>

         </tr>
         @foreach($data as $data)
         <tr align="center" style="padding:30px;border:3px">
             <td style="padding: 30px;border:1px solid white">{{$data->name}}</td>
             <td style="padding: 30px;border:1px solid white">{{$data->email}}</td>
             <td style="padding: 30px;border:1px solid white">{{$data->phone}}</td>
             <td style="padding: 30px;border:1px solid white" >{{$data->guest}}</td>
             <td style="padding: 30px;border:1px solid white">{{$data->time}}</td>
             <td style="padding: 30px;border:1px solid white">{{$data->date}}</td>
             <td style="padding: 30px;border:1px solid white">{{$data->message}}</td>
             
         </tr>
         @endforeach


      </table>

    </div>


    </div>
       @include("admin.adminscript")


  </body>
</html>