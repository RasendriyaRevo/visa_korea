@extends('header')
@section('title','VISAinKOREA')
@section('head')

<!-- header -->
<header>
    <div id="topcon">
        <div  class="container-fluid">
            <div class=row>
                <div id="logo" class="col-sm-3">
                    <img src="img/icon/logo.png" alt="iconlogo">
                </div>
                <div id="logotext" class="col-sm-3">
                    <p>What You See Is What You Get</p>
                </div>
                <div id="phone" class="col-sm-2">
                    <p><img src="img/icon/phone.png" alt="phone">02-523-3075</p>
                </div>
                <div id="mail" class="col-sm-2">
                    <p><img src="img/icon/mail.png" alt="mail">janghaeng@naver.com</p>
                </div>
                <div id="contact" class="col-sm-2">
                    <a href="#"><img src="img/icon/facebook.png" alt="fb"></a>
                    <a href="#"><img src="img/icon/naver.png" alt="n"></a>
                    <a href="#"><img src="img/icon/gplus.png" alt="g+"></a>
                </div>
            </div>
        </div>
    </div>
</header>

<nav  id="nav" class="navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav">
            <li id="navl" class="nav-item">
                <a class="nav-link" href="#">HOME</a>
            </li>
            <li id="navl" class="nav-item">
                <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">VISA</a>
            </li>
            <li id="navr" class="nav-item">
                <a class="nav-link" href="#">LIVING IN KOREA</a>
            </li>
            <li id="navr" class="nav-item">
                <a class="nav-link" href="#">CONTACT US</a>
            </li>
        </ul>
    </div>
</nav>
@endsection

@section('content')
<!-- Page 1 -->
<div id="showup" class="container-fluid">
    <div id="showslide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#showslide" data-slide-to="0" class="active"></li>
            <li data-target="#showslide" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div id="showtext" class="carousel-caption d-none d-md-block">
                <h2><strong>Visa in Korea</strong></h2>
                <h4>Provides full services of Korea Immigration and VISA
                taks assiting our clients around the world
                with their Korea Immigration Needs</h4>
                <button type="button" class="btn btn-outline-dark btn-lg"><b>READ MORE</b></button>
            </div>
            <div class="carousel-item active">
                <img src="img/bg/bg1.png" alt="bg1">
            </div>
            <div class="carousel-item">
                <img src="img/bg/bg2.png"alt=".bg2">
            </div>
        </div>
        <a class="carousel-control-prev" href="#showslide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#showslide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Page 2 -->
<div id="page2" class="container">
    <div id="texttop">
        <h3>Registered Korea VISA & Immigration Agency</h3>
        <p>VISA IN KOREA provides full services of Korea Immigration and VISA tasks assisting our clients around the world with their 
        Korea Immigration Needs. We are mainly known for our exceptional VISA & Immigration tasking and leading 
        those fields with a professional mindship. our office is Specialized in E, F VISAs and Change of Status of Stay in Korea 
        as well as D types of VISAs and Invitation for Relatives.</p>
    </div>
    <div id="showcard" class="row" style="margin-top:50px;">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="img/icon/translator.png" class="img-circle" alt="translator">
                    <h5 class="card-title"><strong>Translator</strong></h5>
                    <p class="card-text">An authorized administrative translator is the only one. 
                    Who has licensed administrative qualification from the Korea Goverment providing translation services with</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="col"style="width: 18rem;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="img/icon/passport.png" class="img-circle" alt="passport">
                    <h5 class="card-title"><strong>Korea Visa</strong></h5>
                    <p class="card-text">Family Related Visa, Overseas Korean Policy, and Investor & Startup Immigration Visa
                    Lorem Ipsum lorem ipsum lorem ipsum
                    lorem ipsum lorem ipsum lorem ipsum</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="img/icon/medical.png" class="img-circle" alt="medical">
                    <h5 class="card-title"><strong>Medical</strong></h5>
                    <p class="card-text">Medical Devices Authorization/Permision (Ministry of Food and Drug Safety of Korea). 
                    Medical Devices CE Mark Consulting (European Medical Devices Comformity)</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('foot')

@endsection