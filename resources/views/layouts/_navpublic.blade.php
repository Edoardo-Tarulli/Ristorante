<ul>
    <li><a href="{{ route('who') }}" title="Il nostro profilo aziendale">Chi siamo</a></li>
    <li><a href="{{ route('where') }}" title="Dove trovarci">Dove Siamo</a></li>
    @can('isAdmin')
        <li><a href="{{ route('admin') }}" title="Home Admin">Home Admin</a></li>
    @endcan
    @can('isUser')
        <li><a href="{{ route('user') }}" title="Home User">Home User</a></li>
    @endcan
    @auth
        <li><a href="" title="Esci dal sito"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
    @guest
        <li><a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>  
    @endguest
</ul>
