

                        <form >

                          <div class="row " style="background-color: #6c757da8">
                            <div class="col-md-4 col-lg-4">
                             <label for="first-disabled" class="p-1">{{ __('Leaving From') }}</label>
                             <select   id="first-disabled" class=" selectpicker form-control" data-hide-disabled="false"
                             data-live-search="true" name="From" >
                             <option value="" selected>{{ __('select a city') }}</option>
                             <option value="02">Douala</option>
                             <option value="03">Bafoussam</option>
                             <option value="04">Buea</option>
                             <option value="05">Bamenda</option>
                             <option value="06">Garoua</option>
                         </select>
                     </div>

                     <div class="col-md-4 col-lg-4">
                         <label for="second-disabled-disabled" class="p-1">{{ __('Going To') }}</label>
                         <select   id="second-disabled" class=" selectpicker form-control" data-hide-disabled="false"
                         data-live-search="true" name="To" >
                         <option value="" selected>{{ __('select a city') }}</option>
                         <option value="02">Douala</option>
                         <option value="03">Bafoussam</option>
                         <option value="04">Buea</option>
                         <option value="05">Bamenda</option>
                         <option value="06">Garoua</option>
                     </select>
                 </div>
                 
                 <div class="col-md-4 col-lg-4">
                    <label for="" class="p-1" style="visibility: hidden;">Check</label>
                    <button type="submit" class=" form-control btn roberto-btn btn-primary ">{{ __('Check') }} </button>
                </div>
            </div>
        </form>
