<x-adminheader></x-adminheader>
<body>


<section data-bs-version="5.1" class="form2 cid-tdhFqFlM1N mbr-fullscreen" id="form2-d">




    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-4 formbody">
            <div class="col-lg-12 mx-auto mbr-form">


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="form-control"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
             <button class="w-100 btn btn-lg btn-primary" type="submit">Reset Password</button>
            </div>

  </form>
            </div>
        </div>
        </div>
    </div>
</section>

<hr>
  </body>
</html>
