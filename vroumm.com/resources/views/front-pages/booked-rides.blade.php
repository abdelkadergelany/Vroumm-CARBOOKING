@extends('layouts.dashboard-template')


@section('title')
vroumm-offered-rides
@endsection

@section('bookedride')
text-success
@endsection


@section('content')


  <!-- Page Content  -->
   
             <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-4">
                        
                    
                      
                        <div class="employees">
                            <p class="counter-count">879</p>
                            <p class="employee-p">{{ __('Booked Rides') }}</p>
                        </div>
                    
                    
                    </div>
                    <div class="col-sm-2"></div>
                   </div>



                <div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

                 <div class="container  text-center">

                   <h5>25 Dec 2019 08h:30</h5>
                   <span class="">Douala</span> <span><sub> <i class="p-2 fa fa-long-arrow-right fa-3x" aria-hidden="true"></i> </sub></span> <span class="">Yaounde</span>


                   <div class="row">
                       <a href="#" class=" view-detail-btn"><button class=" btn btn-sm btn-info">{{ __('View Details') }}</button>  </a>
                   </div>

               </div>
           </div>




           <div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

             <div class="container  text-center">

               <h5>25 Dec 2019 08h:30</h5>
               <span class="">Douala</span> <span><sub> <i class="p-2 fa fa-long-arrow-right fa-3x" aria-hidden="true"></i> </sub></span> <span class="">Yaounde</span>


               <div class="row">
                   <a href="#" class=" view-detail-btn"><button class=" btn btn-sm btn-info">View Details</button>  </a>
               </div>

           </div>
       </div>




       <div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

         <div class="container  text-center">

           <h5>25 Dec 2019 08h:30</h5>
           <span class="">Douala</span> <span><sub> <i class="p-2 fa fa-long-arrow-right fa-3x" aria-hidden="true"></i> </sub></span> <span class="">Yaounde</span>


           <div class="row">
               <a href="#" class=" view-detail-btn"><button class=" btn btn-sm btn-info">View Details</button>  </a>
           </div>

       </div>
   </div>





   <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
    </ul>
</nav>









      


@endsection