@extends('layouts.frontend')
@section('content')
    <div id="bannerSection" class="overflow-hidden vh-100 ">
        <div class="back-circle-one"></div>
        <div class="back-circle-two"></div>
        <div class="back-circle-three"></div>
        <div class="back-circle-four"></div>
        <div class="back-circle-five"></div>
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-sm-10 col-md-8  col-xl-5">
                <div id="curcleWrapper" class="">
                    <div class="banner-image">
                        <div class="layer-one"></div>
                        <div class="layer-two"></div>
                        <div class="layer-three"></div>
                    </div>
                    <div class="laguage-image">
                        <div class="one" data-parallax='{"y":150, "x":0}'></div>
                        <div class="two" data-parallax='{"y":160, "x":50}'></div>
                        <div class="three" data-parallax='{"y":150, "x":90}'></div>
                        <div class="four" data-parallax='{"y":-10, "x":150}'></div>
                        <div class="five" data-parallax='{"y":-100, "x":150}'></div>
                        <div class="six" data-parallax='{"y":-150, "x":150}'></div>
                        <div class="seven" data-parallax='{"y":-150, "x":10}'></div>
                        <div class="eight" data-parallax='{"y":-150, "x":-150}'></div>
                        <div class="nine" data-parallax='{"y":-150, "x":-150}'></div>
                        <div class="ten" data-parallax='{"y":-50, "x":-150}'></div>
                        <div class="elaven" data-parallax='{"y":150, "x":-150}'></div>
                        <div class="twelve" data-parallax='{"y":150, "x":-150}'></div>

                    </div>

                </div>
            </div>

        </div>
    </div>


    <div id="aboutSection" class="my80">
        <div class="wrapper">
            <x-section-title title="about" />
            <div class="row justify-content-center">
                <div class="col-md-5" id="leftSiteContent">
                    <div class="left-site">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Introduce</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Education</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Hobbies</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                    <img src="{{ asset('assets/images/profile.jpg') }}"
                                        class="img-fluid box-shadow rounded p-1 w-75 border-success border" alt=""
                                        srcset="">
                                    <h5 class="mt-2"> ENGINNER MD EHSAN</h5>
                                    <p class="p-0">software enginner at <a href="https://techpark.org/"
                                            target="_blank">Techpark IT</a></p>
                                </div>

                                <div class="center">
                                    <div id="social-test">
                                        <ul class="social">
                                            <li>
                                                <a href="https://www.facebook.com/rupom.ehsan.5/" title=""><span
                                                        class="iconify" data-icon="logos:facebook"></span></a>
                                            </li>
                                            <li><a href="https://twitter.com/EhsanRupom" title=""><span
                                                        class="iconify" data-icon="devicon:twitter"></span></a></li>
                                            <li>
                                                <a href="https://www.youtube.com/channel/UChAz_f_ngfpsBTSC2OgrRug?view_as=subscriber"
                                                    title=""><span class="iconify"
                                                        data-icon="entypo-social:youtube-with-circle"></span></a>
                                            </li>
                                            <li><a href="https://github.com/rupomehsan" title=""><span
                                                        class="iconify" data-icon="devicon:github"></span></a></li>
                                            <li><a href="https://github.com/rupomehsan" title=""><span
                                                        class="iconify" data-icon="devicon:linkedin"></span></a></li>


                                        </ul>
                                    </div>
                                </div>
                                <hr class="my-2">
                                <div class="d-flex justify-content-between align-items-center mx-lg-5" id="cvPart">
                                    <p class="text-uppercase">Download my cv</p>
                                    <div class="downArrow bounce">
                                        <img width="40" height="40" alt=""
                                            src="{{ asset('assets/images/download-arrow.png') }}">
                                    </div>
                                    <a href="{{ asset('resume.pdf') }}" download="">
                                        <span class="iconify" data-icon="el:download" style="color: red;"
                                            data-width="30" data-height="30"></span>
                                    </a>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <h3 class="text-center">Education</h3>

                                <hr class="my-4">
                                <p><span>BSc -->></span> in Computer Science and Engineering(CSE) at Bangladesh
                                    Institute of science and technology <br /> Session : 2014 - 15 </p>
                                <p class="my-3"><span>Hsc -->></span> Tamirulmillat kamil madrasah <br />Session :
                                    2011-12,
                                    Group : Science</p>
                                </p>
                                <p><span>Ssc -->></span> Muradpur Islamia Alim madrasah <br />Session : 2009-10,
                                    Group : Science</p>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <h3 class="text-center">hobbies</h3>
                                <hr class="my-4">
                                <p><span>travelling -->></span> " I love to travel because not only is it the ultimate
                                    adventure but it also exposes you to new types of people, different ways of
                                    living, and opens up your mind. I just like to walk around in beautiful places
                                    that resemble the chareteritics of paradies that are explained in the holy quran."</p>
                                <p><span>gaming -->></span>i would like to Play game in my free times </p>
                                <p><span>sports -->></span>Playing individual sports (criket,football,badminton, etc.)
                                </p>

                                <p><span>technology -->></span>Keeping up with the latest developments in technology</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-site">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-about-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-about" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Introduce</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link text-uppercase" id="pills-profession-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profession" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">PROFESSION</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link text-uppercase" id="pills-service-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-service" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">service</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-about" role="tabpanel"
                                aria-labelledby="pills-about-tab">
                                <div class="">
                                    <h4 style="padding-bottom: 30px;margin-top: 10px;" class="text-center">SOME WORDS
                                        ABOUT
                                        ME</h4>
                                    <hr class="my-4">
                                    <p>
                                        HELLO. I'M RUPOM EHSAN FROM BNAGLADESH. I AM A FULLSTACK WEB DEVELOPER WORKING
                                        WITH LOCAL AND INTERNATIONAL CLIENTS SINCE 2018. I CAN DESIGN OR REDESIGN YOUR
                                        EXISITING WEBSITES OR WEB APPLICATION.BUILD SOCIAL PROFILES , GAIN REVENUE AND
                                        PROFITS.ITS NOT ONLY MY PROFESSION ITS MY PASSION.<br>
                                        <span>MISSION--&gt;</span>WE DELIVER UNIQUE QUALITY AND RESPONSIVE DESIGN FOR
                                        WEBSITE.<br>
                                        <span>MISSION--&gt;</span>WE ARE PROVIDE USER FRIENDLY ENTERFACE, PIXEL IDEALIZE
                                        FORMATE,W3C LEGITIMATE CODE TO THE USER. <br>
                                        <span>MISSION--&gt;</span> WE FOLLOW ALL THE STANDARDS OF GOOGLE SEARCH ENGINE
                                        OPTIMIZATION.<br>
                                        <span>MISSION--&gt;</span> WE FOLLOW ALL THE STANDARDS OF GOOGLE SEARCH ENGINE
                                        OPTIMIZATION.<br>

                                    </p>
                                </div>



                            </div>

                            <div class="tab-pane fade" id="pills-profession" role="tabpanel"
                                aria-labelledby="pills-profession-tab">
                                <h4 class="text-center">Profession </h4>
                                <hr class="my-4">
                                <div>
                                    <p>
                                        <span>Techpark IT -->></span>
                                        Working as a software engineer(fullstack web developer) Location — Mirpur 6,
                                        October 2023 - PRESENT.
                                    </p>
                                    <p>
                                        <span>CCN Infotech Ltd -->></span>
                                        Working as a junior software engineer , as well as frontend and backend both
                                        technology at CCN Infotech Ltd, Location — Bashundhara R/A
                                        June 2022 - Sep 2023.
                                    </p>

                                    <p>
                                        <span> Project X Ltd -->></span>
                                        I worked as a Backend developer at Project X Ltd, Location — Khilkeht,nikunja 2,
                                        September 2021 - May 2022.
                                    </p>

                                </div>
                                <hr class="my-4">
                                <p class="text-center">YOU CAN HIRE ME ON</p>
                                <hr class="my-4">

                                <div class="social2">
                                    <ul>
                                        <li>
                                            <a target="_blank" href="https://www.freelancer.com/u/rupomehsan">
                                                <img src="{{ asset('assets') }}/images/freelancer.jpg">
                                            </a>
                                            <span>FREELANCER</span>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.fiverr.com/rupom_ehsan?up_rollout=true">
                                                <img src="{{ asset('assets') }}/images/fiver.jpg">
                                            </a>
                                            <span>FIVER</span>
                                        </li>
                                        <li>
                                            <a target="_blank"
                                                href="https://www.upwork.com/freelancers/~010e8a7dea092d1282">
                                                <img src="{{ asset('assets') }}/images/upwork.jpg">
                                            </a>
                                            <span>UPWORK</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-service" role="tabpanel"
                                aria-labelledby="pills-service-tab">
                                <h4 class="text-center">service</h4>
                                <hr class="my-4">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="serviceBox">
                                            <div class="service-icon"><span class="iconify" data-icon="mdi:web"
                                                    style="color: red;" data-width="40" data-height="40"></span></div>
                                            <p class="title">Web Design</p>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="serviceBox">
                                            <div class="service-icon"><span class="iconify" data-icon="bi:server"
                                                    style="color: red;" data-width="40" data-height="40"></span></i>
                                            </div>
                                            <p class="title">Web Development</p>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="serviceBox">
                                            <div class="service-icon"><span class="iconify" data-icon="fa6-solid:rocket"
                                                    style="color: red;" data-width="40" data-height="40"></span>
                                            </div>
                                            <p class="title">web view MOBILE APP</p>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="serviceBox">
                                            <div class="service-icon"><span class="iconify" data-icon="mdi:web"
                                                    style="color: red;" data-width="40" data-height="40"></span></div>
                                            <p class="title">Digital Marketing</p>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="serviceBox">
                                            <div class="service-icon"><span class="iconify" data-icon="bi:server"
                                                    style="color: red;" data-width="40" data-height="40"></span></i>
                                            </div>
                                            <p class="title">Ecommerce</p>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="serviceBox">
                                            <div class="service-icon"><span class="iconify" data-icon="fa6-solid:rocket"
                                                    style="color: red;" data-width="40" data-height="40"></span>
                                            </div>
                                            <p class="title">boosting</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div id="skillSection" class="mt-3">
        <div class="wrapper">
            <x-section-title title="skill" />
            <div>
                <div class="left-site">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-programing-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-programing" type="button" role="tab"
                                aria-controls="pills-programing" aria-selected="true">PROGRAMING</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-language-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-language" type="button" role="tab"
                                aria-controls="pills-language" aria-selected="false">LANGUAGE</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-others-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-others" type="button" role="tab"
                                aria-controls="pills-others" aria-selected="false">Others</button>
                        </li>
                    </ul>
                    <div class="tab-content my-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-programing" role="tabpanel"
                            aria-labelledby="pills-programing-tab">
                            <div class="pricing-wrap">
                                <div class="theme-container">
                                    <div class="row">
                                        <div class="col-md-12  main-row">
                                            <div class="pricing-box clrbg-before clrbg-after transition">
                                                <h4>programing skills</h4>
                                                <hr class="my-2">
                                                <div class="row mt70">
                                                    <div class="col-md-6">
                                                        <div class="progress green">
                                                            <h3 class="progress-title">HTML</h3>
                                                            <div class="progress-bar html"
                                                                style="width:85%; background:#21da9a;">
                                                                <div class="progress-value " style="right: 40px;">85%
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress pink">
                                                            <h3 class="progress-title">CSS</h3>
                                                            <div class="progress-bar css"
                                                                style="width:75%; background:#ff1170;">
                                                                <div class="progress-value" style="right: 60px;">75%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="progress pink">
                                                            <h3 class="progress-title">php</h3>
                                                            <div class="progress-bar php"
                                                                style="width:75%; background:#ff1170;">
                                                                <div class="progress-value" style="right: 100px;">75%
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress green">
                                                            <h3 class="progress-title">Laravel</h3>
                                                            <div class="progress-bar laravel"
                                                                style="width:80%; background:#21da9a;">
                                                                <div class="progress-value" style="right: 70px;">80%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="progress green">
                                                            <h3 class="progress-title">javasript</h3>
                                                            <div class="progress-bar javascript"
                                                                style="width:70%; background:#21da9a;">
                                                                <div class="progress-value" style="right: 100px;">70%
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress pink">
                                                            <h3 class="progress-title">React js</h3>
                                                            <div class="progress-bar react"
                                                                style="width:60%; background:#ff1170;">
                                                                <div class="progress-value" style="right: 150px;">60%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="progress green">
                                                            <h3 class="progress-title">sql</h3>
                                                            <div class="progress-bar sql"
                                                                style="width:70%; background:#21da9a;">
                                                                <div class="progress-value" style="right: 90px;">70%</div>
                                                            </div>
                                                        </div>
                                                        <div class="progress pink">
                                                            <h3 class="progress-title">Vue js</h3>
                                                            <div class="progress-bar vue"
                                                                style="width:85%; background:#ff1170;">
                                                                <div class="progress-value" style="right: 30px;">85%</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-others" role="tabpanel" aria-labelledby="pills-others-tab">
                            <div class="pricing-wrap">
                                <div class="theme-container">
                                    <div class="row">
                                        <div class="col-md-12  main-row">
                                            <div class="pricing-box clrbg-before clrbg-after transition">
                                                <h4>Ohters skills</h4>
                                                <hr class="my-2">
                                                <div class="row mt70 justify-content-center">
                                                    <div class="col-md-6">
                                                        <div class="progress green">
                                                            <h3 class="progress-title">MS word</h3>
                                                            <div class="progress-bar"
                                                                style="width:65%; background:#21da9a;">
                                                                <div class="progress-value" style="right: 120px;">65%
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress pink">
                                                            <h3 class="progress-title">ms excell</h3>
                                                            <div class="progress-bar"
                                                                style="width:60%; background:#ff1170;">
                                                                <div class="progress-value" style="right: 150px;">60%
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress green">
                                                            <h3 class="progress-title">ms power point</h3>
                                                            <div class="progress-bar"
                                                                style="width:50%; background:#21da9a;">
                                                                <div class="progress-value" style="right: 190px;">50%
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress pink">
                                                            <h3 class="progress-title">photoshop</h3>
                                                            <div class="progress-bar"
                                                                style="width:65%; background:#ff1170;">
                                                                <div class="progress-value" style="right: 130px;">65%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="tab-pane fade" id="pills-language" role="tabpanel"
                            aria-labelledby="pills-language-tab">
                            <div class="pricing-wrap">
                                <div class="theme-container">
                                    <div class="row">
                                        <div class="col-md-12  main-row">
                                            <div class="pricing-box clrbg-before clrbg-after transition">
                                                <h4>language skills</h4>
                                                <hr class="my-2">
                                                <div class="row mt70 justify-content-center">
                                                    <div class="col-md-6">
                                                        <div class="progress green">
                                                            <h3 class="progress-title">Bangla</h3>
                                                            <div class="progress-bar"
                                                                style="width:99%; background:#21da9a;">
                                                                <div class="progress-value" style="right: -10px;">99%
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress pink">
                                                            <h3 class="progress-title">English</h3>
                                                            <div class="progress-bar"
                                                                style="width:70%; background:#ff1170;">
                                                                <div class="progress-value" style="right: 60px;">70%</div>
                                                            </div>
                                                        </div>
                                                        <div class="progress pink">
                                                            <h3 class="progress-title">arabic</h3>
                                                            <div class="progress-bar"
                                                                style="width:50%; background:#ff1170;">
                                                                <div class="progress-value" style="right: 90px;">50%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <hr>

    <div id="portfolioSection" class="mt-3">
        <div class="wrapper">
            <x-section-title title="Portfolio" />

            <div class="left-site my-5">
                <div class="d-flex align-items-center">

                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">

                            <div class="row  skeleton">

                                <template v-if="loaded">
                                    <div class="col-md-4 my-2" v-for="project in allProjects">
                                        <div class=" overflow-hidden">
                                            <p>@{{ project.name }}</p>
                                            <img :src="project.images ? project.images[0] : 'dummy.png'" height="200"
                                                class="w-100" alt="" width="200" style="object-fit: cover">
                                            <a :href="'project-details/' + project.slug" target="_blank" class="link">
                                                <span data-hover="click here">See Details</span>
                                            </a>
                                            <a :href="project.link" class="link" target="_blank">
                                                <span data-hover="click link">Project link</span>
                                            </a>
                                        </div>
                                    </div>
                                </template>
                                <template v-else>
                                    <div class="col-md-4" v-for="i in allProjects.length" :key="i">
                                        <div class="cards">
                                            <div class="card is-loading">
                                                <div class="image"></div>
                                                <div class="content">
                                                    <h2></h2>
                                                    <p></p>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 m-auto my-5">
                    <a href="{{ url('all-projects') }}" class="link all-btn" target="_blank">
                        <span data-hover="click here" class="py-3 text-gray">see my all porjects</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>


    <div id="blogSection" class="my80">
        <div class="wrapper">
            <x-section-title title="blogs" />
            <div class="left-site my-5">
                <div class="d-flex align-items-center">

                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="row  skeleton">

                                <template v-if="loaded">
                                    <div class="col-md-4 my-2" v-for="blog in allBlogs">
                                        <p>@{{ blog.title }}</p>
                                        <div class=" overflow-hidden">
                                            <img :src="blog.thumbnail_image" height="200" class="w-100" alt=""
                                                width="200">
                                            <a :href="'blog-details/' + blog.slug" class="link" target="_blank">
                                                <span data-hover="click here">See Details</span>
                                            </a>
                                        </div>
                                    </div>
                                </template>
                                <template v-else>
                                    <div class="col-md-4" v-for="i in 9" :key="i">
                                        <div class="cards">
                                            <div class="card is-loading">
                                                <div class="image"></div>
                                                <div class="content">
                                                    <h2></h2>
                                                    <p></p>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-25 m-auto my-5">
                <a href="{{ url('all-blogs') }}" class="link all-btn" target="_blank">
                    <span data-hover="click here" class="py-3 text-gray">see my all blogs</span>
                </a>
            </div>

        </div>
    </div>
    <hr>
    <div id="clientSection" class="my80">
        <div class="wrapper">
            <x-section-title title="client" />

            <div class="row wrapper">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('assets') }}/images/client-1.jpg" alt="">
                            </div>
                            <h3 class="title">Ravi M.</h3>
                            <p class="description"> "I was most impressed by the quality of work and communication."Good
                                Job!!... Will hire him again.</p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">from : US,TEXAS.</h3>
                                    <span class="post">Web Developer</span>
                                </div>
                                <ul class="rating">
                                    <h3 class="name text-center">rating</h3>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('assets') }}/images/client-2.jpg" alt="">
                            </div>
                            <h3 class="title">ankit mozumder</h3>
                            <p class="description">“I think the main thing that distinguishes Website Design and how
                                seriously they take their work.”</p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">from : india,jaipur</h3>
                                    <span class="post">management builder</span>
                                </div>
                                <ul class="rating">
                                    <h3 class="name text-center">rating</h3>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('assets') }}/images/client-1.jpg" alt="">
                            </div>
                            <h3 class="title">Ravi M.</h3>
                            <p class="description"> "I was most impressed by the quality of work and communication."Good
                                Job!!... Will hire him again.</p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">from : US,TEXAS.</h3>
                                    <span class="post">Web Developer</span>
                                </div>
                                <ul class="rating">
                                    <h3 class="name text-center">rating</h3>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="{{ asset('assets') }}/images/client-2.jpg" alt="">
                            </div>
                            <h3 class="title">ankit mozumder</h3>
                            <p class="description">“I think the main thing that distinguishes Website Design and how
                                seriously they take their work.”</p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name">from : india,jaipur</h3>
                                    <span class="post">management builder</span>
                                </div>
                                <ul class="rating">
                                    <h3 class="name text-center">rating</h3>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                    <span class="iconify" data-icon="ic:baseline-star-rate"
                                        style="color: orange;"></span>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <section class="contact contact-bg my80" id="contact">
        <div class="wrapper">
            <x-section-title title="Contact" />
            <div class="container-contact100">
                <div class="wrap-contact100">
                    <form id="contactForm" class="contact100-form">
                        <div class="wrap-input100 rs2-wrap-input100 validate-input mt-20 "
                            data-validate="Type first name">
                            <input class="input100" type="text" id="first-name" name="first-name"
                                placeholder="First name">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 rs2-wrap-input100 validate-input mt-20 " data-validate="Type last name">
                            <input class="input100" type="text" id="last-name" name="last-name"
                                placeholder="Last name">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input mt-20"
                            data-validate="Valid email is required: ex@abc.xyz">
                            <input id="email" class="input100" type="email" name="email"
                                placeholder="Enter your email">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 mt-20">
                            <input id="phone" class="input100" type="number" name="phone"
                                placeholder="Enter your phone">
                            <span class="focus-input100"></span>
                        </div>
                        <!--  <label class="label-input100" for="message">Message *</label> -->
                        <div class="wrap-input100 validate-input mt-20" data-validate="Message is required">
                            <textarea id="message" class="input100" name="message" placeholder="Write your opinion"></textarea>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center w-100">
                            <button class="submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </section>
