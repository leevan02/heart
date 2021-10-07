<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  @include('css-js.admincss')<style>
    label{
      margin-left:10px;

    }
    

.box {
  box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;}
 
   .image{
    width: 10px;
        height: 10px;
   }



  </style>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
  

        <!-- partial:partials/_navbar.html -->
       @include('layouts.adminNav')

     <div style="position:relative;  right:-70px; " >
             

      

   
        


       
      
              
            <div  class="box" >
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
                        <th scope="col">Teacher</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Creti</th>
                        
                        <th scope="col">schedule</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
            
                  
                    @foreach ($datas as $course )

                        
                    
                    <tbody>
                      <tr>
                        <th scope="row">{{ $course->teacher }}</th>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->description }}</td>
                        <td>${{ $course->price }}</td>
                        <td>{{ $course->certiDegree }}</td>
                        <td>{{ $course->schedule }}</td>
                        <td ><img src="/courseimage/{{ $course->image }}" alt="" class="image"/></td>
                        <td>{{ $course->status }}</td>
                              {{-- @foreach ($user as $course1) --}}
                        <td><a href="{{ url('/editcourse',$course->id) }}">Edit</a><br><br>
                          <a href="{{ url('/deletecourse',$course->id) }}">Delete</a><br><br>
                          </td>
                          {{-- 
                              @endforeach --}}
                      </tr>
                    
            
                      @endforeach
                  </table>
                  


            </div>
    </div>
  </div> 
    <!-- container-scroller -->
  
    <!-- plugins:js -->
    @include('css-js.adminjs')
</body>
</html>
