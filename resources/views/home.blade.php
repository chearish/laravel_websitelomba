@extends('base')

@push('styles')
    @vite(['resources/css/style2.css'])
@endpush

@section('content')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Carousel Item 1 -->
            <div class="carousel-item active">
                <div class="gradient-overlay d-flex align-items-center">
                    <img src="images/pcu1.jpg" class="d-block w-100" alt="pcuchoir">
                    <div class="text-content position-absolute text-left">
                        <h1 class="display-4">Petra Cantare! International Choral Festival</h1>
                        @if (!auth()->check())
                            <a href="https://drive.google.com/file/d/1Lo_pHgYBGsnH1rvNVeejv4VPNM6ENtP-/view" class="btn btn-primary mt-3" target="_blank">For More Information</a>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Carousel Item 2 -->
            <div class="carousel-item">
                <div class="gradient-overlay d-flex align-items-center">
                    <img src="images/pcu2.jpg" class="d-block w-100" alt="pcu2">
                    <div class="text-content position-absolute text-left">
                        <h1 class="display-4">Experience Harmony</h1>
                        <p class="lead">Join the Choral Celebration</p>
                        @if (!auth()->check())
                            <a href="{{route('login')}}" class="btn btn-primary mt-3">Register Now</a>
                        @endif                    
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
  <!-- feature section -->
  <section class="feature_section p-5">
    <div class="container">
    <div class="feature_container">
        <div class="box">
            <div class="img-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                </svg>
            </div>
            <a href="{{route('categories')}}" class="white-link"> <!--Tambahkan elemen <a> -->
                <h5 class="name">
                    CATEGORIES
                </h5>
            </a>
        </div>  
        <div class="box active">
        <div class="img-box">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A3 3 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43zM9 3h2.932l.023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zM1 4v2h6V4zm8 0v2h6V4zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5z"/>
        </svg>
        </div>
        <a href="{{route('prizes')}}" class="white-link">
            <h5 class="name">
                PRIZES & AWARD
            </h5>
        </a>
        </div>

        <div class="box">
        <div class="img-box">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
            <path d="M3 2v4.586l7 7L14.586 9l-7-7zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586z"/>
            <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1z"/>
        </svg>
    </div>
    <a href="{{route('fee')}}" class="white-link">
        <h5 class="name">
            REGISTRATION FEE
        </h5>
        </a>
        </div>
    </div>
    </div>
</section>

<!-- end feature section -->

<!-- about section -->
<section class="about_section layout_padding-bottom" id="eventsched">
<h1 class="event_schedule text-center mt-5">Event Schedule</h1> <br></br>
<ul class="timeline">
    <li style="--accent-color:#41516C">
        <div class="date">8 September - 16 Desember 2024</div>
        <div class="title">Registration
        </div>
    </li>
    <li style="--accent-color:#FBCA3E">
        <div class="date">8 September - 16 Oktober 202</div>
        <div class="title">Early Bird</div>
    </li>
    <li style="--accent-color:#E24A68">
        <div class="date">Maksimum 21 Desember 2024</div>
        <div class="title">File Submission</div>
    </li>
    <li style="--accent-color:#1B5F8C">
        <div class="date">17 - 22 Februari 2025</div>
        <div class="title">Competition</div>
    </li>
    <li style="--accent-color:#4CADAD">
        <div class="date">22 Februari 2025</div>
        <div class="title">Meet the Judges</div>
    </li>
    <li style="--accent-color:#41516C">
        <div class="date">22 Februari 2025</div>
        <div class="title">Grand Prix Round, Awarding Night</div>
    </li>
</ul>

