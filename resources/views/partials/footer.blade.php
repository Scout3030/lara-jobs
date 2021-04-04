
<footer class="footer-area footer-area-three pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-3 col-md-6">
                <div class="single-footer-widget single-bg">
                    <a href="{{ route('home.index') }}" class="logo">
                        <img src="{{asset('assets/images/logo.png')}}" alt="Image">
                    </a>
                    <p>{{\App\Models\GeneralData::get()->first()->footer_text}}</p>
                    <ul class="social-icon">
                        @foreach(\App\Models\GeneralData::get()->first()->social_network as $socialNetwork)
                        <li>
                            <a href="{{$socialNetwork['link']}}">
                                <i class="bx bxl-{{$socialNetwork['icon']}}"></i>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>{{__('Contact')}}</h3>
                    <ul class="address">
                        {{-- <li>
                            <i class="bx bx-phone-call"></i>
                            <span>{{__('Phone')}}:</span>
                            <a href="tel:{{\App\Models\GeneralData::get()->first()->phone_number}}">{{\App\Models\GeneralData::get()->first()->phone_number}}</a>
                        </li> --}}
                        <li>
                            <i class="bx bx-envelope"></i>
                            <span>{{__('Email')}}:</span>
                            <a href="javascript:void(0)">
                                {{\App\Models\GeneralData::get()->first()->email}}
                            </a>
                        </li>
                        <li class="location">
                            <i class="bx bx-location-plus"></i>
                            <span>{{__('Address')}}:</span>
                            {{\App\Models\GeneralData::get()->first()->address}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copy-right-area copy-right-area-three">
    <div class="container">
        <p>
            © 2021 {{env('APP_NAME')}}
            <a href="https://www.fiverr.com/share/1bwWLp" target="_blank">Laravel The Web Artisan</a>
        </p>
    </div>
</div>

<div class="go-top">
    <i class="bx bx-chevrons-up"></i>
    <i class="bx bx-chevrons-up"></i>
</div>
