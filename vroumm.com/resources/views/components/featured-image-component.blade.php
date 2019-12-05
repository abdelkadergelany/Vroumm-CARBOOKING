  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/biglog2.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">{{ $current_page }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">{{ $current_page }}</li>
                                <!-- <li class="breadcrumb-item active" aria-current="page">About Us</li> -->
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>