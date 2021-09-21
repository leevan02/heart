<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
        <a class="" href="{{ url('/') }}"><img src="{{ asset('admin/images/logo.svg ') }}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{ asset('admin/images/logo-mini.svg') }}" alt="logo"/></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-sort-variant"></span>
        </button>
      </div>  
    </div>   
    
    <x-app-layout>
 
  </x-app-layout>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
      
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/AdminHome') }}">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Admin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-circle-outline menu-icon"></i>
            <span class="menu-title">User</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ url('/teacher') }}">Teacher</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ url('/student') }}">Student</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/course') }}">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Course</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/table') }}">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Tables</span>
          </a>
        </li>
       
      </ul>
    </nav>