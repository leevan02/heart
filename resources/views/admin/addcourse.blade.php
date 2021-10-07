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
   



  </style>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
  

        <!-- partial:partials/_navbar.html -->
       @include('layouts.adminNav')

     <div style="position:relative;  right:-100px; width:990px">
              <form action="{{ url('/uploadcourse') }}" method="POST" enctype="multipart/form-data" style="width:600px">
                 @csrf
                  <div class="form-row">
                        <div class="form-group col-sm-9">
                          <label for="title" class="col-sm-2 col-form-label" name="title">Titile</label>
                              <input type="text" class="form-control" id="title" name="title" placeholder="Enter A Title Here ">
                            </div>
                      

                      <div class="form-group col-sm-9">
                          <label for="description" class="col-sm-2 col-form-label">Description</label>
                              <input type="text" class="form-control" name="description"id="description" placeholder="Enter A Descriptiion Here">
                      </div>
                  </div>


                      <div class="form-group row">
                          <label for="teacher" class="col-sm-2 col-form-label" name="teacher">Teacher</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="teacher" name="teacher" placeholder="Enter The Teacher Name ">
                            </div>
                      </div>

                      <div class="form-group row">
                        <label for="certiDegree" class="col-sm-2 col-form-label">certiDegree</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="certiDegree"id="certiDegree" placeholder="Enter A certiDegree Here">
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="schedule	" class="col-sm-2 col-form-label">schedule	</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="schedule"id="schedule	" placeholder="Enter A schedule	 Here">
                          </div>
                      </div>


                      <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Price	</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="price"id="price" placeholder="Enter A Price Here">
                          </div>
                      </div>

                      <div class="dropdown show  " style="margin-top:78px;">
                        <select class="form-select form-select-lg mb-3" name="status" aria-label=".form-select-lg example">
                          <option selected value="">status</option>
                          <option  value="active">active</option>
                          <option  value="pending">pending</option>
                          <option  value="available">available</option>
                        </select>
                      </div>


                      <br> <br><br> <br>


                      <div class="custom-file">

                        <input type="file" class="custom-file-input" id="customFile" name="image"  required >
                        <label class="custom-file-label" for="customFile">Choose image file</label>
                      </div>

                      <br> <br><br> <br>

                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                      </div>
                      
                    
                  </div>



              </form>

      

   
        


       
      
            
                  


            </div>
    </div>
  </div> 
    <!-- container-scroller -->
  
    <!-- plugins:js -->
    @include('css-js.adminjs')
</body>
</html>
