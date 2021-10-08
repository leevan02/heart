<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>HeartOnline</title>
    
    <!-- Bootstrap core CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   --}}
    {{-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> --}}

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link href="{{ asset('css/apply.css') }}" rel="stylesheet">



    @include('css-js.usercss')
<!-- TemplateMo 557 Grad School https://templatemo.com/tm-557-grad-school -->
  </head>

<body>
    


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  @include('css-js.userjs')

</body>
<form action="{{ url('/edited_application',$application->id) }}" method="post" enctype="multipart/form-data">   
  @csrf


<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
      <div class="col-md-3 border-right">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

            <img class="rounded-circle mt-5" id="profileImage" width="150px"
 id="profileImage" src="/applicantP/{{ $application->pimage }}"
 />
            <input id="imageUpload" type="file" 
                name="pimage"   id="pimage" value="{{ $application->pimage }}" capture>
            </div>
      </div>
      {{-- @foreach ($course as $course )
        
      
      <input type="hidden" name="course_id" value="{{ $course->id }}">
@endforeach --}}
    
      <div class="col-md-5 border-right">
          <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Applicant Details</h4>
              </div>
                             {{-- NAME --}}
              <div class="row mt-2">
                  <div class="col-md-6">
                    <label class="labels">Frist Name</label>
                    <input type="text" class="form-control"  name="fname"
                     value="{{ $application->fname }}">
                    </div>
                  <div class="col-md-6">
                    <label class="labels">Last NAme</label>
                    <input type="text" class="form-control" 
                    value="{{ $application->lname }}" name="lname" >
                  </div>
              </div>

              <div class="row mt-3">

                  <div class="col-md-12"><label class="labels">Email</label>
                    <input type="emailt" class="form-control" 
                     value="{{$application->email}}" name="email">
                  </div>

                  <div class="col-md-12">
                    <label class="labels">Address Line 1</label>
                    <input type="text" class="form-control" 
                    name="address" placeholder="enter address line 1" 
                    value="{{ $application->address }}" >
                  </div>

                  <div class="col-md-12">
                    <label class="labels">Address Line 2</label>
                    <input type="text" class="form-control" placeholder="enter address line 2" 
                     name="address2" value="{{ $application->address2}}">
                  </div>

                  <div class="col-md-12">
                    <label class="labels">Postcode</label>
                    <input type="text" class="form-control" placeholder="enter address line 2" 
                     name="address3" value="{{ $application->address3 }}">
                  </div>

                  <div class="col-md-12">
                    <label class="labels">State</label>
                    <input type="text" class="form-control" placeholder="enter address line 2"
                      name="address4" value="{{ $application->address4 }}">
                    </div>

                  <div class="col-md-12">
                    <label class="labels">Area</label>
                    <input type="text" class="form-control" placeholder="enter address line 2" 
                      name="address5" value="{{ $application->address5 }}">
                  </div>

               
                    <div class="col-md-12 mt-3 ">
                      <label class="mb-3 mr-1" for="gender">Gender: </label>
                        

                         <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>
                        <input type="radio" class="btn-check" name="gender" value="male"  id="female" autocomplete="off" >

                        <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
                         <input type="radio" class="btn-check" name="gender" value="female"  id="secret" autocomplete="off" >

                        <label class="btn btn-sm btn-outline-secondary" value="n/a" for="secret">Secret</label>
                        <div class="valid-feedback mv-up">You selected a gender!</div>
                              <div class="invalid-feedback mv-up">Please select a gender!</div>
                     </div>
  

                  {{-- <div class="col-md-12">
                    <label class="labels">Email ID</label>
                    <input type="text" class="form-control" placeholder="enter email id" 
                    value="{{ old('') }}">
                  </div>

                  <div class="col-md-12">
                    <label class="labels">Education</label>
                    <input type="text" class="form-control" placeholder="education"
                     value="{{ old('') }}">
                    </div>

              </div>
            
              <div class="row ">

                  <div class="col-md-6">
                    <label class="labels">Country</label>
                    <input type="text" class="form-control" placeholder="country" 
                    value="">
                  </div>
                  <div class="col-md-6">
                    <label class="labels">State/Region</label>
                    <input type="text" class="form-control"
                     value="" placeholder="state">
                    </div> --}}

              </div>

              <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="submit">
                  Update Profile
                </button>
              </div>
          </div>

      </div>

    </br> </br>
      <div class="col-md-4">
        
          <div class="label">
            <label class="form-check-label" for="">
              Qualification
            </label>
          <div class="custom-file">
            
            <input type="file" class="custom-file-input" value="{{ $application->qualification }}" id="customFile" name="qualification">
            <label class="custom-file-label" for="customFile">Upload Qualification file</label>
          

            <div class="form-row mt-2">
              <div class="form-group col-md-6">
                <label for="inputCity">School</label>
                <input type="text" name="school"  value="{{ $application->school }}" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Certificate</label>
                     <input type="text" name="certi"  value="{{ $application->certi }}" class="form-control" id="inputCity">
          
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Year</label>
                <input type="text" name="year" class="form-control" value="{{ $application->year }}" id="inputZip">
              </div>
            </div>

         
            <div class="row ">

                  <input type="hidden" class="form-control" name="course"  value="{{ $application->course}}">

                  <input type="hidden" class="form-control" name="price" value="{{$application->year}}" >

                <input type="hidden" name="status" value="{{ $application->status }}">

              <div class="wrapper">

                <h4 class="text-uppercase">Payment Details</h4>
                
                    <div class="form-group"> 
                      <label for="card_holder" class="text-uppercase">name on the card</label>
                       <input type="text" class="form-control" name="card_holder"
                       value="{{ $application->card_holder }}" >
                       </div>
                    <div class="form-group"> 
                      <label for="card" class="text-uppercase">card number</label>
                        <div class="card-number"> 
                          <input type="text" name="card" class="card-no" step="4"
                          value="{{ $application->card }}"  pattern="^[0-9].{15,}"> <span class="">
                             <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-marcus-samuelsson-group-2.png" alt="" width="30" height="30"> 
                            </span> 
                          </div>
                    </div>
                    <div class="d-flex w-100">
                        <div class="d-flex w-50 pr-sm-4">
                            <div class="form-group"> 
                              <label for="expiry" class="text-uppercase">exp.date</label>
                               <input type="text" class="form-control" value="{{ $application->expire }}"
                                 name="expire" > 
                              </div>
                        </div>
                        <div class="d-flex w-50 pl-sm-5 pl-3">
                            <div class="form-group"> 
                              <label for="cvv">CVV</label> 
                              
                               <input type="password" class="form-control pr-5" maxlength="3"
                                name="cvc" value="{{ $application->cvc }}" > 
                              </div>
                        </div>
                    </div>
                    
                  
                
            </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>








</form>
  <button onclick="goBack()">Go Back</button>










<script>
function goBack() {
  window.history.back();
}
$("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});





var cardDrop = document.getElementById('card-dropdown');
var activeDropdown;
cardDrop.addEventListener('click',function(){
  var node;
  for (var i = 0; i < this.childNodes.length-1; i++)
    node = this.childNodes[i];
    if (node.className === 'dropdown-select') {
      node.classList.add('visible');
       activeDropdown = node; 
    };
})



window.onclick = function(e) {
  console.log(e.target.tagName)
  console.log('dropdown');
  console.log(activeDropdown)
  if (e.target.tagName === 'LI' && activeDropdown){
    if (e.target.innerHTML === 'Master Card') {
      document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/2vbqk5lcpi7hjoc/MasterCard_Logo.svg.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Master Card';
    }
    else if (e.target.innerHTML === 'American Express') {
         document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/f5hyn6u05ktql8d/amex-icon-6902.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'American Express';      
    }
    else if (e.target.innerHTML === 'Visa') {
         document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Visa';
    }
  }
  else if (e.target.className !== 'dropdown-btn' && activeDropdown) {
    activeDropdown.classList.remove('visible');
    activeDropdown = null;
  }
}

</script>

@include('sweetalert::alert')

</html>