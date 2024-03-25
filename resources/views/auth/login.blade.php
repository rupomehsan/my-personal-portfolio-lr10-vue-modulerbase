@extends('layouts.frontend')
@section('content')
<div>
    <section class="contact contact-bg my80" id="contact">
        <div class="wrapper">
            <x-section-title title="Admin login" />
            <div id="errorMsgShow"> </div>
            <div class=" w-50 m-auto py-5 box-shadow bg-waterlap">
                <div class="container-contact100">
                    <div class="wrap-contact100">
                        <form class="contact100-form" onsubmit="submitHandler()">
                            <div class="wrap-input100 validate-input mt-20"
                                data-validate="Valid email is required: ex@abc.xyz">
                                <input id="email" class="input100" type="email" name="email"
                                    placeholder="Enter your email">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input mt-20"
                                data-validate="Valid email is required: ex@abc.xyz">
                                <input id="password" class="input100" type="password" name="password"
                                    placeholder="Enter your password">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="d-flex justify-content-center align-items-center w-100">
                                <button class="submit-btn" type="submit">Submit</button>
                            </div>
                        </form>
                        <script>
                            function submitHandler(){
                                event.preventDefault()
                                fetch('login', {
                                        method: "POST",
                                        body: new FormData(event.target),
                                        headers: {
                                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                        }
                                    })
                                    .then(res => res.json())
                                    .then(data => {

                                        if (data.status == "error") {
                                            let target = document.getElementById('errorMsgShow')
                                            target.innerHTML = `
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Error!</strong> ${data.message}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            `;
                                        }

                                        if (data.access_token) {
                                            localStorage.setItem('token', data.access_token)
                                            window.location.href = 'admin'
                                        }

                                    })
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
</div>

</section>
</div>
@endsection
