<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{ asset('css/view_application.css') }}" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="/applicantP/{{ $application->pimage }}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                profile picture
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                                                  Application Profile

                                    </h5>        
                               
                                    <h6>
                                       Applied course: 

                                    </h6>{{$application->course}}
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Address</p>
                            <a href="">Street: {{ $application->address }}</a><br/>
                            <a href="">{{ $application->address2 }}</a><br/>
                            <a href="">{{ $application->address3 }}</a><br/>
                            <a href="">{{ $application->address4 }}</a><br/>
                            <a href="">{{ $application->address5 }}</a>
                            <p>Card Info</p>
                            <a href="">Card holder :{{ $application->card_holder }}</a><br/>
                             <a href="">card number:{{ $application->card }}</a><br/>
                              
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $application->id }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $application->fname }} {{$application->lname}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $application->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $application->gender }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Qualification</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $application->school }} | {{ $application->certi }} | {{ $application->year }}</p>
                                            </div>
                                        </div>
                            </div>


                            </div>
                        </div>                            <a href="javascript:history.back()">Back</a>

                    </div>
                </div>
            </form>           
        </div>