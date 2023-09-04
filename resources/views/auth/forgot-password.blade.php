<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<!-- <html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset password</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="grid grid-cols-1  ">


        <div class=" flex h-80 justify-center items-center  ">
            <div class=" bg-green-100 p-11 shadow-2xl rounded-xl">

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class=" text-center items-center justify-center">
                        <h2 class="ml-1 mb-1 text-lg"> Forget Password don't worry ,,</h2>
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email" :value="__('Email')">Email</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        @error('email')
                        <span class="error">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div>
                        <!-- <button>
                            {{ __('Email Password Reset Link') }}
                        </button> -->
                        <input type="submit" value="Email Password Reset Link" class=" bg-slate-600 hover:bg-gray-900 text-white ml-3.5 mr-1 my-2.5 px-10 py-2 rounded-lg cursor-pointer items-center">
                    </div>
                </form>
            </div>
        </div>
</body> -->