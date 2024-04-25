@extends('layouts.frontend', [])
@section('content')
    <div id="blogDetails">

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
        <div class="row my80 mx-5">
            <div class="col-md-9">

                <div class="row  justify-content-center">
                    <div class="col-md-9">

                        <div class="row g-4 skeleton">
                            <div class="col-md-12">
                                <div v-if="loaded" class="card bg-dark text-white py-3 ">
                                    <div class="px-3 d-flex justify-content-between align-items-center">
                                        <h2>@{{ blogDetails.title }}</h2>
                                    </div>
                                    <ul class="d-flex gap-3">
                                        <li><span class="icon flaticon-clock-3"></span>@{{ new Date(blogDetails.created_at).toDateString() }}
                                        </li>
                                        <li><span class="icon flaticon-business-and-finance"></span>Created By : Admin</li>
                                        <li><span class="icon flaticon-eye"></span>@{{ blogDetails.views_count }} Views</li>
                                    </ul>
                                    <div id="baseUrl" data-base-url="{{ asset('') }}"
                                        class="d-column  justify-content-center align-items-center  gap-3"
                                        style="object-fit:cover">
                                        <a :href="`${baseUrl}${blogDetails.thumbnail_image}`" target="_blank">
                                            <img :src="`${baseUrl}${blogDetails.thumbnail_image}`" height="500"
                                                :alt="blogDetails.thumbnail_image" class=" w-100 p-2"
                                                style="object-fit: cover">
                                        </a>
                                    </div>


                                    <ul class="nav nav-pills mb-3">
                                        <li>
                                            <button class="submit-btn"
                                                @click.prevent="activeTab('Description')">Description</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="submit-btn" @click.prevent="activeTab('Video')"> See
                                                Video</button>

                                        </li>
                                        <li class="nav-item">
                                            <button class="submit-btn"
                                                @click.prevent="activeTab('Comments')">Comments</button>

                                        </li>
                                    </ul>
                                    <div class="p-3">
                                        <template v-if="activeMenu.Description">
                                            <div v-html="blogDetails.description"></div>
                                        </template>
                                        <template v-if="activeMenu.Video">
                                            <template v-if="blogDetails.blog_type == 'Youtube_link'">
                                                <template v-if="youtubeLink">
                                                    <iframe class="w-100" height="300" :src="youtubeLink"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        referrerpolicy="strict-origin-when-cross-origin"
                                                        allowfullscreen></iframe>
                                                </template>
                                            </template>

                                        </template>
                                        <template v-if="activeMenu.Comments">
                                            <section id="commentSection">
                                                <div id="">
                                                    <h3 class="border text-center py-2 my-2 text-white">Comments</h3>
                                                    <hr>
                                                    <div class="comments">
                                                        <div class="row justify-content-start align-items-center">
                                                            <template v-for="comment in blogDetails.comments">
                                                                <div class="col-md-2">
                                                                    <img class="rounded-circle"
                                                                        style="height:100px; width:100px"
                                                                        src="{{ asset('dummy.png') }}" alt="">
                                                                </div>
                                                                <div class="col-md-8 p-0">
                                                                    <div class="text-white py-3 my-2">
                                                                        <p class="fw-bold">@{{ comment.name }}</p>
                                                                        <p style="color:gray">@{{ comment.comment }}</p>
                                                                        </p>
                                                                        <p>@{{ new Date(comment.created_at).toLocaleString() }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    {{-- <button class="btn btn-sm btn-info"
                                                                    class="btn btn-sm btn-info">reply</button> --}}
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="write-comments">

                                                    <h3 class="border text-center py-2 my-2 text-white">WRITE A COMMENT</h3>
                                                    <div>
                                                        <form id="commentForm" class="contact100-form p-0 mt-3"
                                                            @submit.prevent="submitHandler">
                                                            <input type="hidden" v-model="slug" name="slug">
                                                            <div class="wrap-input100  rs2-wrap-input100 validate-input mt-20"
                                                                style="border: none" data-validate="Type last name">
                                                                <input class="input100" type="text" id="last-name"
                                                                    name="name" placeholder="Name"
                                                                    :class="{ 'border-warning': errorMessage.name }">
                                                                <span class="focus-input100"></span>
                                                                <p class="text-warning">@{{ errorMessage.name }}</p>
                                                            </div>

                                                            <div class="wrap-input100 rs2-wrap-input100  validate-input mt-20 "
                                                                data-validate="Type last name" style="border: none">
                                                                <input class="input100" type="text" name="phone"
                                                                    placeholder="Phone">
                                                                <span class="focus-input100"></span>
                                                            </div>
                                                            <div class="wrap-input100  validate-input mt-20 "
                                                                data-validate="Type last name">
                                                                <input class="input100" type="text" name="email"
                                                                    placeholder="Email">
                                                                <span class="focus-input100"></span>
                                                            </div>



                                                            <div class="wrap-input100 validate-input mt-20"
                                                                data-validate="Message is required">
                                                                <textarea id="comment" class="input100" name="comment" placeholder="Write your comments"
                                                                    :class="{ 'border-warning': errorMessage.comment }"></textarea>
                                                                <span class="focus-input100"></span>
                                                            </div>
                                                            <p class="text-warning">@{{ errorMessage.comment }}</p>
                                                            <div
                                                                class="d-flex justify-content-center align-items-center w-100">
                                                                <button type="submit" class="submit-btn">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </section>
                                        </template>
                                    </div>

                                </div>
                                <template v-else>
                                    <div class="cards">
                                        <div class="card is-loading">
                                            <div class="image"></div>
                                            <div class="content">
                                                <h2></h2>
                                                <p></p>
                                                <p></p>
                                                <h2></h2>
                                                <p></p>
                                                <p></p>
                                                <h2></h2>
                                                <p></p>
                                                <p></p>
                                                <p></p>
                                                <p></p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </template>
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
@push('custom-css')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endpush
@push('custom-js')
    <script src="{{ asset('frontend/js/vue.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        // Default Configuration
        document.addEventListener("DOMContentLoaded", function() {
            var toastrOptions = {
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
            el: '#blogDetails',
            data: () => ({
                blogDetails: {},
                loaded: false,
                slug: '',
                baseUrl: document.getElementById('baseUrl').getAttribute('data-base-url'),
                errorMessage: {
                    comment: '',
                    name: '',
                },
                activeMenu: {
                    Description: true,
                    Video: false,
                    Comments: false,

                },
                youtubeLink: '',
                allCategories: []
            }),
            created: async function() {
                var currentUrl = window.location.href;
                var parts = currentUrl.split("/");
                this.slug = parts[parts.length - 1]
                await this.getSinlgeProject(this.slug)
                await this.getAllBlogTopCategories()


                let that = this
                setTimeout(() => {
                    that.loaded = true
                }, 2000)


            },
            methods: {
                async getSinlgeProject() {
                    const response = await axios.get(`/api/blog-details/${this.slug}`);
                    if (response.data.status === 'success') {
                        this.blogDetails = response.data.data
                        if (this.blogDetails.blog_type == 'Youtube_link' && this.blogDetails.url) {
                            this.convertToYoutubeUrl(this.blogDetails?.url)
                        }
                    }
                },

                async submitHandler() {
                    try {
                        const formData = new FormData(event.target);
                        const response = await axios.post('/api/blog-comment', formData);

                        if (response.data.status == 'success') {
                            toastr.success("successfully added comment");
                            console.log(response);
                            document.getElementById('commentForm').reset();
                            this.getSinlgeProject(this.slug)
                            Object.keys(this.errorMessage).forEach(field => {
                                this.errorMessage[field] = '';
                            });
                        }
                    } catch (error) {
                        if (error.response) {
                            let errResponse = error?.response?.data;
                            if (errResponse.status == 'validation_error') {
                                Object.keys(this.errorMessage).forEach(field => {
                                    this.errorMessage[field] = '';
                                });
                                let errFields = errResponse.errors;
                                for (let field in errFields) {
                                    if (this.errorMessage.hasOwnProperty(field)) {
                                        this.errorMessage[field] = errFields[field][0];
                                    }
                                }
                            }
                        }
                    }
                },
                activeTab(tab) {
                    this.activeMenu = {
                        Description: tab === 'Description',
                        Video: tab === 'Video',
                        Comments: tab === 'Comments'
                    };
                },

                convertToYoutubeUrl(url) {
                    if (url.includes('youtube.com/watch?v=')) {
                        const videoId = url.split('v=')[1];
                        const embeddedUrl = `https://www.youtube.com/embed/${videoId}`;
                        this.youtubeLink = embeddedUrl;
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
