

                        <form action="{{ route('find-ride') }}" method="get">@csrf

                          <div class="row " style="background-color: #6c757da8">
                            <div class="col-md-4 col-lg-4">
                             <label for="first-disabled" class="p-1">{{ __('Leaving From') }}</label>
                             <select required  id="first-disabled" class=" selectpicker form-control" data-hide-disabled="false"
                             data-live-search="true" name="From" >
                             <option value="" selected>{{ __('select a city') }}</option>

                             @foreach($city=getCities() as $cit)
                                          <option >{{$cit->name}}</option>
                             @endforeach
                        
                         </select>
                     </div>

                     <div class="col-md-4 col-lg-4">
                         <label for="second-disabled-disabled" class="p-1">{{ __('Going To') }}</label>
                         <select required  id="second-disabled" class=" selectpicker form-control" data-hide-disabled="false"
                         data-live-search="true" name="To" >
                         <option value="" selected>{{ __('select a city') }}</option>
                           @foreach($city=getCities() as $cit)
                                          <option >{{$cit->name}}</option>
                             @endforeach
                     </select>
                 </div>
                 
                 <div class="col-md-4 col-lg-4">
                    <label for="" class="p-1" style="visibility: hidden;">Check</label>
                    <button type="submit" class=" form-control btn roberto-btn btn-primary ">{{ __('Check') }} </button>
                </div>
            </div>
        </form>
