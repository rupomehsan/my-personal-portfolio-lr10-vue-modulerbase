@extends('layouts.frontend',[])
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
                transform: translateY(100%);
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
        <x-section-title title="Blogs Details" />
    </div>
    <div class="row my80">
        <div class="col-md-9">

            <div class="row g-4">
                <div class="col-md-12">
                    <div class="card bg-dark text-white py-3 ">
                        <div class="px-3 d-flex justify-content-between align-items-center">
                            <h2>{{$blog->title}}</h2>
                            <p> {{$blog->created_at->format("d M, Y")}}</p>
                        </div>
                        @if ($blog->blog_type == 'Image')
                        <img src="{{asset($blog->thumbnail_image)}}" class="w-100 " alt="">
                        @else
                        <div class="p-2" style="height:500px;">
                            @php
                            $originalUrl = $blog->url;
                            $parsedUrl = parse_url($originalUrl);
                            parse_str($parsedUrl['query'], $queryParams);
                            $videoId = $queryParams['v'];
                            $embeddedUrl = "https://www.youtube.com/embed/{$videoId}";
                            @endphp
                            <div class="h-100 p-0">
                                <iframe class="w-100 h-100" src="{{$embeddedUrl}}"
                                    title="Build a Fullstack E-commerce using Next.js (react.js, mongo, tailwind, styled components)"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        @endif

                        <div class="p-3 text-white">
                            <p class="px-3 py-3">{!! $blog->description !!}</p>
                        </div>

                    </div>

                    <section id="commentSection">
                        <div id="">
                            <h3 class="border text-center py-2 my-2 text-white">Comments</h3>
                            <hr>
                            <div class="comments">
                                <div class="row justify-content-start align-items-center">
                                    <div class="col-md-2">
                                        <img class="rounded-circle" style="height:100px; width:100px"
                                            src="{{asset('assets/images/profile.JPG')}}" alt="">
                                    </div>
                                    <div class="col-md-8 p-0">
                                        <div class="text-white py-3 my-2">
                                            <p class="fw-bold">Mary R. Peterson</p>
                                            <p style="color:gray">nano purse as fully me or point. Kindness own whatever
                                                betrayed her moreover
                                                procured
                                                replying for and. Proposal indulged no do do sociable he throwing
                                                settling.me
                                            </p>
                                            <p>Sep 26, 2016 at 14:35</p>
                                        </div>

                                    </div>
                                    <div class="col-md-2"><button for="exampleInputEmail1">reply</button></div>
                                </div>
                                <hr>
                                <div class="reply ms-5">
                                    <div class="row justify-content-start align-items-center ">
                                        <div class="col-md-2">
                                            <img class="rounded-circle" style="height:100px; width:100px"
                                                src="{{asset('assets/images/profile.JPG')}}" alt="">
                                        </div>
                                        <div class="col-md-8 p-0">
                                            <div class="text-white py-3 my-2">
                                                <p class="fw-bold">Mary R. Peterson</p>
                                                <p style="color:gray">nano purse as fully me or point. Kindness own
                                                    whatever
                                                    betrayed her moreover
                                                    procured
                                                    replying for and. Proposal indulged no do do sociable he throwing
                                                    settling.me
                                                </p>
                                                <p>Sep 26, 2016 at 14:35</p>
                                            </div>

                                        </div>
                                        <div class="col-md-2"><button>reply</button></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>

                        <div class="write-comments">

                            <h3 class="border text-center py-2 my-2 text-white">WRITE A COMMENT</h3>
                            <div>
                                <form id="contactForm" class="contact100-form p-0 mt-3" @submit.prevent="submitHandler">
                                    <div class="wrap-input100 rs2-wrap-input100 validate-input mt-20 "
                                        data-validate="Type first name">
                                        <input class="input100" type="text" id="first-name" name="first-name"
                                            placeholder="First name">
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="wrap-input100 rs2-wrap-input100 validate-input mt-20 "
                                        data-validate="Type last name">
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

                                    <div class="wrap-input100 validate-input mt-20" data-validate="Message is required">
                                        <textarea id="message" class="input100" name="message"
                                            placeholder="Write your comments"></textarea>
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center w-100">
                                        <button type="submit" class="submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>



                </div>


            </div>

        </div>
        <div class="col-md-3">
            <div class="">
                <aside>
                    <p class="text-white text-center py-3 border">Categories</p>
                    <ul class="category p-0 my-3">
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                    </ul>


                    <p class="text-white text-center py-3 border">Recent Posts</p>
                    <ul class="category p-0 my-3">
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                    </ul>

                    <p class="text-white text-center py-3 border">populer Posts</p>
                    <ul class="category p-0 my-3">
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                    </ul>

                    <p class="text-white text-center py-3 border">Tags</p>
                    <ul class="category p-0 my-3">
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                        <li class="pill"> <a href="">Travel</a> </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</div>




@endsection
@push('custom-js')
<script src="{{asset('frontend/js/vue.js')}}"></script>
<script>
    new Vue({
          el:'#commentSection',
          data: () =>({
            name :'RUpomehsan'
        }),
        methods: {
            submitHandler(){
              let formData = new FormData(event.target)
              fetch('/api/blogs/bulk-action', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    // Handle the response from the server
                    console.log('Form submission successful');
                })
                .catch(error => {
                    // Handle any errors that occur during the submission
                    console.error('Error submitting form:', error);
                });
            }

        }
    })
</script>
@endpush
