@if (session('message'))
    <div class="alert alert-success">
        {{ session('message')['message'] }}
    </div>
@endif
