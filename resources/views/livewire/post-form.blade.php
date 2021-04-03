<div>
    <form method="post" action="{{ route('job.store') }}">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="company_id">{{__('Company')}}*</label>
                    <input class="form-control" type="text" readonly value="{{ $company->title }}">
                    <input id="company_id" class="form-control" type="hidden" name="company_id" autocomplete="off" required value="{{ $company->id }}">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="title">{{__('Job title')}}*</label>
                    <input id="title" class="form-control" type="text" name="title" autocomplete="off" required value="{{ old('title') }}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="job_type_id">{{__('Job Types')}}*</label>
                    <select id="job_type_id" name="job_type_id" required>
                        @foreach(\App\Models\JobType::get() as $jobType)
                            <option value="{{$jobType->id}}" @if(old('job_type_id') == $jobType->id) selected @endif>{{$jobType->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="deadline">{{__('Application Deadline')}}</label>
                    <div class="input-group date" id="datetimepicker">
                        <input id="deadline" type="text" class="form-control" placeholder="12/11/2021" name="deadline" autocomplete="off" value="{{ old('deadline') ?? now()->add(1, 'day')->format('d/m/Y') }}">
                        <span class="input-group-addon"></span>
                        <i class="bx bx-calendar"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="salary">{{__('Salary')}}</label>
                    <input id="salary" class="form-control" type="text" name="salary" autocomplete="off" placeholder="USD" value="{{ old('salary') }}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="vacancies">{{__('Vacancies')}}*</label>
                    <input id="vacancies" class="form-control" type="number" name="vacancies" autocomplete="off" required min="1" value="1" {{ old('vacancies') }}>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="experience_id">{{__('Experience')}}*</label>
                    <select id="experience_id" name="experience_id" required>
                        @foreach(\App\Models\Experience::get() as $experience)
                            <option value="{{$experience->id}}" @if(old('experience_id') == $experience->id) selected @endif>{{$experience->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="tag">{{__('Tag')}}*</label>
                    <select id="tag" name="tag" required>
                        <option value="1" @if(old('tag') == 1) selected @endif>{{ __('Featured') }}</option>
                        <option value="2" @if(old('tag') == 2) selected @endif>{{ __('Urgent') }}</option>
                        <option value="3" @if(old('tag') == 3) selected @endif>{{ __('Immediate') }}</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="form-group">
                    <label for="country_id">{{__('Country')}}*</label>
                    <select id="country_id" name="country_id" class="country_select2">
                        <option value="">{{__('Select')}}</option>
                        @foreach(\App\Models\Country::orderBy('name')->get() as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="form-group">
                    <label for="department_id">{{__('Department')}}</label>
                    <select id="department_id" name="department_id" class="department_select2">
                        <option value="">{{__('Select')}}</option>
                        @foreach(\App\Models\Department::with('country')->orderBy('name')->get() as $department)
                            <option value="{{$department->id}}">{{$department->name}}, {{$department->country->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="form-group">
                    <label for="province_id">{{__('Province')}}</label>
                    <select id="province_id" name="province_id" class="province_select2">
                        <option value="">{{__('Select')}}</option>
                        @foreach(\App\Models\Province::with('department.country')->orderBy('name')->get() as $province)
                            <option value="{{$province->id}}">{{$province->name}}, {{$province->department->name}}, {{$province->department->country->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="description">{{__('Job Description')}}*</label>
                    <textarea id="description" name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="how_to_apply">{{__('How to apply')}}*</label>
                    <textarea id="how_to_apply" name="how_to_apply" class="form-control" rows="2" required>{{ old('how_to_apply') }}</textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label>{{__('Required Technologies')}}*</label>
                    <p>
                        @foreach(\App\Models\Technology::get() as $technology)
                            {{__($technology->name)}}
                            <input type="checkbox" name="technologies[]" value="{{ $technology->id }}" class="mr-3" @if( old('technologies') && Arr::exists(old('technologies'), $technology->id -1 ) ) checked @endif>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <button class="default-btn">
                    {{__('Post a Job')}}
                </button>
            </div>
        </div>
    </form>
</div>
