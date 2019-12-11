@extends('layouts.dashboard-template')


@section('title')
vroumm-Profile
@endsection


@section('profile')
text-success
@endsection

@section('content')


  <!-- Page Content  -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif






  
    @if ($errors->any())
      <div class="alert alert-danger">
        <p>{{__('please review the form and correct the following errors') }}:</p>
        <ul> 
          @error('departure') <p> {{__('Departure Date is required') }} </p> @enderror
          @error('hour') <p> {{__('Departure time is required') }} </p> @enderror
          @error('lname') <p> {{__('Given names') }} incorrect</p> @enderror
          @error('fname') <p>{{ __('Surname') }} incorrect</p> @enderror
          @error('phone2') <p>{{ __('whatsapp phone number is invalid') }} </p> @enderror
          @error('phone') <p>{{ __('phone number is invalid') }} </p> @enderror
          @error('city') <p>{{__('City') }} incorrect</p> @enderror
          @error('quater') <p>{{__('Quater') }} incorrect</p> @enderror
          @error('idcard') <p>{{ __('Id Card Number') }} incorrect</p> @enderror
          @error('idlicence') <p>{{ __('Driving Licence') }} incorrect</p> @enderror
          @error('dob') <p>{{ __(' Date Of Birth') }} incorrect</p> @enderror
          @error('picktpoint') <p>{{ __('Pick Point') }} incorrect</p> @enderror
          @error('dropoint') <p>{{ __('Drop Point') }} incorrect</p> @enderror
          @error('carmodel') <p>{{ __("Car's Model") }} incorrect</p> @enderror
          @error('color') <p>{{__("Car's Color") }} incorrect</p> @enderror
          @error('kg') <p>{{__('Kg Per person') }} incorrect</p> @enderror
          @error('price') <p>{{__('Price') }} incorrect</p> @enderror
          @error('sites') <p>{{__('Number of sites') }} incorrect</p> @enderror
          @error('To') <p>{{ __('Going To') }} incorrect.&nbsp;{{ __('destination can not be same with departure city') }}</p> @enderror
          
        </ul>
      </div>
      @endif
               
                    <form action="{{ route('profiler') }}" method="POST">@csrf
                        <h3>{{__('Personal Infos') }}</h3>
                        <div class="form-row">
                            <div class="col-xl">
                                <label for="fname">
                                    {{__('Surname') }}
                                </label>
                                <div class="form-holder">
                                    @if($userInfos->FisrtName!=null)
                                    <input name="fname" id="fname" value="{{ $userInfos->FisrtName }}"  type="text"  class=" form-control">
                                    @else
                                     <input name="fname" id="fname"   type="text"  class=" form-control">
                                    @endif

                                    <span class="text-danger">@error('lname') <p> {{__('Surname') }} incorrect</p> @enderror</span>
                                </div>
                            </div>

                            <div class="col-xl">
                                <label for="lname">
                                    {{ __('Given names') }}
                                </label>
                                <div class="form-holder">
                                   @if($userInfos->LastName!=null)
                                    <input name="lname" id="lname" value="{{ $userInfos->LastName }}" type="text" class="form-control">
                                     @else
                                      <input name="lname" id="lname"  type="text" class="form-control">
                                       @endif
                                </div>
                            </div>




                        </div><br>




                        <div class="form-row ">
                            <div class="col-xl">
                                <label for="city">
                                   {{__('City') }}
                                </label>
                                <div class="form-holder">
                                   @if($userInfos->city!=null)
                                    <input name="city" id="city" value="{{ $userInfos->city }}"  type="text" class="form-control">
                                    @else
                                     <input name="city" id="city"   type="text" class="form-control">
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl">
                                <label for="quater">
                                     {{__('Quater') }}
                                </label>
                                <div class="form-holder">
                                     @if($userInfos->quater!=null)
                                    <input name="quater" value="{{ $userInfos->quater }}"  type="text" class="form-control " id="quater">
                                    @else
                                     <input name="quater"   type="text" class="form-control " id="quater">
                                    @endif
                                </div>
                            </div>
                        </div><br>



                        <div class="form-row ">
                            <div class="col-xl">
                                <label for="idnum">
                                     {{ __('Id Card Number') }}
                                </label>
                                <div class="form-holder">
                                     @if($userInfos->IdCard!=null)
                                    <input name="idcard" id="idnum"  value="{{ $userInfos->IdCard }}" type="text" class="form-control">
                                     @else
                                      <input name="idcard" id="idnum"   type="text" class="form-control">
                                     @endif
                                </div>
                            </div>
                            <div class="col-xl">
                                <label for="driving">
                                     {{ __('Driving Licence') }}
                                </label>
                                <div class="form-holder">
                                     @if($userInfos->DriverLicenceNumber!=null)

                                    <input name="idlicence" value="{{ $userInfos->DriverLicenceNumber }}" type="text" class="form-control "  id="driving">
                                     @else
                                      <input name="idlicence"  type="text" class="form-control "  id="driving">
                                      @endif
                                </div>
                            </div>
                        </div><br>



                        <div class="form-row ">
                            <div class="col-xl">
                                <label for="email">
                                    {{__('email') }}
                                </label>
                                <div class="form-holder">

                                    <input disabled  value="{{ Auth::user()->email }}" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl">
                                <label for="phone">
                                    Phone
                                </label>
                                <div class="form-holder">
                                     @if($userInfos->phone1!=null)

                                    <input name="phone" value="{{ $userInfos->phone1 }}" type="tel" class="form-control "  id="phone">
                                     @else
                                       <input name="phone"   type="tel" class="form-control "  id="phone">
                                      @endif
                                </div>
                            </div>
                        </div><br>



                        <div class="row">

                            <div class="col-sm-4">
                                <label for="DOB">
                                    {{ __(' Date Of Birth') }}
                                </label>
                                <div class="form-group">

                                       @if($userInfos->DOB!=null)
                                        
                                         <input id="DOB" type="text" value="{{ $userInfos->DOB }}"  class=" form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" name="dob">
                                          @else
                                          <input id="DOB" type="text" name="dob" class=" form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                                           @endif
                                     
                               


                                 <!--  <input  value="Male" min="18" value="22" type="number" class="form-control"> -->
                             </div>
                         </div>
                         <div class="col-sm-4">
                            <label for="sex">
                                {{__(' Gender') }}
                            </label>
                            <div class="form-group">
                                <select id="sex" class="form-control" name="gender" >
                                     @if($userInfos->sexe!=null)
                                        @if($userInfos->sexe=='Male')

                                         <option  selected>Male</option>
                                         <option  >Female</option>
                                         @endif

                                          @if($userInfos->sexe=='Female')
                                          <option selected >Female</option>
                                          <option  >Male</option>
                                           @endif

                                       @endif


                                       @if($userInfos->sexe==null)
                                       <option value="">Chose your gender</option>
                                    <option >Male</option>
                                    <option  >Female</option>
                                    @endif
                                </select>

                            </div>
                        </div>
                         <div class="col-sm-4">
                            <label for="phone2">

                                {{__('Whatssap number') }}
                            </label>
                            <div class="form-group">
                                @if($userInfos->phoene2!=null)
                                <input value="{{ $userInfos->phone2 }}" placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone2" name="phone2"   type="tel" class="form-control " >
                                @else
                                <input  placeholder="eg: 698261547" pattern="[0-9]{9}" id="phone" name="phone2"   type="tel" class="form-control " >
                                 @endif

                            </div>
                        </div>




                    </div><br>

                    <input type="submit" value="Modify" class="btn form-control  btn-info" id="buttonAdd"> 

                </form>









      


@endsection




@section('morescript')


@include('flashy::message')


@endsection