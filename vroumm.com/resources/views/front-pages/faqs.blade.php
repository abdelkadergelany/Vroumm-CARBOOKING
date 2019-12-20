@extends('layouts.app')


@section('title')
vroumm-About
@endsection

@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
{{ __('FAQS') }}

@endslot

@slot('current_page_bread_crumb')
{{ __('FAQS') }}
@endslot

@endcomponent

@endsection


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12"><br><br><br>

            {!!getFaqs()!!}
            
      <br><br><br>  </div>
        
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
