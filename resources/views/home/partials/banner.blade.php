<section class="banner-area banner-area-three ptb-100">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="banner-content">
                    <h1>{{__('The place for Laravel Jobs')}}</h1>
                    <p>{{__('Jobs around Latin America!')}}</p>
                    <form class="search-job" method="GET" action="{{ route('job.list') }}">
                        <div class="row">
                            <div class="col-lg-9 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="q" class="form-control" id="job-title-2" placeholder="{{__('Keyword')}}">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 offset-sm-3 offset-lg-0">
                                <button type="submit" class="default-btn">
                                    <i class="bx bx-search"></i>
                                    {{__('Search Jobs')}}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="total-job-count">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-md-4">
                                <div class="job-count">
                                    <h3><span>{{__('Live Jobs')}}: </span>{{App\Models\JobPost::get()->count()}}</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-md-4">
                                <div class="job-count">
                                    <h3><span>{{__('Companies')}}: </span>{{App\Models\Company::get()->count()}}</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-md-4 offset-sm-3 offset-md-0 offset-lg-0">
                                <div class="job-count">
                                    <h3><span>{{__('New Jobs')}}: </span>{{App\Models\JobPost::where('created_at', '>', Carbon\Carbon::now()->subDays(2))->get()->count()}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
