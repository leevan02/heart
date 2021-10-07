<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
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

    .save{
justify-content:center;
    }
      </style>
  <!-- plugins:css -->
  @include('css-js.admincss')
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
   @include('layouts.adminNav')
   <div style="position:relative;  right:-70px;">
    
  

        @if ($dataz->count() > 0)
      
       <h1 class="save"></h1>
       <div>
        @if (session()->has('message'))
        <div class="alret alert-success" id="alert">
  
          {{ session()->get('message') }}
        </div>
          
        @endif
  
  
      </div>
       <table id="datatable" class="table box"  style="width:1500px" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>

            
            <th scope="col">Applicant</th>
             <th scope="col">Email</th>

            <th scope="col">Course</th>
            <th scope="col">Creti</th>

            <th scope="col">Price</th>
            
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tfoot class="thead-dark">
          <tr>
            <th scope="col">id</th>

            <th scope="col">Applicant</th>
            <th scope="col">Email</th>
            <th scope="col">Course</th>
            <th scope="col">Creti</th>

            <th scope="col">Price</th>
            
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </tfoot>

      
       
        
        <tbody> @foreach ($dataz as $course )

            @if($course->status =='pending')


          <tr>
            <th>{{$course->id }}</th>

            <td scope="row">{{$course->fname }} {{$course->lname }}</td>
            <td>{{$course->email }}</td>

            <td>{{$course->course }}</td>   
            <td>{{$course->creti}}</td>

            <td>${{$course->price}}</td>
            <td>{{$course->status }}</td>
            <td>
              <a herf="" class="btn btn-success update">
                Update
              </a>
              <a herf="" class="btn btn-danger delete">
                Delete
              </a>
            {{-- <a href="">Delete</a><br><br><a href="{{ url('approve_applicant',$course->id) }}">update</a> --}}
              </td>
             
          </tr>
        @endif

          @endforeach
        </tbody>
      </table>
      
{{-- <----------------------------------------------MODAL--------------------------------> --}}

     <!-- Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('/delete_applicant') }}" id="updateform" method="post" >
          @csrf
          @method('POST')
        <div class="modal-body">
          {{-- <input type="hidden" name="fname" id="fname" class="form-control" >
          <label>Application Name</label> --}}

            {{-- <input type="text" name="lname" id="lname" class="form-control" >
            <input type="hidden" name="course" id="course" class="form-control" >
            <input type="hidden" name="certi" id="certi" class="form-control" >
            <input type="hidden" name="price" id="price" class="form-control" > --}}

            <input type="hidden" name="email" id="email" class="form-control" >

          <label>Status Update </label>
          <select id="status" name="status" class="form-control">
            <option selected id="status" value="pending">pending</option>
            <option   value="active">Approve</option>
            <option   value="denied">Denied</option>

          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">update status</button>
        </div>
      </form>
      </div>
    </div>
  </div>
{{-- <------------------------------------------------------MODAL End----------------------------------------------------> --}}
      















{{-- <----------------------------------------------Delete MODAL--------------------------------> --}}

     <!-- Modal -->
     <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Applicant</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ url('/delete_applicant') }}" id="deleteform" method="get" >
            @csrf
            @method('DELETE')
          <div class="modal-body">
            <input type="hidden" name="_method" value="DELETE" >
  
              {{-- <input type="text" name="lname" id="lname" class="form-control" >
              <input type="hidden" name="course" id="course" class="form-control" >
              <input type="hidden" name="certi" id="certi" class="form-control" >
              <input type="hidden" name="price" id="price" class="form-control" > --}}
                <p> Are you sure want to delete this applicant?!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Yes Delete</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  {{-- <------------------------------------------------------Delete MODAL End----------------------------------------------------> --}}
        






        @else
       
         <h1>No Applicant have be applied  </h1>
                 
            
          @endif
        
      
     
     
   </div>


    </div>

   <!-- plugins:js -->
  @include('css-js.adminjs')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript">

  $(document).ready(function(){

    var table= $('#datatable').DataTable();

    //update table
    table.on('click','.update',function(){

      $tr= $(this).closest('tr');
      if ($($tr).hasClass('child')) {
          $tr=$tr.prev('.parent');
      }

      var data = table.row($tr).data();
      console.log(data);

      $('#fname').val(data[1]);
      $('#lname').val(data[1]);
      $('#email').val(data[2]);

      $('#course').val(data[3]);
      $('#certi').val(data[4]);

      $('#price').val(data[5]);
      $('#status').val(data[6]);

      $('#updateform').attr('action','/approved_applicant/'+data[0]);
      $('#updateModal').modal('show');
    });
/// End update



//start delete
var table= $('#datatable').DataTable();

    //update table
    table.on('click','.delete',function(){

      $tr= $(this).closest('tr');
      if ($($tr).hasClass('child')) {
          $tr=$tr.prev('.parent');
      }

      var data = table.row($tr).data();
      console.log(data);

      $('#id').val(data[0]);
    

      $('#deleteform').attr('action','/delete_applicant/'+data[0]);
      $('#deleteModal').modal('show');
    });




  });
  
  
  
  
  
  </script>
 
</body>

</html>