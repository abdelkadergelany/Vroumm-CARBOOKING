@extends('layouts.dashboard-template')


@section('title')
vroumm-myCar
@endsection


@section('mycar')
text-success
@endsection


@section('content')


  <!-- Page Content  -->
   
               
                    <h3 class=" text-capitalize">My Cars</h3>
                    <div class="form-row">
                        <div class="col-xl">


                           <div class="container-fluid">
                            <div class=" col-md-12">

                              <div class=" single-room-area  d-flex align-items-center mb-50 wow fadeInUp p-3" data-wow-delay="500ms" style="border-bottom: solid;" >

                               <div class="container  ">



                                  <div class="row">
                                    <div class="col-xs-6">
                                        <figure>
                                            <img src="img/caravatar.png" class="rounded-circle" alt="" width="300" height="300">
                                            <figcaption class="font-weight-bolder"></figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-xs-6  m-auto" >
                                        <span class="text-gray-dark">Modele :</span><h4 class="text-capitalize">Toyota Benz</h4>
                                        <span class="text-gray-dark">Immatriculation :</span><h4 class="text-capitalize">CE82457</h4>
                                        <span class="text-gray-dark">{{ __('Color') }} :</span><h4 class="text-capitalize">Bleu</h4>
                                    </div>
                                   <!--  <div class="col-xs-4" >
                                        <h6><span style="color: #afb4bf;">Arrival:</span><br> <span>22h30mn </span></h6>
                                    </div> -->

                                </div>



                                <div class="row">
                                   <a href="#" class=" view-detail-btn"><button class="btn btn-sm btn-info"
                                    data-title="add" data-toggle="modal" data-target="#add" id="buttonAdd">{{ __('Modify') }}</button>  </a>
                               </div>
                          
                           </div>
                       </div>


                   </div>
               </div>
           </div>




          





              <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                    <form method="POST" action="" enctype="multipart/form-data">
                        
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align text-capitalize" id="Heading">Modify Your Car's information</h4>
                     </div>
                     <div class="modal-body">
                        <div class="form-group">
                          <label for="name" id="editForm">Car's Model: </label>
                    
                           <input class="form-control" type="text"  id="name" name="name" required >
                        </div>
                        <div class="form-group">
                          <label for="name" id="editForm">Immatriculation: </label>
                    
                           <input class="form-control" type="text"  id="name" name="name" required >
                        </div>
                        <div class="form-group">
                          <label for="name" id="editForm">Car's Color: </label>
                    
                           <input class="form-control" type="text"  id="name" name="name" required >
                        </div>
                      
                     </div>
                     <div class="modal-footer ">
                        <input type="submit" class="btn btn-info
                         btn-lg form-control" value="Update"><span class="glyphicon glyphicon-ok-sign" ></span> 
                     </div>
                     </form>
                  </div>
                  <!-- /.modal-content --> 
               </div>
               <!-- /.modal-dialog --> 
            </div>





</div><br>










      


@endsection