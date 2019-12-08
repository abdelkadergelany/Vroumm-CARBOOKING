@extends('layouts.dashboard-template')


@section('title')
vroumm-Profile
@endsection


@section('profile')
text-success
@endsection

@section('content')


  <!-- Page Content  -->
   
               
                    <form action="#">
                        <h3>Personal Informations</h3>
                        <div class="form-row">
                            <div class="col-xl">
                                <label for="fname">
                                    Fisrt Name
                                </label>
                                <div class="form-holder">

                                    <input id="fname" value="Aly Abdelkader"  type="text" 
                                    class=" form-control">
                                </div>
                            </div>

                            <div class="col-xl">
                                <label for="lname">
                                    Last Name
                                </label>
                                <div class="form-holder">

                                    <input id="lname" value="Gelany" type="text" class="form-control">
                                </div>
                            </div>




                        </div><br>




                        <div class="form-row ">
                            <div class="col-xl">
                                <label for="city">
                                    City
                                </label>
                                <div class="form-holder">

                                    <input id="city" value="Yaounde"  type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl">
                                <label for="quater">
                                    Quater
                                </label>
                                <div class="form-holder">

                                    <input value="Tradex Emmana"  type="text" class="form-control " id="quater">
                                </div>
                            </div>
                        </div><br>



                        <div class="form-row ">
                            <div class="col-xl">
                                <label for="idnum">
                                    Id Card Number
                                </label>
                                <div class="form-holder">

                                    <input id="idnum"  value="1153428" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl">
                                <label for="driving">
                                    Driving Licence
                                </label>
                                <div class="form-holder">

                                    <input  value="5fA1552" type="text" class="form-control "  id="driving">
                                </div>
                            </div>
                        </div><br>



                        <div class="form-row ">
                            <div class="col-xl">
                                <label for="email">
                                    email
                                </label>
                                <div class="form-holder">

                                    <input id="email" value="gelany740@gmail.com" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl">
                                <label for="phone">
                                    Phone
                                </label>
                                <div class="form-holder">

                                    <input  value="698154587" type="tel" class="form-control "  id="phone">
                                </div>
                            </div>
                        </div><br>



                        <div class="row">

                            <div class="col-sm-4">
                                <label for="DOB">
                                    Date Of Birth
                                </label>
                                <div class="form-group">

                                   
                                        
                                         <input id="DOB" type="text" class="  form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                                     
                               


                                 <!--  <input  value="Male" min="18" value="22" type="number" class="form-control"> -->
                             </div>
                         </div>
                         <div class="col-sm-4">
                            <label for="sex">
                                Gender
                            </label>
                            <div class="form-group">
                                <select id="sex" class="form-control" >
                                    <option >Male</option>
                                    <option  >Female</option>
                                </select>

                            </div>
                        </div>
                         <div class="col-sm-4">
                            <label for="sex">
                                {{__('Whatssap number') }}
                            </label>
                            <div class="form-group">
                                <input placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone" name="phone2"   type="tel" class="form-control " >

                            </div>
                        </div>




                    </div><br>

                    <a href="#" class="  view-detail-btn"><input type="submit" value="Modify" class="btn form-control  btn-info" id="buttonAdd"> </a>

                </form>









      


@endsection