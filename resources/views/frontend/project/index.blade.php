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
            z-index: -1;
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
        <x-section-title title="All Projects" />
    </div>
    <div class="row g-4 my80">
        <div class="col-md-4 ">
            <div class="border border-success overflow-hidden">
                <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200" class="w-100" alt=""
                    width="200">
                <div>
                    <h5 class="text-white p-2 text-center">Lorem ipsum dolor sit amet.</h5>
                    <p class="border border-start-0 border-end-0  border-light text-center py-2 text-white">uses
                        technology</p>

                    <p class="text-white p-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio a facere
                        maiores cumque possimus
                        veniam, sequi consequuntur non repudiandae voluptas?</p>
                </div>
                <a href="#" class="link">
                    <span data-hover="click here">project link</span>
                </a>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="border border-success overflow-hidden">
                <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200" class="w-100" alt=""
                    width="200">
                <div>
                    <h5 class="text-white p-2 text-center">Lorem ipsum dolor sit amet.</h5>
                    <p class="border border-start-0 border-end-0  border-light text-center py-2 text-white">uses
                        technology</p>

                    <p class="text-white p-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio a facere
                        maiores cumque possimus
                        veniam, sequi consequuntur non repudiandae voluptas?</p>
                </div>
                <a href="#" class="link">
                    <span data-hover="click here">project link</span>
                </a>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="border border-success overflow-hidden">
                <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200" class="w-100" alt=""
                    width="200">
                <div>
                    <h5 class="text-white p-2 text-center">Lorem ipsum dolor sit amet.</h5>
                    <p class="border border-start-0 border-end-0  border-light text-center py-2 text-white">uses
                        technology</p>

                    <p class="text-white p-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio a facere
                        maiores cumque possimus
                        veniam, sequi consequuntur non repudiandae voluptas?</p>
                </div>
                <a href="#" class="link">
                    <span data-hover="click here">project link</span>
                </a>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="border border-success overflow-hidden">
                <img src="{{asset('assets/images/portfolio/landing1.png')}}" height="200" class="w-100" alt=""
                    width="200">
                <div>
                    <h5 class="text-white p-2 text-center">Lorem ipsum dolor sit amet.</h5>
                    <p class="border border-start-0 border-end-0  border-light text-center py-2 text-white">uses
                        technology</p>

                    <p class="text-white p-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio a facere
                        maiores cumque possimus
                        veniam, sequi consequuntur non repudiandae voluptas?</p>
                </div>
                <a href="#" class="link">
                    <span data-hover="click here">project link</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
