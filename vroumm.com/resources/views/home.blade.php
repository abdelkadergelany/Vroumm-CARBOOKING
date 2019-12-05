@extends('layouts.app')


@section('title')
vroumm-home
@endsection

@section('featured-image')
@component('components.featured-image-component')

@slot('current_page')
{{ __('About Us') }}

@endslot

@slot('current_page_bread_crumb')
<li class="breadcrumb-item active" aria-current="page">{{ __('Home') }}</li>
@endslot


@endcomponent
@endsection

@section('content')








@endsection
