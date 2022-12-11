@include('layouts.layout')

<section id="register">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 min-vh-100 left">
                <img src="assets/img/mobil-potrait.jpg" style="object-fit:fill; width:100%; height:100%;" alt="foto">
            </div>
            <div class="col-md-6">
                <div class="form-login m-auto ps-5">
                    <h2 class="fw-bold mb-4">Register</h2>
                    <form action="{{ url('/register')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Email input -->
                        <div class="mb-3 position-relative">
                            <label class="form-label " for="email">Email address<span style="color: red">*</span></label>
                            <input type="email" id="email" class="form-control form-control-lg" name="email"
                                placeholder="Enter your email" required />

                        </div>
                        <!-- nama input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name<span style="color: red">*</span></label>
                            <input type="name" id="name" class="form-control form-control-lg" name="name"
                                placeholder="Enter your name" required />
                        </div>
                        <!-- no hp input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="no_hp">Phone Number<span style="color: red">*</span></label>
                            <input type="no_hp" id="no_hp" class="form-control form-control-lg" name="no_hp"
                                placeholder="Enter your phone number" required />
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password<span style="color: red">*</span></label>
                            <input type="password" id="password" class="form-control form-control-lg" name="password"
                                placeholder="Enter your password" required />
                        </div>
                        <div class="form-outline mb-4">
                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="password2">Confirm Password<span style="color: red">*</span></label>

                                <input type="password" id="password2" class="form-control form-control-lg"
                                    name="password2" placeholder="Enter your password again" required />
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" name="daftar" class="btn btn-lg"
                                    style="background-color: #FFE1E1; padding-left: 2.5rem; padding-right: 2.5rem;"><b>Daftar</b></button>
                                <p class="small mt-2 pt-1 mb-0">Anda sudah punya akun? <a
                                        href="{{ 'login' }}"><b>Login</b></a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
