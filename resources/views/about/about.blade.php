@extends('base')

@section('library-css')
    @vite(['resources/css/about.css'])
@endsection

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container mt-5">
    <h2>About</h2>
    <h1><b>Greetings</b></h1>
    <br>
</div>

<div class="p">
    <i>"To be a world-leading Christian university that transforms society for the glory of God" </i> is the vision proclaimed by Petra Christian University Surabaya (PCU). In an effort to implement it, Petra Christian University Choir (PCU Choir) proudly presents <b>Petra Cantare! Choral Festival 2025.</b>

    This event promotes music as a medium that transforms people into a culture of noble human values. Music has the power to unite all differences, reconcile conflicts, elevate human dignity, and honor. It helps us become virtuous individuals and filled with gratitude to God, the Creator.

    Therefore, with great joy, we invite all of you to take part in this grand festival. Through the beautiful harmony of choir music, together we bring a message of love, peace, and hope.

    We present you, from Petra to the world: <b>Petra Cantare!.</b>
</div>

<div class="names">
    <b>Dimitris Ktistakis - Aris Sudibyo</b>
    <br>Artistic Director - Festival Director
    <br><br><b>Onny Prihantono</b><br>Associate Festival Director
</div>

<div class="container mt-5">
    <h1><b>International Adjudicators</b></h1>
    <br>

    <div class="card-container">
        <!-- CARD SATU -->
        <div class="card">
            <div class="card-image">
                <img src="images/dimitris.jpg" alt="dimitris">
            </div>
            <div class="card-content">
                <div class="card-name"><b>DIMITRIS KTISTAKIS</b></div>
                <p class="card-description">Studied at the Hochschule für Musik SAAR, where he acquired a degree in piano teaching and postgraduate degrees in piano performance, choral conducting and orchestral conducting...</p>
            </div>
        </div>

        <!-- CARD DUA -->
        <div class="card">
            <div class="card-image">
                <img src="images/basak.jpg" alt="basak">
            </div>
            <div class="card-content">
                <div class="card-name"><b>BAŞAK DOĞAN</b></div>
                <p class="card-description">Studied philosophy of music at Boğaziçi University in Istanbul and rhythmic choral conducting at the Royal Academy of Music in Denmark...</p>
            </div>
        </div>

        <!-- CARD TIGA -->
        <div class="card">
            <div class="card-image">
                <img src="images/tommy.jpg" alt="tommy">
            </div>
            <div class="card-content">
                <div class="card-name"><b>TOMMY PRABOWO</b></div>
                <p class="card-description">His main activity now is teaching young conducting talents in his studio musicasa (@musicasa.jakarta). Musicasa was founded in 2008 together...</p>
            </div>
        </div>
    </div>
    
    <div class="card-container">
        <!-- CARD EMPAT -->
        <div class="card">
            <div class="card-image">
                <img src="images/lim.jpg" alt="lim">
            </div>
            <div class="card-content">
                <div class="card-name"><b>LIM AI HOOI</b></div>
                <p class="card-description">Graduated in 1989 from the Royal College of Music in London, majoring in piano and voice. Recognized and respected conductor and educator in...</div>
        </div>

        <!-- CARD LIMA -->
        <div class="card">
            <div class="card-image">
                <img src="images/lee.jpg" alt="lee">
            </div>
            <div class="card-content">
                <div class="card-name"><b>LEE SHIAK YAO</b></div>
                <p class="card-description">Lee Shiak Yao is an internationally acclaimed conductor, vocalist, clinician, and lecturer, recognized with numerous awards. He holds a MMus from the...</p>
            </div>
        </div>

        <!-- CARD ENAM -->
        <div class="card">
            <div class="card-image">
                <img src="images/aris.jpg" alt="aris">
            </div>
            <div class="card-content">
                <div class="card-name"><b>ARIS SUDIBYO</b></div>
                <p class="card-description">Choir conductor, vocal teacher, music minister, music and church music educator, choir coach for many choirs in Indonesia, national, and international...</p>
            </div>
        </div>
    </div>

    <!-- CARD TUJUH -->
    <div class="card-container2">
        <div class="card2">
            <div class="card-image2">
                <img src="images/andrea.jpg" alt="andrea">
            </div>
            <div class="card-content2">
                <div class="card-name2"><b>ANDREA ANGELINI</b></div>
                <p class="card-description2">Born in Bologna, Andrea Angelini moved to Rimini as a child where he began studying piano at the 'G. Lettimi' Conservatoire of Music. At the same time...</p>
            </div>
        </div>
    </div>
</div>

@endsection

