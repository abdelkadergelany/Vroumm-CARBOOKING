@extends('layouts.app')


@section('title')
vroumm-contact
@endsection

@section('morefiles')

    
     <link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}"> 
 
@endsection


@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
{{ __('Find a ride') }}

@endslot

@slot('current_page_bread_crumb')
{{ __('Find a ride') }}
@endslot

@endcomponent

@endsection


@section('content')



     <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Single Room Area -->




                    <div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

                       <div class="container  ">


                           <div class="row ">
                               <div  class="col-xs-12">
                                   <span>Driver </span><br>
                                   <figure>
                                      <img src="http://danblackonleadership.info/wp-content/uploads/2015/10/driving-man-760x506.jpg" class="rounded-circle" alt="Cinque Terre" width="70" height="70">
                                      <figcaption>Michele</figcaption>
                                  </figure>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-4">
                                <h6 ><span style="color: #afb4bf;">Departure:</span><br> <span>10h30mn</span></h6>
                            </div>
                            <div class="col-xs-4  m-auto" ></div>
                            <div class="col-xs-4" >
                                <h6><span style="color: #afb4bf;">Arrival:</span><br> <span>22h30mn </span></h6>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <h6 ><b>Ngaoundere</b> </h6>
                            </div>
                            <div class="col-xs-4 m-auto" >
                                <sup><i class="fa fa-long-arrow-right fa-3x" aria-hidden="true"></i></sup>
                            </div>
                            <div class="col-xs-4">
                                <h6><b>Bafoussam</b></h6>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-4">
                                <h6 ><span style="color: #afb4bf;">Pick point:</span><br> <span>Olembe </span></h6>
                            </div>
                            <div class="col-xs-4 m-auto" ></div>
                            <div class="col-xs-4">
                                <h6><span style="color: #afb4bf;">Drop point:</span><br> <span>Deido </span></h6>
                            </div>


                        </div>
                        <div class="row">
                            <a href="#" class=" view-detail-btn"><button class="btn btn-sm btn-info">View Details</button>  </a>
                        </div>


                    </div>
                </div>
                <div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

                   <div class="container  ">


                       <div class="row ">
                           <div  class="col-xs-12">
                               <span>Driver </span><br>
                               <figure>
                                  <img src="http://danblackonleadership.info/wp-content/uploads/2015/10/driving-man-760x506.jpg" class="rounded-circle" alt="Cinque Terre" width="70" height="70">
                                  <figcaption>Abdelkader</figcaption>
                              </figure>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-4">
                            <h6 ><span style="color: #afb4bf;">Departure:</span><br> <span>10h30mn</span></h6>
                        </div>
                        <div class="col-xs-4  m-auto" ></div>
                        <div class="col-xs-4" >
                            <h6><span style="color: #afb4bf;">Arrival:</span><br> <span>22h30mn </span></h6>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <h6 ><b>Ngaoundere</b> </h6>
                        </div>
                        <div class="col-xs-4 m-auto" >
                            <sup><i class="fa fa-long-arrow-right fa-3x" aria-hidden="true"></i></sup>
                        </div>
                        <div class="col-xs-4">
                            <h6><b>Bafoussam</b></h6>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-4">
                            <h6 ><span style="color: #afb4bf;">Pick point:</span><br> <span>Olembe </span></h6>
                        </div>
                        <div class="col-xs-4 m-auto" ></div>
                        <div class="col-xs-4">
                            <h6><span style="color: #afb4bf;">Drop point:</span><br> <span>Deido </span></h6>
                        </div>


                    </div>
                    <div class="row">
                       <a href="#" class=" view-detail-btn"><button class="btn btn-sm btn-info">View Details</button>  </a>
                   </div>


               </div>
           </div>








           <div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

               <div class="container  ">


                   <div class="row ">
                       <div  class="col-xs-12">
                           <span>Driver </span><br>
                           <figure>
                              <img src="http://danblackonleadership.info/wp-content/uploads/2015/10/driving-man-760x506.jpg" class="rounded-circle" alt="Cinque Terre" width="70" height="70">
                              <figcaption>Abdelkader</figcaption>
                          </figure>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-4">
                        <h6 ><span style="color: #afb4bf;">Departure:</span><br> <span>10h30mn</span></h6>
                    </div>
                    <div class="col-xs-4  m-auto" ></div>
                    <div class="col-xs-4" >
                        <h6><span style="color: #afb4bf;">Arrival:</span><br> <span>22h30mn </span></h6>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <h6 ><b>Ngaoundere</b> </h6>
                    </div>
                    <div class="col-xs-4 m-auto" >
                        <sup><i class="fa fa-long-arrow-right fa-3x" aria-hidden="true"></i></sup>
                    </div>
                    <div class="col-xs-4">
                        <h6><b>Bafoussam</b></h6>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-4">
                        <h6 ><span style="color: #afb4bf;">Pick point:</span><br> <span>Olembe </span></h6>
                    </div>
                    <div class="col-xs-4 m-auto" ></div>
                    <div class="col-xs-4">
                        <h6><span style="color: #afb4bf;">Drop point:</span><br> <span>Deido </span></h6>
                    </div>


                </div>
                <div class="row">
                 <a href="#" class=" view-detail-btn"><button class="btn btn-sm btn-info">View Details</button>  </a>
             </div>


         </div>
     </div>




     <div class="single-room-area booking-container d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" >

       <div class="container  text-center">

         <h5>25 Dec 2019 08h:30</h5>
         <span class="p-3">Douala</span> <span><sub> <i class="fa fa-long-arrow-right fa-3x" aria-hidden="true"></i> </sub></span> <span class="p-3">Yaounde</span>


        <div class="row">
         <a href="#" class=" view-detail-btn"><button class=" btn btn-sm btn-info">View Details</button>  </a>
     </div>

 </div>
</div>





<!-- Pagination -->
<nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
    </ul>
</nav>
</div>

<div class="col-12 col-lg-4">
    <!-- Hotel Reservation Area -->
    <div class="hotel-reservation--area mb-100">
        <form action="#" method="post" class="p-3" style="background-color: lightgrey">
            <div class="form-group mb-30">
                <label for="checkInDate">Filter by Date</label>
                
                    <div class="row no-gutters">
                        <div class="col-12">
                            <input placeholder="yyyy-mm-dd" type="text" class=" inputer form-control datepicker-here" data-language='en' data-date-format="yyyy-mm-dd" id="Departure-Date">
                        </div>
                       
                    </div>
                
            </div>
            <div class="form-group mb-30">
                <label for="guests">Filter by Cities</label>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="first-disabled">From</label>
                       <select  id="first-disabled" class="inputer selectpicker form-control" data-hide-disabled="false"
                   data-live-search="true" name="From" >
                   <option >Yaounde</option>
                   <option>Douala</option>
                   <option>Bafoussam</option>

               </select>
                   </div>
                   <div class="form-group col-6">
                     <label for="second-disabled">To</label>
                  <select  id="second-disabled" class="inputer selectpicker form-control" data-hide-disabled="false"
                   data-live-search="true" name="From" >
                   <option >Yaounde</option>
                   <option>Douala</option>
                   <option>Bafoussam</option>

               </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn roberto-btn w-100">Apply Filter</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>







@component('components.video-area-component')
@slot('pictname')
paralax.jpg
@endslot
@endcomponent


@component('components.paralax-form-component')

@endcomponent




@endsection


@section('morescript')



<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script src="{{asset('js/datepicker.js')}}"></script>
<script src="{{asset('js/datepicker.en.js')}}"></script>


@endsection