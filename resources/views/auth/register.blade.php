<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="grid grid-cols-1   h-full ">


        <div class=" flex h-full  justify-center items-center  ">
            <div class=" bg-green-100 p-16 shadow-2xl rounded-2xl">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class=" text-center items-center justify-center"> 
                        <h2 class="ml-1 mt-0 mb-2 text-lg">Please Register!!!</h2>
                    </div>

                    <!-- Name -->
                    <div>
                        <label for="name" :value="__('Name')">Name</label>
                        <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email" :value="__('Email')">Email</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" :value="__('Password')"> Password</label>

                        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                        <error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" :value="__('Confirm Password')">Re_enter Password</label>

                        <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                        <error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <input type="submit" value="Register" class=" bg-slate-600 hover:bg-gray-900 text-white ml-3.5 mr-1 my-2.5 px-10 py-2 rounded-lg cursor-pointer items-center" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>