@extends('layouts.candidate-dashboard')

@push('styles')

@endpush

@section('content')

    <div class="col-lg-8">
        <div class="candidates-resume-content">
            <form class="resume-info">
                @csrf
                <h3>{{__('Personal Details')}}</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="name">{{__('First Name')}}</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ auth()->user()->name }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="last_name">{{__('Last Name')}}</label>
                            <input id="last_name" class="form-control" type="text" name="last_name" value="{{ old('last_name') ?? auth()->user()->candidate->last_name }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="email">{{__('Email')}}</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ auth()->user()->email }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="phone_number">{{__('Phone Number')}}</label>
                            <input id="phone_number" class="form-control" type="text" name="phone_number" value="{{ old('phone_number') ?? auth()->user()->phone_number }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="birthday">{{__('Date Of Birth')}}</label>
                            <div class="input-group date" id="datetimepicker">
                                <input id="birthday" type="text" class="form-control" placeholder="12/11/1999">
                                <span class="input-group-addon"></span>
                                <i class="bx bx-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="gender">{{__('Gender')}}</label>
                            <select id="gender" class="height" name="gender">
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="marital_status">{{__('Marital status')}}</label>
                            <select id="marital_status" class="height">
                                <option value="1">Married</option>
                                <option value="2">Unmarried</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="nationality">Nationality</label>
                            <select id="nationality">
                                <option value="1">United Kingdom</option>
                                <option value="2">Austria</option>
                                <option value="3">Bahrain</option>
                                <option value="4">Canada</option>
                                <option value="5">Denmark</option>
                                <option value="6">Germany</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="address">{{__('Address Details')}}</label>
                            <textarea id="address" name="message" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <h3>{{__('Career And Application Information')}}</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="objective">{{__('Objective')}}</label>
                            <textarea id="objective" name="message" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>{{__('Present Salary')}}</label>
                            <input class="form-control" type="text" name="present_salary">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>{{__('Expected Salary')}}</label>
                            <input class="form-control" type="email" name="expected_salary">
                        </div>
                    </div>
                </div>
                <h4>Job Level</h4>
                <div class="row mb-30">
                    <div class="col-lg-4 col-sm-6 col-md-3">
                        <label class="single-check">
                            Entry Level
                            <input type="radio" checked="checked" name="radio-1">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-3">
                        <label class="single-check">
                            Mid Level
                            <input type="radio" name="radio-1">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-3">
                        <label class="single-check">
                            Top Level
                            <input type="radio" name="radio-1">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <h4>Job Nature</h4>
                <div class="row mb-30">
                    <div class="col-lg-2 col-sm-6 col-md-3">
                        <label class="single-check">
                            Full Time
                            <input type="radio" checked="checked" name="radio-2">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3">
                        <label class="single-check">
                            Part Time
                            <input type="radio" name="radio-2">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3">
                        <label class="single-check">
                            Contract
                            <input type="radio" name="radio-2">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3">
                        <label class="single-check">
                            Internship
                            <input type="radio" name="radio-2">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3">
                        <label class="single-check">
                            Freelance
                            <input type="radio" name="radio-2">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3">
                        <label class="single-check">
                            Office
                            <input type="radio" name="radio-2">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <h3>Education</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Level of Education</label>
                            <select>
                                <option value="1">Massachusetts</option>
                                <option value="2">Maryland</option>
                                <option value="3">Colorado</option>
                                <option value="4">Vermont</option>
                                <option value="5">Virginia</option>
                                <option value="6">Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Exam / Degree Title</label>
                            <select>
                                <option value="1">SEE</option>
                                <option value="2">M.A.</option>
                                <option value="3">Enginery of CSE</option>
                                <option value="4">Master</option>
                                <option value="5">Associate</option>
                                <option value="6">Graduate</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Major/Group</label>
                            <input class="form-control" type="text" name="Major">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Institute Name</label>
                            <input class="form-control" type="text" name="Institute">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Result</label>
                            <select class="height">
                                <option value="1">First Class</option>
                                <option value="2">Second Class</option>
                                <option value="3">Thread Class</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Marks(%)</label>
                            <input class="form-control" type="text" name="Marks">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Year of Passing</label>
                            <select>
                                <option value="1">2020</option>
                                <option value="2">2021</option>
                                <option value="3">2022</option>
                                <option value="4">2023</option>
                                <option value="5">2024</option>
                                <option value="6">2025</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Duration (Years)</label>
                            <input class="form-control" type="text" name="Duration">
                        </div>
                    </div>
                </div>
                <h3>Experience</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input class="form-control" type="text" name="Company">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Company Business </label>
                            <input class="form-control" type="text" name="Business">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Designation</label>
                            <input class="form-control" type="text" name="Designation">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Department</label>
                            <input class="form-control" type="text" name="Department">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Responsibilities</label>
                            <input class="form-control" type="text" name="Responsibilities">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Company Location</label>
                            <input class="form-control" type="text" name="Location">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Employment Period</label>
                            <select>
                                <option value="1">2020</option>
                                <option value="2">2021</option>
                                <option value="3">2022</option>
                                <option value="4">2023</option>
                                <option value="5">2024</option>
                                <option value="6">2025</option>
                            </select>
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
