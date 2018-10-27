@if(Auth::user()->isAdmin())
<div class="sidenav">

    <a href="/admin">Dashboard</a>
    <button class="dropdown-btn">Users
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="/admin/users">Users</a>
        <a href="/admin/users/create">Create User</a>
    </div>
    <a href="/admin/cms">Edit hoofdpagina</a>
    @endif
    {{--@if(Auth::user()->isGebruiker())--}}
        {{--<a href="/user/boodschappenlijst">Boodschappenlijst</a>--}}
        {{--<a href="/user/voorraad">Voorraad in huis</a>--}}
    {{--@endif--}}

</div>
