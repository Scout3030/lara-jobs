<div class="partner-area partner-area-three pb-100">
    <div class="container">
        <div class="section-title">
            <span>{{__('Popular Jobs')}}</span>
            <h2>{{__('Top Hiring Company')}}</h2>
        </div>
        <div class="partner-bg">
            <div class="row">
                <div class="partner-slider owl-carousel owl-theme">
                    @forelse($topCompanies as $topCompany)
                    <div class="partner-item">
                        <a href="#">
                            <img src="{{$topCompany->user->profile_photo_url}}" alt="{{$topCompany->title}}">
                        </a>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
