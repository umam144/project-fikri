<nav>
    <div>
        @guest
            <a href="{{ route('login') }}">Login</a>   
            <a href="#register">Register</a>   
        @endguest

        @auth
            <a href="/dashboard">Dashboard</a>
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('tanah.index') }}">Tanah</a>
            <a href="{{ route('bangunan.index') }}">Bangunan</a>
            <a href="{{ route('ruangan.index') }}">Ruangan</a>
            <a href="{{ route('kategori.index') }}">Kategori</a>
            <a href="{{ route('barang.index') }}">Barang</a>

            {{-- Logout --}}
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background:none;border:none;color:red;cursor:pointer;">
                    Logout
                </button>
            </form>
        @endauth
    </div>
</nav>
