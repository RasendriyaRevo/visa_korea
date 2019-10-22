    @extends('header')
    @section('title','VISAinKOREA')
    @section('head')
        <link href="css/contactstyle.css" rel="stylesheet" >
    @endsection
    @section('content')
    <body class="pg-contact page-template page-template-page-templates page-template-contact-template page-template-page-templatescontact-template-php page page-id-192 wp-embed-responsive theme-freesia-empire woocommerce-no-js  blog-large">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
            <div class="container jumbotron" id="contacttitle">
                <h1>CONTACT US</h1>
            </div>
            <div id="content">
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
                                    <a class="m-3" href="tel:+8908980909899" title="address">롯데캐슬메디치빌딩 B121 서초구1656-4 06634 Seoul, Korea</a>
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
        <div style="display:none">
        </div>
    </body>
    @endsection
    @section('foot')
    <script>

    </script>
    @endsection