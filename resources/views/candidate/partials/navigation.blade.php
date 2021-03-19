<div class="col-lg-4">
    <div class="avatar-sidebar">
        <h3>Share This Job</h3>
        <div class="avatar-img">
            <img src="{{ auth()->user()->profile_photo_url }}" alt="Image">
            <div class="avatar-mane">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ auth()->user()->candidate->title }}</span>
            </div>
        </div>
        <ul>
            <li>
                <a href="{{ route('candidate.dashboard') }}" @if(Route::currentRouteName() == 'candidate.dashboard') class="active" @endif>Dashboard</a>
            </li>
            <li>
                <a href="{{ route('candidate.profile') }}" @if(Route::currentRouteName() == 'candidate.profile') class="active" @endif>Profile</a>
            </li>
            <li>
                <a href="resume.html">Resume</a>
            </li>
            <li>
                <a href="bookmarks.html">Bookmarks</a>
            </li>
            <li>
                <a href="{{ route('candidate.applied') }}">{{__('Applied Jobs')}}</a>
            </li>
            <li>
                <a href="alert-jobs.html">Alert Jobs</a>
            </li>
            <li>
                <a href="message.html">Message</a>
            </li>
            <li>
                <a href="change-password.html">Change Password</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                >{{__('Log Out')}}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
