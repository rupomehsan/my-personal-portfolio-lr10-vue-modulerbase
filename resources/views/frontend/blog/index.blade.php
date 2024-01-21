@extends('layouts.frontend')
@section('content')

<div>
    <style>
        body {
            background: #000;
        }

        #loginPage {
            width: 100vw;
            height: 320px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2px;
            flex-wrap: wrap;
            overflow: hidden;
        }

        #loginPage::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(#000, rgba(255, 0, 0, 0.445), #000);
            animation: animate 5s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: translateY(-30%);
            }

            100% {
                transform: translateY(50%);
            }
        }

        #loginPage span {
            position: relative;
            display: block;
            width: calc(6.25vw - 2px);
            height: calc(6.25vw - 2px);
            background: #181818;
            z-index: 2;
            transition: 1.5s;
        }

        #loginPage span:hover {
            background: rgba(255, 1, 1, 0.582);
            transition: 0s;
        }

        #loginPage .signin {
            position: absolute;
            width: 400px;
            background: #222;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 9);
        }

        #loginPage .signin .content {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 40px;
        }

        #loginPage .signin .content h2 {
            font-size: 2em;
            color: rgb(247, 247, 247);
            text-transform: uppercase;
        }

        #loginPage .signin .content .form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        @media (max-width: 900px) {
            #loginPage span {
                width: calc(10vw - 2px);
                height: calc(10vw - 2px);
            }
        }

        @media (max-width: 600px) {
            #loginPage span {
                width: calc(20vw - 2px);
                height: calc(20vw - 2px);
            }
        }

        div#siteTitle {
            position: absolute;
            top: 146px;
            width: 100%;
            z-index: 9;
        }
    </style>
    <section id="loginPage"> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
    </section>
    <div class="row" id="siteTitle">
        <x-section-title title="all blogs" />
    </div>
    <div class="row my80">
        <div class="col-md-4">

            <div class="column">
                <!-- Post-->
                <div class="post-module">
                    <!-- Thumbnail-->
                    <div class="thumbnail">
                        <div class="date">
                            <div class="day">27</div>
                            <div class="month">Mar</div>
                        </div>
                        <div style="height:300px;">
                            <iframe class="w-100 h-100" src="https://www.youtube.com/embed/c_-b_isI4vg"
                                title="Full Stack Airbnb Clone with Next.js 13 App Router: React, Tailwind, Prisma, MongoDB, NextAuth 2023"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                        <div class="category"> <a href="{{url('blog-details')}}">Details</a></div>
                        <h1 class="title">City Lights in New York</h1>
                        <h2 class="sub_title">The city that never sleeps.</h2>
                        <p class="description">New York, the largest city in the U.S., is an architectural
                            marvel with
                            plenty of historic monuments, magnificent buildings and countless dazzling
                            skyscrapers.</p>
                        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins
                                ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39
                                    comments</a></span></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">

            <div class="column">
                <!-- Post-->
                <div class="post-module">
                    <!-- Thumbnail-->
                    <div class="thumbnail">
                        <div class="date">
                            <div class="day">27</div>
                            <div class="month">Mar</div>
                        </div>
                        <div style="height:300px;">
                            <!-- <img src="{{asset('')}}" alt=""> -->
                            <div class="h-100 p-0">
                                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/dTFXufTgfOE"
                                    title="Build a Fullstack E-commerce using Next.js (react.js, mongo, tailwind, styled components)"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                        <div class="category"> <a href="{{url('blog-details')}}">Details</a></div>
                        <h1 class="title">City Lights in New York</h1>
                        <h2 class="sub_title">The city that never sleeps.</h2>
                        <p class="description ">New York, the largest city in the U.S., is an architectural
                            marvel with
                            plenty of historic monuments, magnificent buildings and countless dazzling
                            skyscrapers.</p>
                        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins
                                ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39
                                    comments</a></span></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">

            <div class="column">
                <!-- Post-->
                <div class="post-module">
                    <!-- Thumbnail-->
                    <div class="thumbnail">
                        <div class="date">
                            <div class="day">27</div>
                            <div class="month">Mar</div>
                        </div><img
                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" />
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                        <div class="category"> <a href="{{url('blog-details')}}">Details</a></div>
                        <h1 class="title">City Lights in New York</h1>
                        <h2 class="sub_title">The city that never sleeps.</h2>
                        <p class="description ">New York, the largest city in the U.S., is an architectural
                            marvel with
                            plenty of historic monuments, magnificent buildings and countless dazzling
                            skyscrapers.</p>
                        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins
                                ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39
                                    comments</a></span></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection
