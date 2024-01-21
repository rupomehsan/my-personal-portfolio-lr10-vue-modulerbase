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
                            <h2>TITLE HEADING</h2>
                            <p> Dec 7, 2017</p>

                        </div>
                        <p class="px-3 py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde neque magnam
                            porro praesentium, maiores, amet iste est, dolorem quam commodi quod laudantium beatae.
                            Assumenda corporis itaque ratione maxime! Vitae natus minima consectetur voluptatem
                            voluptate id provident porro. Corporis delectus omnis ea voluptate at aperiam perferendis!
                            Illum maxime animi sit amet!</p>
                        <div class=" p-2" style="height:500px;">
                            <!-- <img src="{{asset('')}}" alt=""> -->
                            <div class="h-100 p-0">
                                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/dTFXufTgfOE"
                                    title="Build a Fullstack E-commerce using Next.js (react.js, mongo, tailwind, styled components)"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="p-3">
                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Dolor ad
                                neque minima
                                architecto
                                cum amet reiciendis vero provident ipsa placeat porro necessitatibus nobis quas,
                                voluptatem
                                expedita officia repellendus quibusdam. Eveniet odit omnis voluptatum dicta aliquid,
                                sequi
                                similique necessitatibus soluta sed, culpa voluptates, aut asperiores dignissimos cum.
                                Modi
                                molestiae delectus impedit perferendis totam eveniet a saepe voluptatibus molestias
                                natus,
                                optio, culpa iure deleniti velit ab corrupti possimus odit voluptates explicabo
                                praesentium
                                vero sed, ullam iusto! Facilis, placeat voluptates! Aut vitae, accusantium repellendus
                                numquam explicabo natus saepe, ea sit modi illum odit debitis autem! Atque, eos, earum
                                natus
                                reprehenderit placeat consequuntur totam deleniti, aspernatur eaque excepturi fugit est.
                                Sapiente id tenetur quaerat magnam, modi pariatur repellendus hic harum rerum omnis iste
                                adipisci exercitationem ipsa facilis eveniet, aperiam sed, eligendi tempora eos in error
                                delectus nam. Natus accusantium repellat totam numquam a id et voluptatibus, dicta
                                voluptate
                                aspernatur provident voluptatem voluptas architecto reprehenderit debitis! Enim odio
                                suscipit quis sit? Perferendis, ab autem, assumenda labore voluptatem corporis similique
                                quo
                                est eaque, iste saepe provident tenetur beatae eius ducimus dignissimos. Aspernatur
                                velit
                                soluta commodi, nesciunt facere nisi reiciendis ab iusto tenetur eius tempora eos sequi
                                accusantium dolorum veniam! Nobis accusamus quibusdam ullam. Nobis expedita obcaecati
                                pariatur dolorum provident rerum nemo repellendus, assumenda corrupti consectetur
                                facilis!
                                Laudantium quis nesciunt debitis dicta suscipit laborum commodi omnis laboriosam,
                                distinctio
                                nulla vero aut corporis dolores iste tempora impedit accusantium. Soluta dolor ratione
                                temporibus magni rem, maiores quisquam odit vitae delectus error ut expedita
                                consequuntur!
                                Accusamus fugit totam nobis beatae magni itaque error temporibus rerum, voluptate
                                provident
                                consequatur ipsum porro eligendi molestias velit tempora minima suscipit vel impedit
                                nisi
                                voluptatibus animi rem consectetur? Eligendi quas suscipit obcaecati, excepturi
                                repellendus
                                minima? Exercitationem ipsa impedit eligendi, quaerat quia quis temporibus eos deleniti
                                voluptas voluptatibus illo molestias similique ullam, possimus pariatur quasi earum.</p>
                        </div>
                    </div>


                    <div>
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
                                            <p style="color:gray">nano purse as fully me or point. Kindness own whatever
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
                            <form id="contactForm" class="contact100-form p-0 mt-3">
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
                                    <button class="submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


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
