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
     
      color:blue;

    }

   
   



  </style>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
   @include('layouts.adminNav')

        <!-- partial:partials/_navbar.html -->
      

     <div  style="position:relative;  right:-100px; ">
            
        {{-- <form action="{{ url('/approved_applicant',$approve->id) }}" method="POST" enctype="multipart/form-data" style="width:990px">
            @csrf
             <div class="form-row ">
                 
                         <input type="hidden" class="form-control" id="title" name="email"  value="{{ $approve->email }}" >
                      



                
<div class="form-group col-sm-9  ">
                     <label for="title" class=" inputEmail4" name="title">update Status</label>
                       <div class="col-sm-10">
                 
                 <div class="dropdown show  " style="margin-top:78px;">
                   <select class="form-select form-select-lg mb-3" name="status" aria-label=".form-select-lg example">
                     <option selected value="">{{ $approve->status }}</option>
                     <option  value="active">active</option>
                     <option  value="pending">pending</option>
                   </select>
                 </div>

                 </div>
                 

                  
    
                      <br><br> <br><br> <br>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                      </div>
                    
                  </div>


              </form> --}}

              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

      

   
        


       
      
          
    </div>
  </div>     <br> <br>

                  
    <!-- container-scroller -->
  
    <!-- plugins:js -->
    @include('css-js.adminjs')
</body>
</html>
