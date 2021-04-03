<section class="subscribe-area subscribe-area-about-page">
    <div class="container">
        <div class="subscribe-bg">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="subscribe-content">
                        <h2>{{__('Find Your Next Great Job Opportunity!')}}</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="newsletter-form" method="POST" action="{{ route('subscription.store') }}">
                        @csrf
                        <input type="email" class="form-control" placeholder="{{__('Enter email address')}}" name="email" required="" autocomplete="off">
                        <button class="default-btn" type="submit">
                            <span>{{__('Subscribe')}}</span>
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        @endif
                        @if(session()->has('message')) {{ session('message') }} @endif
                        <p>{{__('Join The Newsletter 10,000 Users Already!')}}</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
