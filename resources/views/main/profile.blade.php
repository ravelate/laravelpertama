@extends('layout/layoutamogus')
@section('header')

    <header id="header">
        <img class="logo" src="images/amoguslogo.png" alt="logo">
        <h2 class="judul" id="text1">MODUL 2</h2>

    </header>
@section('kiri')
<div class="kiri" id="kiri">
            <aside>
                <h1 id="text2">About Us:</h1>
                <ul>
                    <li><a href="/" id="text3" style="color: black;">Home</a></li>
                    <li><a href="/profile" id="text4" style="color: black;">my todo</a></li>
                    <li><a href="/author" id="text4" style="color: black;">Admin</a></li>
                </ul>
            </aside>
        </div>
@section('content')
            <div class="tengah">
                <div class="todo">
                    <div class="list-header">
                        <h1>Add Lists?</h1>
                    </div>
                    <form>
                        <input type="text" class="list-input" placeholder="type here">
                        <button class="list-button" type="submit">Enter</button>
                    </form>
                    <div class="list-container">
                        <ul class="film-list"></ul>
                    </div>
                    <div class="list-footer">
                        <p>terdapat <span id="amount"></span> list yang tersedia</p>
                        <button class="clear-button" type="submit">clear</button>
                    </div>
                </div>
            
            <script src="todo.js"></script>
            </div>
            @section('kanan')
<div class="kanan" id="kanan">
            <label class="switch">
                <input type="checkbox" id="check" onclick="theme()">
                <span class="slider round"></span>
            </label>
            <!--searchbar-->
            <form id="text7">
            </form>

            <!--Berita Populer-->
            <p id="text8">Berita Populer:</p>

            <!--berita1-->
            <div>
                <img class="berita" src="images/amogusberita3.jpg">
                <br>
                <a id="text9" href="beritasatu.html" style="position: relative; left: 5%; color: black;">Among Us: Map
                    Baru Airship telah tiba!</a>
            </div>
            <!--berita2-->
            <div>
                <img class="berita" src="images/amogusberita2.jpg">
                <br>
                <a id="text10" href="beritasatu.html" style="position: relative; left: 5%; color: black;">Among Us: Skin
                    Baru telah tiba!</a>
            </div>
            <!--berita3-->
            <div>
                <img class="berita" src="images/amogusberita1.jpg">
                <br>
                <a id="text11" href="beritasatu.html" style="position: relative; left: 5%; color: black;">Among Us: Tips
                    Pro main Impostor!</a>
            </div>

        </div>
 @section('footer')
 <footer id="footer">
        <h5>ini footer</h5>
    </footer>       
@endsection