<!-- 
    <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
        <div class="detail-box">
            <h2>
            EVENT SCHEDULE
            </h2>
            <table class="table table-bordered">
                <thead class="table-dark text-center align-middle">
                    <tr>
                    <th scope="col">Event</th>
                    <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider text-center align-middle">
                    <tr>
                    <td>Registration</td>
                    <td>8 September - 16 Desember 2024</td>
                    </tr>
                    <tr>
                    <td>Early Bird</td>
                    <td>8 September - 16 Oktober 2024</td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    <td>File Submission</td>
                    <td>Maksimum 21 Desember 2024</td>
                    </tr>
                    <tr>
                    <td>Competition</td>
                    <td>17 - 22 Februari 2025</td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    <td>Meet the Judges</td>
                    <td>22 Februari 2025</td>
                    </tr>
                    <tr>
                    <td>Grand Prix Round, Awarding Night</td>
                    <td>22 Februari 2025</td>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        <div class="col-lg-7 col-md-6">
        <div class="img-box">
            <img src="" alt="">
        </div>
        </div>
    </div>
    </div> 
</section> -->

<!-- end about section -->
<!-- <section>
<div class="uk-container uk-padding">
<div class="uk-time">
    <div class="uk-time-item">
        <div class="uk-time-icon">
            <span class="uk-badge"><span uk-icon="check"></span></span>
        </div>
        <div class="uk-time-content">
            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <h3 class="uk-card-title"><time datetime="2020-07-08">July 8</time></h3>
                        <span class="uk-label uk-label-success uk-margin-auto-left">Feature</span>
                    </div>
                </div>
                <div class="uk-card-body">
                                        <p class="uk-text-success">Fully responsive timeline you can add to your UIkit 3 project
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-time-item">
        <div class="uk-time-icon">
            <span class="uk-badge"><span uk-icon="check"></span></span>
        </div>
        <div class="uk-time-content">
            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <h3 class="uk-card-title"><time datetime="2020-07-07">July 7</time></h3>
                        <span class="uk-label uk-label-warning uk-margin-auto-left">Test</span>
                    </div>
                </div>
                <div class="uk-card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                </div>
            </div>
        </div>
    </div>
            <div class="uk-time-item">
        <div class="uk-time-icon">
            <span class="uk-badge"><span uk-icon="check"></span></span>
        </div>
        <div class="uk-time-content">
            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <h3 class="uk-card-title"><time datetime="2020-07-06">July 6</time></h3>
                        <span class="uk-label uk-label-danger uk-margin-auto-left">Fix</span>
                    </div>
                </div>
                <div class="uk-card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                </div>
            </div>
                            <a href="#"><span class="uk-margin-small-right" uk-icon="triangle-down"></span>Load more</a>
        </div>
    </div>
</div>
</div><div class="uk-container uk-padding">
<div class="uk-time">
    <div class="uk-time-item">
        <div class="uk-time-icon">
            <span class="uk-badge"><span uk-icon="check"></span></span>
        </div>
        <div class="uk-time-content">
            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <h3 class="uk-card-title"><time datetime="2020-07-08">July 8</time></h3>
                        <span class="uk-label uk-label-success uk-margin-auto-left">Feature</span>
                    </div>
                </div>
                <div class="uk-card-body">
                                        <p class="uk-text-success">Fully responsive timeline you can add to your UIkit 3 project
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-time-item">
        <div class="uk-time-icon">
            <span class="uk-badge"><span uk-icon="check"></span></span>
        </div>
        <div class="uk-time-content">
            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <h3 class="uk-card-title"><time datetime="2020-07-07">July 7</time></h3>
                        <span class="uk-label uk-label-warning uk-margin-auto-left">Test</span>
                    </div>
                </div>
                <div class="uk-card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                </div>
            </div>
        </div>
    </div>
            <div class="uk-time-item">
        <div class="uk-time-icon">
            <span class="uk-badge"><span uk-icon="check"></span></span>
        </div>
        <div class="uk-time-content">
            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <h3 class="uk-card-title"><time datetime="2020-07-06">July 6</time></h3>
                        <span class="uk-label uk-label-danger uk-margin-auto-left">Fix</span>
                    </div>
                </div>
                <div class="uk-card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                </div>
            </div>
                            <a href="#"><span class="uk-margin-small-right" uk-icon="triangle-down"></span>Load more</a>
        </div>
    </div>
