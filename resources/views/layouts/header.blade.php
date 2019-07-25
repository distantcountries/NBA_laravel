

    @if (Auth::check())

        <h1><a href="/teams">Teams</a></h1>
        <h5>
            <a href="/news" style="color:red; margin-right:1rem;">All news</a>
            <a href="/news/create" style="color:red;">Create news</a>
        </h5>
        Welcome {{ auth()->user()->name }}!<br>
        <a href="/logout">Logout</a>
    @else
    <!-- ako korisnik nije ulogovan teams link ne vodi nikuda -->
        <h1><a href="#">Teams</a></h1> 
        <h5><a href="#" style="color:red;">All news</a></h5>
        <a href="/login" style="margin-right:1rem;">Login</a>
        <a href="/register" style="margin-right:1rem;">Register</a>

    @endif



<hr>