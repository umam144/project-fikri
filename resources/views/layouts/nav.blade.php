<nav>
    <div>
        {{-- @guest --}}
            <a href="#login">Login</a>   
            <a href="#register">Register</a>   
        {{-- @endguest
        @auth --}}
            <a href="#user">Users</a>
            <a href="{{ route('tanah.index') }}">Tanah</a>
            <a href="{{ route('bangunan.index') }}">Bangunan</a>
            <a href="{{ route('ruangan.index') }}">Ruangan</a>
            <a href="{{ route('kategori.index') }}">Kategori</a>
            <a href="{{ route('barang.index') }}">Barang</a>
        {{-- @endauth --}}
    </div>
</nav>