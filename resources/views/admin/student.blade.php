<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  @include('css-js.admincss')
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
   @include('layouts.adminNav')
   <div style="position:relative; top:50px; right:-100px;">
    <table class="table" style="width:1500px">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">cousre</th>
            <th scope="col">action</th>
          </tr>
        </thead>

       
        @foreach ($datas as $user )
             
        @if($user->usertype=="0" && $user->role_id=="2")
        <tbody>
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->id }}</td>
            <td><a href="{{ url('/deleted',$user->id) }}">Delete</a></td>
          </tr>
          @else
          
          @endif

          @endforeach
      </table>
      
     
     
   </div>


    </div>

   <!-- plugins:js -->
  @include('css-js.adminjs')
 
</body>

</html>