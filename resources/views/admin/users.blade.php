<!DOCTYPE html>
<head>
    <title>Users</title>
</head>
<body>
    <x-app-layout  >

    </x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include("admin.admincss")
    
      </head>
      <body>
        <div class="container-scroller" style="background-color:black">
        
           @include("admin.navbar")
           
           <div style="position: relative; top:60px; right:-150px">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
            @endif

            <table style="border:5px solid white">
                <tr align="center " bgcolor="green">
                    <th style="padding:30px;border:3px solid white">Name</th>
                    <th style="padding:30px;border:3px solid white">Email</th>
                    <th style="padding:30px;border:3px solid white">Action</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td style="padding: 30px;border:2px solid white">{{$data->name}}</td>
                    <td style="padding: 30px;border:2px solid white">{{$data->email}}</td>

                    @if($data->usertype=="0")
                    <td style="padding: 30px;border:2px solid white"><a class="btn btn-warning" href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                    @else
                    <td style="padding: 30px;border:2px solid white"><a>Admin Cant be Allowed to delete</a></td>
                    @endif
                </tr>
                @endforeach
            </table>
           </div>
        </div>
    
           @include("admin.adminscript")
    
    
      </body>
    </html>
</body>
</html>