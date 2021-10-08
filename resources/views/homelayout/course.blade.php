@if (Route::has('login'))
@auth
 
 <section class="section courses" data-section="section4">
    <div class="container-fluid">
     
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Start Learning Today</span>
            <h2 class="mb-4">Pick Your Course</h2>
        </div>
    </div>
    @foreach ( $datas->chunk(3) as $course)
        
   
    <div class="row">
        @foreach ( $course as $course)
       <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
             <a href="#" class="img" style="background-image: url(courseimage/{{ $course->image }});">
                <span class="price">{{ $course->title }}</span>
            </a>
            <div class="text p-4">
                <h3><a href="#">{{ $course->description }}</a></h3>
                <p class="">Advisor <span>{{ $course->teacher }}</span></p>
                <p class="advisor">certi <span>{{ $course->certiDegree }}</span></p>
                <ul class="d-flex justify-content-between">
                   <li><span class="flaticon-shower"></span>{{ $course->schedule }}</li>
                   <li><span class="flaticon-shower"></span>{{ $course->status }}</li>


                   <li class="price">${{ $course->price }}</li>
                   <form class="" method="post" action="{{ url('/save') }}">
                     @csrf
                    <input type="hidden" name="course_id" value="{{ $course->id }}">

                     <li class="advisor">
                       <a href="{{ url('/save') }}" onclick="event.preventDefault();
                        this.closest('form').submit();">
                         save
                      </a>
                        
                    </li>

                   </form>
               </ul>
           </div>
       </div>
       
   </div> @endforeach


 

  
</div>@endforeach
</div>
</div>
</div>

    </div>
  </section>
  @else

  @if (Route::has('register'))

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
     
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Start Learning Today</span>
            <h2 class="mb-4">Pick Your Course</h2>
        </div>
    </div>
    @foreach ( $datas->chunk(3) as $course)
        
   
    <div class="row">
        @foreach ( $course as $course)
       <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
             <a href="{{ url('/login') }}" class="img" style="background-image: url(courseimage/{{ $course->image }});">
                <span class="price">{{ $course->title }}</span>
            </a>
            <div class="text p-4">
                <h3><a href="{{ url('/login') }}">{{ $course->description }}</a></h3>
                <p class="advisor">Advisor <span>{{ $course->teacher }}</span></p>
                <p class="advisor">certi <span>{{ $course->certiDegree }}</span></p>
                <ul class="d-flex justify-content-between">
                   <li><span class="flaticon-shower"></span>{{ $course->schedule }}</li>
                   <li><span class="flaticon-shower"></span>{{ $course->status }}</li>

                   <li class="price">${{ $course->price }}</li>
               </ul>
           </div>
       </div>
       
   </div> @endforeach


 

  
</div>@endforeach
</div>
</div>
</div>

    </div>
  </section>

  @endauth
  @endif
  @endif