</div>
</div>
    </section> -->
<!-- professional section -->
    

<!-- <section class="professional_section layout_padding">
    <div class="container">
    <div class="row">
        <div class="col-md-4">
        <div class="img-box">
            <img src="" alt="">
        </div>
        </div>
        <div class="col-md-6">
        <div class="detail-box">
            <h2>
            Jadwal Kegiatan
            </h2>
            <table class="table table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>17 Februari</th>
                        <th>18 Februari</th>
                        <th>19 Februari</th>
                        <th>20 Februari</th>
                        <th>21 Februari</th>
                        <th>22 Februari</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2" class="align-middle">Director's Acoustic Check</td>
                        <td class="text-center align-middle">Competition</td>
                        <td class="text-center align-middle">Competition</td>
                        <td class="text-center align-middle">Competition</td>
                        <td class="text-center align-middle">Competition</td>
                        <td class="text-center align-middle">Meet the Judges</td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">Competition</td>
                        <td class="text-center align-middle">Competition</td>
                        <td class="text-center align-middle">Competition</td>
                        <td class="text-center align-middle">Grand Prix Announcement</td>
                        <td class="text-center align-middle">Grand Prix Round & Awarding Night</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</section> -->

<!-- end professional section -->

<!-- service section -->

<section class="service_section layout_padding">
    <div class="container ">
        <div class="heading_container heading_center">
            <h2> Information </h2>
        </div>

    <div class="row">
<a href="{{route('categories')}}" style="text-decoration: none; color: inherit;">
    <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box">
            <div class="img-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-clipboard2-fill" viewBox="0 0 16 16">
                    <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
                    <path d="M3.5 1h.585A1.5 1.5 0 0 0 4 1.5V2a1.5 1.5 0 0 0 1.5 1.5h5A1.5 1.5 0 0 0 12 2v-.5q-.001-.264-.085-.5h.585A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1"/>
                </svg>
            </div>
            <div class="detail-box">
                <h5>
                    RULES
                </h5>
                <p>
                    General Rules description goes here.
                </p>
            </div>
        </div>
    </div>
</a>

<a href="{{route('categories')}}" style="text-decoration: none; color: inherit;">
    <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box">
            <div class="img-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                </svg>
            </div>
            <div class="detail-box">
                <h5>
                    JUDGING CRITERIA
                </h5>
                <p>
                    Judging criteria description goes here.
                </p>
            </div>
        </div>
    </div>
</a>

<a href="{{route('categories')}}" style="text-decoration: none; color: inherit;">
    <div class="col-sm-6 col-md-4 mx-auto">
        <div class="box">
            <div class="img-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-file-x-fill" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M6.854 6.146 8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 1 1 .708-.708"/>
                </svg>
            </div>
            <div class="detail-box">
                <h5>
                    PENALTY
                </h5>
                <p>
                    Penalty information goes here.
                </p>
            </div>
        </div>
    </div>
</a>
</div>

    
    </div>
</section>

<!-- end service section -->

<!-- client section -->

<!-- <section class="client_section ">
    <div class="container">
    <div class="heading_container heading_center">
        <h2>
        What Our Clients Say
        </h2>
    </div>
    <div class="carousel-wrap layout_padding2-top ">
        <div class="owl-carousel">
        <div class="item">
            <div class="box">
            <div class="client_id">
                <div class="img-box">
                <img src="" alt="">
                </div>
                <div class="client_detail">
                <div class="client_info">
                    <h6>
                    Jorch morik
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
            </div>
            <div class="client_text">
                <p>
                chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                </p>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="box">
            <div class="client_id">
                <div class="img-box">
                <img src="" alt="">
                </div>
                <div class="client_detail">
                <div class="client_info">
                    <h6>
                    Jorch morik
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
            </div>
            <div class="client_text">
                <p>
                chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                </p>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="box">
            <div class="client_id">
                <div class="img-box">
                <img src="" alt="">
                </div>
                <div class="client_detail">
                <div class="client_info">
                    <h6>
                    Jorch morik
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
            </div>
            <div class="client_text">
                <p>
                chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                </p>
            </div>
            </div>
        </div>
        <div class="item">
            <div class="box">
            <div class="client_id">
                <div class="img-box">
                <img src="" alt="">
                </div>
                <div class="client_detail">
                <div class="client_info">
                    <h6>
                    Jorch morik
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
            </div>
            <div class="client_text">
                <p>
                chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                </p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section> -->

