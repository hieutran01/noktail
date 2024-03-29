@extends('layouts.auth')
@section('content')
<div>

    <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
        <form method="POST" action="{{ route('postLogin') }}"
            class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
            @csrf <!-- Thêm CSRF token để bảo vệ ứng dụng của bạn -->
            <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Login </h1>

            <div>
                <label class="mb-0" for="email"> Email Address </label>
                <input type="email" name="user_email" id="email"
                    class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('user_email') }}</p>
                @endif
            </div>
            <div>
                <label class="mb-0" for="password"> Password </label>
                <input type="password" name="user_pass" id="password" 
                    class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('user_pass') }}</p>
                @endif
            </div>
            <div>
                <button type="submit"
                    class="bg-blue-600 font-semibold p-2.5 mt-5 rounded-md text-center text-white w-full">
                    Get Started
                </button>
            </div>

            <div class="uk-heading-line uk-text-center py-5"><span> Or, connect with </span></div>


            <a href="/login/facebook"
                class="hidden relative lg:flex items-center justify-start w-full py-3 mt-2 overflow-hidden text-lg font-medium text-white bg-indigo-600 rounded-lg cursor-pointer">
                <span class="absolute left-0 flex items-center justify-center w-16 h-full mr-3 fill-current">
                    <svg viewBox="0 0 24 24" class="left-0 w-8 h-8 ml-1 text-white fill-current"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z">
                        </path>
                    </svg>
                </span>
                <span class="inline-block pl-5 text-base text-center w-full">Signup with Facebook</span>
            </a>


            <div class="flex items-center space-x-2 justify-center">
                <a href="#">
                    <ion-icon name="logo-facebook"
                        class="p-2 rounded-full text-2xl bg-gray-100 text-blue-600 md hydrated" role="img"
                        aria-label="logo facebook"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-twitter"
                        class="p-2 rounded-full text-2xl bg-gray-100 text-indigo-500 md hydrated" role="img"
                        aria-label="logo twitter"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-github" class="p-2 rounded-full text-2xl bg-gray-100 md hydrated" role="img"
                        aria-label="logo github"></ion-icon>
                </a>
            </div>

        </form>

    </div>

</div>
@endsection