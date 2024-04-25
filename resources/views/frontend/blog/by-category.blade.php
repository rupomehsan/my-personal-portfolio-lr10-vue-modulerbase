@extends('layouts.frontend')
@section('content')
    <div id="AllBlogs">

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
        <div class="row g-4 my80 skeleton mx-5" id="baseUrl" data-base-url="{{ asset('') }}">
            <div class="col-md-9">
                <template v-if="loaded">
                    <div class="col-md-4 " v-for="item in allBlogs.data">
                        <div class="border border-success overflow-hidden">
                            <img :src="`${baseUrl}${item.thumbnail_image}`" height="200" class="w-100" alt=""
                                width="200">
                            <div>
                                <h5 class="text-white p-2 text-center">@{{ item.title }}</h5>
                                <p class="border border-start-0 border-end-0  border-light text-center py-2 text-white">uses
                                    technology</p>

                                <p class="text-white p-2" v-html="item.description"></p>
                            </div>

                            <a :href="'blog-details/' + item.slug" class="link" target="_blank">
                                <span data-hover="click here">See Details</span>
                            </a>
                        </div>
                    </div>
                </template>

                <template v-else>
                    <div class="row skeleton">
                        <div class="col-md-4" v-for="i in 9">
                            <div class="cards">
                                <div class="card is-loading">
                                    <div class="image"></div>
                                    <div class="content">
                                        <p></p>
                                        <p></p>
                                        <h2></h2>
                                        <h2></h2>
                                        <p></p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <div class="col-md-3">
                <div class="">
                    <aside>
                        <p class="text-white text-center py-3 border">Categories</p>
                        <ul class="category p-0 my-3">
                            <li class="pill" v-for="category in allCategories" :key="category.id"> <a
                                    :href="'/blogs-by-category/' + category.slug">@{{ category.title }}</a> </li>
                        </ul>


                        <p class="text-white text-center py-3 border">Recent Posts</p>
                        <ul class="category p-0 my-3">
                            <li class="pill" v-for="category in allCategories" :key="category.id"> <a
                                    href="">@{{ category.title }}</a> </li>
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
    <script src="{{ asset('frontend/js/vue.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"></script>
    <script>
        new Vue({
            el: '#AllBlogs',
            data: () => ({
                allBlogs: [],
                loaded: false,
                allCategories: [],
                baseUrl: document.getElementById('baseUrl')?.getAttribute('data-base-url')
            }),
            created: async function() {

                await this.getAllBlogs()
                await this.getAllBlogTopCategories()
                let that = this
                setTimeout(() => {
                    that.loaded = true
                }, 2000)



            },
            methods: {
                async getAllBlogs() {
                    const response = await axios.get('/api/get-all-blogs');
                    if (response.data.status === 'success') {
                        this.allBlogs = response.data?.data
                    }
                },
                async getAllBlogTopCategories() {
                    const response = await axios.get(
                        '/api/v1/get-blog-top-categories');
                    if (response.data.status == 'success') {
                        this.allCategories = response.data?.data
                    }

                }

            }
        })
    </script>
@endpush
@push('custom-css')
    <style>
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
            height: 50%;
            background: linear-gradient(#000, rgba(255, 0, 0, 0.445), #000);
            animation: animate 5s linear infinite;
            z-index: -1;
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
@endpush
