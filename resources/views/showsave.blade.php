<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>HeartOnline</title>
    
    <!-- Bootstrap core CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   --}}
    {{-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> --}}

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">



<style>
body{
                                    background: -webkit-linear-gradient(left, #25c481, #25b7c4);
                                    background: linear-gradient(to right, #25c481, #25b7c4);
                                    font-family: 'Roboto', sans-serif;
                                  }


    
    </style>
    @include('css-js.usercss')
<!-- TemplateMo 557 Grad School https://templatemo.com/tm-557-grad-school -->
  </head>

<body>
    
     <!--header-->
 @include('layouts.userNav')
</br></br>
</br>
</br>
</br>
</br>
</br>
</br>




 

 
  <section class="save">
  

  @if ($dataz->count() > 0)

 <h1 class="save">Saved Course</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0" class="save">
        <thead class="save">
          <tr class="save">
            <th class="save">#</th>
            <th class="save">Title</th>
            <th class="save">Teacher</th>
            <th class="save">Price</th>
            
            <th class="save">Apply</th>
            <th class="save">Action</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody class="save">
            @foreach ( $dataz as $datas)
                
           
          <tr class="save">
            <td class="save">{{ $datas->id }}</td>
            <td class="save">{{ $datas->course->title }} </td>
            <td class="save">{{ $datas->course->teacher }}</td>
            <td class="save">{{ $datas->course->price }}</td>
            <td class="save"><a href="{{ url('apply',$datas->id)}}">Apply now</a></td>

           
     
    
            <td class="save">
          
                <li class="advisor"><a href="{{ url('remove',$datas->id) }}">Remove</a></li>

             
          </tr>@endforeach 
         </tbody>
      </table>
    </div>

  @else
 
   <h1>you havent saved any course </h1>
           
      
    @endif
  </section>
  
  
  <!-- follow me template -->
  <div class="made-with-love">
    Made with
    <i>♥</i> by
    <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
  </div>



 <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Grad School  
          
           | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  @include('css-js.userjs')

</body>
</html>