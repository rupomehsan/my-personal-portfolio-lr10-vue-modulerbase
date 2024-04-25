@extends('layouts.frontend')
@section('content')
    <div id="AllProjects">

        <section id="loginPage">
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
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
        <div class="row g-4 my80 skeleton mx-5">
            <template v-if="loaded">
                <div class="col-md-4 " v-for="item in allProjects">
                    <div class="border border-success overflow-hidden">
                        <img :src="item.images ? item.images[0] : 'dummy.png'" height="200" class="w-100" alt=""
                            width="200">
                        <div>
                            <h5 class="text-white p-2 text-center">@{{ item.name }}</h5>
                            <p class="border border-start-0 border-end-0  border-light text-center py-2 text-white">uses
                                technology</p>

                            <p class="text-white p-2" v-html="item.description"></p>
                        </div>
                        <a :href="'project-details/' + item.slug" target="_blank" class="link">
                            <span data-hover="click here">See Details</span>
                        </a>
                        <a :href="item.link" class="link" target="_blank">
                            <span data-hover="click link">Project link</span>
                        </a>
                    </div>
                </div>
            </template>

            <template v-else>
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
            </template>


        </div>
    </div>
@endsection
@push('custom-js')
    <script src="{{ asset('frontend/js/vue.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"></script>
    <script>
        new Vue({
            el: '#AllProjects',
            data: () => ({
                allProjects: [],
                loaded: false
            }),
            created: async function() {
                await this.getAllProjects()
                let that = this
                setTimeout(() => {
                    that.loaded = true
                }, 2000)

            },
            methods: {
                async getAllProjects() {
                    const response = await axios.get('/api/v1/projects?get_all=1');
                    if (response.data.status === 'success') {
                        this.allProjects = response.data?.data
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
@endpush
