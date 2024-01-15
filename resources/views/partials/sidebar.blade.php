<div class="logo">
    <i class="fa-solid fa-rocket"></i>
</div>
<a id="menu-icon" class="menu-icon" onclick="onMenuClick()">
    <i class="fa fa-bars"></i>
</a>
<div id="navigation-var" class="nav-var">
    <a href=""><i class="fa-solid fa-house"></i></a>
    <a href=""><i class="fa-solid fa-newspaper"></i></a>
    <a href=""><i class="fa-solid fa-user"></i></a>
</div>
<div class="header__right">
    @auth
    <form action="/auth/logout" method="POST">
        @csrf
        <button class="button__logout"><i class="fa-solid fa-right-from-bracket"></i></button>
    </form>
    @endauth
</div>
