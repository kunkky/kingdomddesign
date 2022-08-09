
<x-header></x-header>
<body>
<x-navigation></x-navigation>


<section data-bs-version="5.1" class="form2 cid-tdhFqFlM1N mbr-fullscreen" id="form2-d">




    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-4 formbody">
            <div class="col-lg-12 mx-auto mbr-form">


        <div class="alert alert-secondary" role="alert">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-floating">
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="name@example.com"/>
                <label for="floatingInput">Email address</label>
            </div>


            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>


  </form>
            </div>
        </div>
        </div>
    </div>
</section>

<hr>
<x-footer></x-footer>
  </body>
</html>
