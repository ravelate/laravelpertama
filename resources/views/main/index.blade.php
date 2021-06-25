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

        <div class="tengah" id="tengah">
            <h1 id="text5" style="text-align: center;">Among US</h1>
            <img class="gambartengah" src="images/amogusheadline.jpg">
            <p id="text6">Join your crewmates in a multiplayer game of teamwork and betrayal!

                Play online or over local wifi with 4-10 players as you attempt to <br> hold your spaceship together and
                return back to civilization. But beware...as there may be an alien impostor aboard!

                One crewmate <br> has been replaced by a parasitic shapeshifter. Their goal is to eliminate the rest of
                the crew before the ship reaches home. The Impostor will sabotage the ship, sneak through vents,
                deceive, and frame others to remain anonymous and kill off the crew.

                While everyone is fixing up the ship, no one can talk to maintain anonymity. Once a body is reported,
                the surviving crew will openly debate who they think The Impostor is. The Impostor's goal is to pretend
                that they are a member of the crew. If The Impostor is not voted off, everyone goes back to maintaining
                the ship until another body is found. If The Impostor is voted off, the crew wins!</p>
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
            <div>
                @foreach ($data_news as $new)
                @if ($new->is_published == 1)
                <img class="berita" src="{{$new->picture}}"><br>
                <a href="beritasatu.html" style="position: relative; left: 5%; color: black;">{{$new->title}}</a>
                @endif
                @endforeach
            </div>

        </div>
 @section('footer')
 <footer id="footer">
        <h5>ini footer</h5>
    </footer>       
@endsection