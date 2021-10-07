<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <style>

.box {
  box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;}
  </style>
  <!-- plugins:css -->
  @include('css-js.admincss')
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
   @include('layouts.adminNav')

  
   <div style="position:relative; top:50px; right:-70px;" class="box">
    <table class="table" style="width:1500px">
       <div>
    @if (session()->has('message'))
    <div class="alret alert-success" id="alert">

      {{ session()->get('message') }}
    </div>
      
    @endif


  </div>
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
             
        @if($user->usertype=="0" && $user->role_id=="1")
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