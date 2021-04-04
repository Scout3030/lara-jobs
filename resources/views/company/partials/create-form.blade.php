<div>
    <form method="post" action="{{ route('company.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="title">{{__('Company title')}}*</label>
                    <input id="title" class="form-control" type="text" name="title" autocomplete="off" required value="{{ old('title') }}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label for="website_url">{{__('Website')}}</label>
                    <input id="website_url" class="form-control" type="text" name="website_url" autocomplete="off" value="{{ old('website_url') }}">
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="choose-img">
                    <label for="logo">{{ __('Select image') }}:</label>
                    <input type="file" id="logo" name="logo" accept="image/*">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label for="biography">{{__('Biography')}}*</label>
                    <textarea id="biography" name="biography" class="form-control" rows="5">{{ old('biography') }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <button class="default-btn">
                    {{__('Create')}}
                </button>
            </div>
        </div>
    </form>
</div>
