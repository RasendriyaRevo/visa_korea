@extends('header')
@section('title','VISAinKOREA')
@section('head')
    <link href="css/contactstyle.css" rel="stylesheet" >
    <link href="css/me.css" rel="stylesheet" >
@endsection
@section('content')    
<div class="contactus">
    <div class="head">
        <div class="head_content">
            CONTACT US
        </div> 
    </div>
    <br>
    <div id="content" style="margin-left:8%">
        <div class="container clearfix">
            <div id="primary">
                <main id="main" role="main">
                    <div class="googlemaps_widget">
                        <div class="maps-container">
                            <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12662.718782461134!2d127.008803!3d37.4918843!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfec5cade4fa21e0!2z7J6l7ZaJ64u37Lu07ZaJ7KCV7IKsIFZJU0EgaW4gS09SRUE!5e0!3m2!1sid!2sid!4v1569239842093!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                        </div>
                    </div>

                    <div id="text-4" style="width:100%;" class="widget widget_text">
                        <form>
                            <label for="name">Name</label>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <input id="bordercustom" type="text" class="form-control form-control-lg" placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input id="bordercustom" type="text" class="form-control form-control-lg"placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="bordercustom" type="email" class="col-lg-8 form-control form-control-lg" id="inputEmail">
                            </div>
                            <div class="form-group">
                                <label for="help">Message</label>
                                <textarea id="bordercustom" class="form-control form-control-lg" id="help" rows="6"></textarea>
                            </div>
                            <button id="buttonsubmit" type="button" class="btn btn-dark"><b>SEND MESSAGE</b></button>
                        </form>
                    </div>	
                </main> 
            </div> 

            <aside id="secondary" style="border-left: 5px solid #eee; padding-left: 30px;">
                <aside id="freesiaempire_contact_widgets-5" class="widget">		
                    <h3 class="widget-title">Contact Information</h3>
                    <hr id="hrsec">
                    <ul id="listinfo">
                        <li class="d-flex flex-row align-items-center">
                            <img id="info" src="img/icon/phone25.png" alt="">
                            <a class="m-3" href="tel:+8908980909899" title="" target="_blank">02-523-3075</a>
                        </li>
                        <li class="d-flex flex-row align-items-center">
                            <img id="info" src="img/icon/mail25.png" alt="">
                            <a class="m-3" href="mailto:janghaeng@naver.com" title="">janghaeng@naver.com</a>
                        </li>
                        <li class="d-flex flex-row align-items-center">
                            <img id="info" src="img/icon/loc25.png" alt="">
                            <a class="m-3" href="https://www.google.com/maps/search/%EC%9E%A5%ED%96%89%EB%8B%B7%EC%BB%B4%ED%96%89%EC%A0%95%EC%82%AC%EC%82%AC%EB%AC%B4%EC%86%8C+%EC%9E%A5%EB%A7%8C%EC%9D%B5%ED%96%89%EC%A0%95%EC%82%AC+%EC%84%9C%EC%9A%B8%ED%8A%B9%EB%B3%84%EC%8B%9C+%EC%84%9C%EC%B4%88%EA%B5%AC+%EC%84%9C%EC%B4%88%EB%8C%80%EB%A1%9C+248+%EC%9B%94%ED%97%8C%ED%9A%8C%EA%B4%80+5%EC%B8%B5+501%ED%98%B8+(%EC%9A%B0:+06647)/@37.4918885,127.0066143,17z/data=!3m1!4b1" title="장행닷컴행정사사무소 장만익행정사 서울특별시 서초구 서초대로 248 월헌회관 5층 501호 (우: 06647)">장행닷컴행정사사무소 장만익행정사 서울특별시 서초구 서초대로 248 월헌회관 5층 501호 (우: 06647)</a>
                        </li>
                        <li class="d-flex flex-row align-items-center">
                            <img id="talk" src="img/icon/talk25.png" alt="">
                            <a class="p-3" href="" title="">visainkorea</a>
                        </li>
                    </ul>
                </aside>
            </aside>
        </div>
    </div>
</div>
@endsection
@section('foot')
@endsection