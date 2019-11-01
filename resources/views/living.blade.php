@extends('header')
@section('title','VISAinKOREA')
@section('head')
    <link href="css/livingstyle.css" rel="stylesheet" >
    <link href="css/me.css" rel="stylesheet" >
@endsection
@section('content')
<div id="content">
    <div class="container clearfix">
        <div class="headnav">
            <div class="headnav-content">
                Licing in Korea &nbsp; <img src="img/icon/next.png" style="width:5pt;height:5pt;margin-top:6pt"> &nbsp;&nbsp; 
                <a style="color:#909090" href="#housing">Housing</a> &nbsp;&nbsp; | &nbsp;&nbsp; 
                <a style="color:#909090" href="#education">Education</a> &nbsp;&nbsp; | &nbsp;&nbsp; 
                <a style="color:#909090" href="#driving">Driving</a> &nbsp;&nbsp; | &nbsp;&nbsp; 
                <a style="color:#909090" href="#employment">Employment</a>
            </div> 
        </div>
        <br>
        <div id="primary">
            <main id="main" role="main">
                <div id="housing" class="category-content">
                    <h2>Housing</h2>
                    @for ($i = 0; $i < 3; $i++)
                        <div id="$i" class="post-content">
                            <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="">Read More</a>
                            </blockquote>
                        </div>
                    @endfor
                    <center><button type="button" class="btn btn-link border border-primary">Load More</button></center>
                </div>
                
                <div id="education" class="category-content">
                    <h2>Education</h2>
                    @for ($i = 0; $i < 3; $i++)
                        <div id="$i" class="post-content">
                            <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="">Read More</a>
                            </blockquote>
                        </div>
                    @endfor
                    <center><button type="button" class="btn btn-link border border-primary">Load More</button></center>
                </div>
                
                <div id="driving" class="category-content">
                    <h2>Driving</h2>
                    @for ($i = 0; $i < 3; $i++)
                        <div id="$i" class="post-content">
                            <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="">Read More</a>
                            </blockquote>
                        </div>
                    @endfor
                    <center><button type="button" class="btn btn-link border border-primary">Load More</button></center>
                </div>
                
                <div id="employment" class="category-content">
                    <h2>Employment</h2>
                    @for ($i = 0; $i < 3; $i++)
                        <div id="$i" class="post-content">
                            <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="">Read More</a>
                            </blockquote>
                        </div>
                    @endfor
                    <center><button type="button" class="btn btn-link border border-primary">Load More</button></center>
                </div>
            </main>
        </div>
        <aside id="secondary">
            <aside id="search-2" class="widget widget_search">
                <form class="search-form" action="" method="get">
                    <input type="search" name="s" class="search-field" placeholder="Search!" autocomplete="off">
                    <button type="submit" class="search-submit"><i class="search-icon"></i></button>
                </form>
            </aside>		
            <aside id="recent-posts-2" class="widget widget_recent_entries">		
                <h2 class="widget-title">Recent Posts</h2>		
                <ul>
                    <li>
                        <a href="#">Hello world!</a>
                    </li>
                    <li>
                        <a href="#">Lorem Ipsum</a>
                    </li>
                    <li>
                        <a href="#">Hello world!</a>
                    </li>
                    <li>
                        <a href="#">Lorem Ipsum</a>
                    </li>
                    <li>
                        <a href="#">Hello world!</a>
                    </li>
                </ul>
            </aside>
            <aside id="archives-2" class="widget widget_archive"><h2 class="widget-title">Archives</h2>		
                <ul>
                    <li><a href='#'>Oktober 2019</a></li>
                    <li><a href='#'>November 2019</a></li>
                </ul>
            </aside>
            <aside id="categories-2" class="widget widget_categories"><h2 class="widget-title">Tag</h2>		
                <ul>
                    <li class="cat-item cat-item-2"><a href="#">Housing</a></li>
                    <li class="cat-item cat-item-1"><a href="#">Education</a></li>
                    <li class="cat-item cat-item-3"><a href="#">Driving</a></li>
                    <li class="cat-item cat-item-3"><a href="#">Employment</a></li>
                </ul>
            </aside>
        </aside>
    </div>
    <br>
</div>
@endsection
@section('foot')
@endsection