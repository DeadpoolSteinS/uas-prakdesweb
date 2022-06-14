<div class="top-bar">
    {{-- LOGO --}}
    <div class="logo"><img src= {{ asset('img/logo_1.png')}} alt="" width="40"></div>

    <div class="d-flex align-items-center">
        {{-- search input --}}
        <div class="search">
            <input type="text" name="key" id="search-input" placeholder="Search...">
        </div>

        {{-- profile and dropdown --}}
        <div class="dropdown mx-4" id="profile">
            <img class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" src= {{ asset('img/IMG_20220115_101829.jpg')}} alt="profile-image">
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-profil-modal">Edit Profile</button></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <input class="dropdown-item"  type="submit" value="Logout">
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>