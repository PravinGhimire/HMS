<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
    <link rel="icon" type="image/png" href="images/Fauget Hotel.png">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="grid grid-cols-1   h-full bg-gradient-to-r from-green-400 to-blue-500">


        <div class=" flex h-full p-14 justify-center items-center  ">
            <div class=" bg-green-200 p-11 shadow-2xl rounded-2xl">

                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class=" text-center items-center justify-center">
                        <img src="{{asset('images/Fauget Hotel.png')}}" class=" rounded-full h-32  m-auto" alt="">
                        <h2 class="ml-1">Please Login!!!</h2>
                    </div>

                    <input type="email" name="email" class="border-0 block  box-content w-auto mx-10 my-3 p-2 rounded-lg " placeholder="Enter Email" required>
                    @error('email')
                    <span class="error">
                        {{ $message }}
                    </span>
                    @enderror

                    <input type="password" name="password" class="border-0 block w-auto mx-10 my-3 p-2 rounded-lg" placeholder="Enter Password" required>
                    @error('password')
                    <span class="error">
                        {{ $message }}
                    </span>
                    @enderror

                    <input type="submit" value="Login" class=" bg-blue-600 hover:bg-gray-900 text-white ml-3.5 mr-1 my-2.5 px-10 py-2 rounded-lg cursor-pointer items-center" required>
                    <a class="underline text-sm text-red-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{('Forgot your password?') }}
                    </a>
                    <div class="mt-4  text-justify items-center">
                        <a class="underline text-sm text-red-500 ml-4 hover:text-gray-900 rounded-md  px-12 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                            {{('Doesnt have an account?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>