<div class="logo">
    <img src="{{asset('images/logo.svg')}}" class="img-fluid" alt="">
</div>
<div class="status-bar">
    <a href="{{ URL::to('/messages') }}" class="item">
        <i class="fas fa-envelope"></i>
        <span class="badge badge-light">9</span>
    </a>
    <div class="item">
        <div class="btn-group dropleft">
            <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell"></i>
                <span class="badge badge-light">9</span>
            </div>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Profile</a>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="btn-group dropleft">
            <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <hr>
                <a class="dropdown-item" href="{{ URL::to('/logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>