<div class="mobile-nav">
    <div class="container">
        <div class="mobile-menu">
            <div class="logo">
                <a href="{{route('home.index')}}">
                    <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="desktop-nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{route('home.index')}}">
                <img src="{{asset('assets/images/logo.png')}}" alt="logo">
            </a>
            <div class="collapse navbar-collapse mean-menu">
                @include('partials.navigation.guest')
            </div>
        </nav>
    </div>
</div>
<div class="others-option-for-responsive">
    <div class="container">
        <div class="dot-menu">
            <div class="inner">
                <div class="circle circle-one"></div>
                <div class="circle circle-two"></div>
                <div class="circle circle-three"></div>
            </div>
        </div>
        {{-- <div class="container">
            <div class="option-inner">
                <div class="others-option justify-content-center d-flex align-items-center">
                    <div class="get-quote">
                        <a href="{{ route('job.create') }}" class="default-btn">
                            {{__('Post a Job')}}
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
