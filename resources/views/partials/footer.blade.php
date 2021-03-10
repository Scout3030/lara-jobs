
<footer class="footer-area footer-area-three pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
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
                        <li>
                            <i class="bx bx-phone-call"></i>
                            <span>{{__('Phone')}}:</span>
                            <a href="tel:+1-(514)-7939-357">{{\App\Models\GeneralData::get()->first()->phone_number}}</a>
                        </li>
                        <li>
                            <i class="bx bx-envelope"></i>
                            <span>{{__('Email')}}:</span>
                            <a href="javascript:void(0)">
                                <span class="__cf_email__">{{\App\Models\GeneralData::get()->first()->email}}</span>
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
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Helpful Resources</h3>
                    <ul class="import-link">
                        <li>
                            <a href="#">Create Account</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Site Map</a>
                        </li>
                        <li>
                            <a href="#">Terms of Use</a>
                        </li>
                        <li>
                            <a href="#">Privacy Centre</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Job Seekers</h3>
                    <ul class="import-link">
                        <li>
                            <a href="#">Create Account</a>
                        </li>
                        <li>
                            <a href="#">Browse Jobs</a>
                        </li>
                        <li>
                            <a href="#">Upload CV</a>
                        </li>
                        <li>
                            <a href="#">Company Profile</a>
                        </li>
                        <li>
                            <a href="#">International Jobs</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
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
            <a href="https://www.fiverr.com/share/1bwWLp" target="_blank">Roberth Rodriguez</a>
        </p>
    </div>
</div>


<div class="go-top">
    <i class="bx bx-chevrons-up"></i>
    <i class="bx bx-chevrons-up"></i>
</div>
