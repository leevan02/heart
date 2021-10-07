
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">



      
                                                                                                                 
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

        



        {{-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"> 
         --}}


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">


        @include('css-js.usercss') 
    </head>
    <body>   
      @include('layouts.userNav')

        <div class="container">
          
          <div class="row" style="margin-top:140px">
                @if ($applies->count() > 0)
                <div class="col-md-12">
                    <h4>Pending Applications</h4>
                </div>
                <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                <h4><small>Course Apply for</small></h4>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Cousree</th>
                                <th>Certificate</th>
                                <th>Starting</th>
                                <th class="text-right">Price</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($applies as $info)
                          @if ( $info->status=='pending')

                          
                            <tr>
                                <td class="text-center">{{ $info->id }}</td>
                                <td>{{ $info->course }}</td>
                                <td>{{ $info->certi }}</td>
                                <td>n/a</td>
                                <td class="text-right">${{ $info->price }}</td>
                                <td class="td-actions text-right">


                                  
                                   
                                   <a href="{{ url('view_application',$info->id) }}">

                                        <button rel="tooltip" type="button" class="btn btn-danger btn btn-info btn-just-icon btn-sm" data-toggle="modal" data-target="#exampleModal">                                         <i class="material-icons">person</i>

                                        </button>
                                      
                                   </a>


                                   <a href="{{ url('remove_application',$info->id) }}">
                                      <button type="button" rel="tooltip" 
                                      class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </a>

                                    <a href="{{ url('edit_application',$info->id) }}">
                                      <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                                          <i class="material-icons">edit</i>
                                      </button>
                                    </a>
                                </td>
                            </tr> @endif @endforeach
                            
                        </tbody>
                    </table>
                    </div>
        
                        @else
                        
                        <h1>No Pending Course  </h1>
                                
                            
                            @endif

                            


                            @if ($applies->count() > 0 )

                    <h4><small>Active Course</small></h4>
                    <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th class="text-center">#</th>
                                  <th>Course</th>
                                  <th>Certificate</th>
                                  <th>Starting</th>
                                  <th class="text-right">Price</th>
                                  <th class="text-right">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($applies as $info)
                            @if ( $info->status=='active')
  
                            
                              <tr>
                                  <td class="text-center">{{ $info->course }}</td>
                                  <td>{{ $info->course }}</td>
                                  <td>{{ $info->course }}</td>
                                  <td>{{ $info->course }}</td>
                                  <td class="text-right">${{ $info->price }}</td>
                                  <td class="td-actions text-right">
  
  
                                    
                                     
                                     <a href="{{ url('view_application',$info->id) }}">
  
                                          <div> <button rel="tooltip" type="button" class="btn btn-danger btn btn-info btn-just-icon btn-sm" data-toggle="modal" data-target="#exampleModal">                                         <i class="material-icons">person</i>
  
                                          </button>
                                        </div>
                                     </a>
  
  
                                     <a href="{{ url('remove_application',$info->id) }}">
                                        <button type="button" rel="tooltip" 
                                        class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                                          <i class="material-icons">close</i>
                                        </button>
                                      </a>
  
                                      <a href="{{ url('edit_application',$info->id) }}">
                                        <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                                            <i class="material-icons">edit</i>
                                        </button>
                                      </a>
                                  </td>
                              </tr> @endif @endforeach
                              
                          </tbody>
                      </table>
                      </div>
                      @else
                        
                      <h1>No active Course  </h1>
                              
                          
                          @endif
        
                </div>

 
  

   

  </div>
    
  <footer class="footer text-center ">
      <p>Made with <a href="https://demos.creative-tim.com/material-kit/index.html" target="_blank">Material Kit</a> by Creative Tim</p>
  </footer>
  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  @include('css-js.userjs')
</body>
</html>
