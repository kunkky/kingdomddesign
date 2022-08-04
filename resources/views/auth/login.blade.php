

<x-header></x-header>
<body>
<x-navigation></x-navigation>


<section data-bs-version="5.1" class="form2 cid-tdhFqFlM1N mbr-fullscreen" id="form2-d">




    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-4 formbody">
            <div class="col-lg-12 mx-auto mbr-form">


                <form method="POST" action="{{ route('login') }}">
            @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="text-danger">
              <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </div>
    <div class="form-floating">
    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="name@example.com"/>
      <label for="floatingInput">Email address</label>
    </div>
    <br>
    <div class="form-floating">
                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Password"/>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <div class="mt-5 mb-3 text-muted forgetpass">
    <div>
    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                </div><div>
                <a href="/register" class="text-align-right">Register if new</a> </div>
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
