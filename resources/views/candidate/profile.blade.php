@extends('layouts.candidate-dashboard')

@push('styles')

@endpush

@section('content')

    <div class="col-lg-8">
        <div class="candidates-profile-content">
            <form class="profile-info">
                <h3>Basic Info</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" name="First-Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" name="Last-Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="Email">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control" type="text" name="Phone">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <input class="form-control" type="text" name="Category">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Language</label>
                            <select>
                                <option value="1">English</option>
                                <option value="2">العربيّة</option>
                                <option value="2">Flag Germany</option>
                                <option value="3">Flag Português</option>
                                <option value="4">简体中文</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Job Description</label>
                            <textarea name="message" class="form-control" rows="6"></textarea>
                        </div>
                    </div>
                </div>
                <h3>Address</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <input class="form-control" type="text" name="Country">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Region</label>
                            <input class="form-control" type="text" name="Region">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <input class="form-control" type="email" name="City">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Post Code</label>
                            <input class="form-control" type="text" name="Post-Code">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Full Address</label>
                            <input class="form-control" type="text" name="Category">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="#" class="default-btn">Save</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('scripts')

@endpush
