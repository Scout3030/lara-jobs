<ul class="navbar-nav m-auto">
    <li class="nav-item">
        <a href="{{ route('job.index') }}" class="nav-link active">
            {{__('Jobs')}}
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('company.index') }}" class="nav-link">
            {{__('Employers')}}
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('candidate.dashboard') }}" class="nav-link">
            {{__('Dashboard')}}
        </a>
    </li>
</ul>