<!-- end client section -->

<!-- contact section -->

<!-- <section class="contact_section layout_padding">
    <div class="container">
    <div class="heading_container">
        <h2>
        Contact Us
        </h2>
    </div>
    <div class="row">
        <div class="col-md-6">
        <form action="">
            <div>
            <input type="text" placeholder="Name" />
            </div>
            <div>
            <input type="text" placeholder="Phone Number" />
            </div>
            <div>
            <input type="email" placeholder="Email" />
            </div>
            <div>
            <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
            <button>
                SEND
            </button>
            </div>
        </form>
        </div>
        <div class="col-md-6">
        <div class="map_container">
            <div class="map">
            <div id="googleMap" style="width:100%;height:100%;"></div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section> -->

<!-- end contact section -->

<section class="info_section " id="contactus">
    <div class="container">
        <h4>
            Contact Us
        </h4>
    <div class="row">
        <div class="col-lg-10 mx-auto">
        <div class="info_items">
            <div class="row">
            <div class="col-md-4 mt-4">
                <div class="item ">
                    <div class="img-box ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 48c-8.8 0-16 7.2-16 16l0 384c0 8.8 7.2 16 16 16l80 0 0-64c0-26.5 21.5-48 48-48s48 21.5 48 48l0 64 80 0c8.8 0 16-7.2 16-16l0-384c0-8.8-7.2-16-16-16L64 48zM0 64C0 28.7 28.7 0 64 0L320 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm88 40c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zM232 88l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16zM88 232c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zm144-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16z"/></svg>
                    </div>
                    <p>
                    Office :<br>
                    Pusat Pengembangan Musik Gereja<br>
                    Universitas Kristen Petra<br>
                    Jalan Siwalankerto 121-131, Surabaya
                    </p>
                </div>
                </a>
            </div>
            <div class="col-md-4">
                <div class="item ">
                    <div class="img-box ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-telephone" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/></svg>
                    </div>
                    <p>
                    Contact Person : <br>
                    Sharon (+62 815-5968-1300)<br>
                    Onny (+62 878-5323-4754)
                    </p>
                </div>
                </a>
            </div>
            <div class="col-md-4 mt-10">
                <div class="item ">
                    <div class="img-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 112c-8.8 0-16 7.2-16 16l0 22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1l0-22.1c0-8.8-7.2-16-16-16L64 112zM48 212.2L48 384c0 8.8 7.2 16 16 16l384 0c8.8 0 16-7.2 16-16l0-171.8L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64l384 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128z"/></svg>
                    </div>
                    <p>
                    Email: <br>
                    petra.cantare@petra.ac.id
                    </p>
                </div>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="social-box">
    <h4>
        Follow Us
    </h4>
    <a href="https://www.instagram.com/petra.cantare?igsh=MWZveW51NnVxMWg4MQ==" style="display: inline-block; text-align: center;">
        <img src="images/ig3.png" style="width: 30px; height: 30px; vertical-align: middle;">
        <p style="display: inline; margin-left: 8px; vertical-align: middle; color: aliceblue;">@petra.cantare</p>
    </a>
    </div>
</section>

<!-- end info_section -->

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
    <p>
        &copy; <span id="displayDateYear"></span> PETRA CANTARE 2025
    </p>
    </div>
</footer>
<!-- footer section -->

@endsection

@section('library-js')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
@vite(['resources/js/bootstrap.js'])

@endsection




