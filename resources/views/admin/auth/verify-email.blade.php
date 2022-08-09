<x-adminheader></x-adminheader>
<body>


<section data-bs-version="5.1" class="form2 cid-tdhFqFlM1N mbr-fullscreen" id="form2-d">




    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-4 formbody">
            <div class="col-lg-12 mx-auto mbr-form">



        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                <button type="submit" class="w-100 btn btn-lg btn-primary">
                      {{ __('Resend Verification Email') }}
                </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="w-100 btn btn-lg btn-primary">
                    {{ __('Log Out') }}
                </button>
  </form>
            </div>
        </div>
        </div>
    </div>
</section>

<hr>
  </body>
</html>
