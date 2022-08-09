<x-adminheader></x-adminheader>
<body>


<section data-bs-version="5.1" class="form2 cid-tdhFqFlM1N mbr-fullscreen" id="form2-d">




    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-4 formbody">
            <div class="col-lg-12 mx-auto mbr-form">



        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
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