@endsection

@push('custom-js')
    <script src="{{ asset('frontend/js/vue.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        // Default Configuration
        $(document).ready(function() {
            toastr.options = {
                'closeButton': true,
                'debug': false,
                'newestOnTop': false,
                'progressBar': false,
                'positionClass': 'toast-top-right',
                'preventDuplicates': false,
                'showDuration': '1000',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut',
            }
        });
    </script>
    <script>
        new Vue({
            el: '#mainWrapper',
            data: () => ({
                allBlogs: [],
                allProjects: [],
                loaded: false
            }),
            created: async function() {

                await this.getAllBlogs()
                await this.getAllProjects()

                let that = this
                setTimeout(() => {
                    that.loaded = true
                }, 2000)

            },
            methods: {
                async getAllBlogs() {
                    const response = await axios.get('/api/get-all-blogs?get_all=1');
                    if (response.data.status === 'success') {
                        this.allBlogs = response.data?.data
                    }
                },
                async getAllProjects() {
                    const response = await axios.get('/api/v1/projects?get_all=1');
                    if (response.data.status === 'success') {
                        this.allProjects = response.data?.data
                    }
                }

            }
        })

        setTimeout(() => {
            ClinetSlider()
            textAnimation()
        }, 2000);
    </script>
@endpush
