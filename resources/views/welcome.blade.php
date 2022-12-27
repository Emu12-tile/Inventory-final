{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
{{-- @if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
    @endauth
</div>
@endif --}}

<!DOCTYPE html>
<!--
Template Name: Pinkman - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>MinT</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Lightgallery CSS -->
    <link href="{{ asset('assets/dist/css/lightgallery.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-alt-nav hk-landing">
        <div class="fixed-top bg-white shadow-sm">
            <div class="container px-0">
                <nav class="navbar navbar-expand-xl navbar-light hk-navbar hk-navbar-alt shadow-none">
                    <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);"
                        data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt"
                        aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i
                                data-feather="menu"></i></span></a>
                    <a class="navbar-brand" href="https://mint.gov.et/?lang=en">
                        <img class="brand-img d-inline-block align-top"
                            src="https://mint.gov.et/wp-content/uploads/2020/09/logo_7.png"
                            style="width:350px;height:60px"alt="brand" />
                    </a>

                    <div class="collapse navbar-collapse ml-auto" id="navbarCollapseAlt">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" data-scroll href="#preview_sec">Preview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-scroll href="#pages_sec">Pages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-scroll href="#apps_sec">Apps</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-scroll href="#features_sec">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-scroll href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Main Content -->
        <div class="hk-pg-wrapper bg-white pt-0">
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">

                    <!-- Preview Sec -->
                    <section id="preview_sec" class="hk-preview-sec hk-landing-sec pb-0 bg-dark-40">
                        <div class="container position-relative pt-50">
                            <div class="text-center">
                                <h1 class="font-48 text-white">Inventory Management System<br> </h1>
                                <h4 class="text-white mt-15 mb-15">A professional and developer-friendly UI framework.
                                </h4>
                                <div class="text-white">24x7 Support <span class="font-11">&nbsp;&#9679;&nbsp;</span>
                                    Free updates forever</div>
                            </div>
                        </div>
                        <div id="owl_demo_2" class="owl-carousel owl-theme dots-on-item mt-60">
                            <div class="item"><a class="d-block" href="dashboard1.html" target="_blank"><img
                                        src="https://scontent.fadd2-1.fna.fbcdn.net/v/t39.30808-6/321069461_1337180353723720_320884970738766497_n.jpg?stp=dst-jpg_p526x395&_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=hqD1sD5V7SQAX_PIM-J&_nc_ht=scontent.fadd2-1.fna&oh=00_AfBb8uqzf8UE5D15U45Tq5X5_tkuk86hOUOZ7PRBelB2pA&oe=63AB822D"
                                        alt="Owl Image"></a></div>
                            <div class="item"><a class="d-block" href="dashboard2.html" target="_blank"><img
                                        src="https://mint.gov.et/wp-content/uploads/2021/06/New-logo-mint-Final.jpg"
                                        style="width:700px;height:400px ;margin-bottom:5px" alt="Owl Image"></a></div>
                            <div class="item"><a class="d-block" href="dashboard3.html" target="_blank"><img
                                        src="{{ asset('assets/dist/img/landing-pg/herodemo3.png') }}"
                                        alt="Owl Image"></a></div>
                        </div>
                    </section>
                    <!-- /Preview Sec -->

                    <!-- Design Sec -->
                    <section class="hk-landing-sec pb-50">
                        <div class="container">
                            <h2 class="text-center">Designed and developed <span class="text-pink">for
                                    developers.</span></h2>
                            <div class="row mt-50 text-center">
                                <div class="col-lg-4 mb-30">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center justify-content-center">
                                            <span class="feather-icon text-pink mr-15"><i
                                                    data-feather="layout"></i></span>Flexible Framework
                                        </span>
                                    </h5>
                                    <p>A Bootstrap 4.1.X & Sass based solid core and well-architected framework works
                                        for all screens and modern browsers. You can easily be able to develop limitless
                                        customized projects.</p>
                                </div>
                                <div class="col-lg-4 mb-30">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center justify-content-center">
                                            <span class="feather-icon text-success mr-15"><i
                                                    data-feather="code"></i></span>Code Structure
                                        </span>
                                    </h5>
                                    <p>HTML5 validated clean code is focused - keeping it simple and orderly. Every
                                        function, class, module exposes a single-minded attitude to remain entirely
                                        undistracted.</p>
                                </div>
                                <div class="col-lg-4 mb-30">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center justify-content-center">
                                            <span class="feather-icon text-purple mr-15"><i
                                                    data-feather="fast-forward"></i></span>Boost Up Speed
                                        </span>
                                    </h5>
                                    <p>A ton of pre-built material that will genuinely improve D2D process ten folds,
                                        allowing Front-End Developrers to nerd out on actually building stuff, rather
                                        than editing pixel distances.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Design Sec -->

                    <!-- Pages Sec -->
                    <section id="pages_sec" class="hk-landing-sec pb-65">
                        <div class="container">
                            <h2 class="text-center">A bunch of <span class="text-pink">boilerplate pages</span> to
                                help you kick start.</h2>
                            <div class="hk-row mt-50 text-center">
                                <div class="col-lg-4 col-sm-6">
                                    <a href="profile.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/profile.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Profile
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="activity.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/activity.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Activity
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="invoice.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/invoice.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Invoice
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="faq.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/faq.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Faq
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="gallery.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/gallery.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Gallery
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="signup.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/signupcover.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Signup Cover
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="signup-simple.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/signup.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Signup
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="login.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/logincover.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Login Cover
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="login-simple.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/login.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Login
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="forgot-password.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/forgotpwd.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Forgot Password
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="reset-password.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/resetpwd.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Reset Password
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="lock-screen.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/lockscreen.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Lock Screen
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="404.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/error404.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Error 404
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <a href="maintenance.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/maintenance.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Maintenance
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Pages Sec -->

                    <!-- Tech Sec -->
                    <section class="hk-landing-sec pb-50">
                        <div class="container">
                            <div class="row">
                                <div class="d-flex align-items-center col-lg-5 mb-30">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/dist/img/landing-pg/technologo.png') }}"
                                        alt="Pinkman" />
                                </div>
                                <div class="col-lg-7">
                                    <h2>Powerful yet easy-to-use framework built with <span class="text-pink">Bootstrap
                                            4.1.3</span></h2>
                                    <div class="row mt-50">
                                        <div class="col-sm-6 mb-30">
                                            <h5 class="mb-20">
                                                Bootstrap 4.1.3
                                            </h5>
                                            <p>Pinkman is built with the world's most popular front-end component
                                                library with custom css and components.</p>
                                        </div>
                                        <div class="col-sm-6 mb-30">
                                            <h5 class="mb-20">
                                                Preprocessor - Sass
                                            </h5>
                                            <p>Built with Sass following a completely modular approach. Easy to
                                                understand, light weight and extendible.</p>
                                        </div>
                                        <div class="col-sm-6 mb-30">
                                            <h5 class="mb-20">
                                                NPM - Node js
                                            </h5>
                                            <p>NPM manages project dependencies by compiling open source libraries of
                                                reusable code in seconds.</p>
                                        </div>
                                        <div class="col-sm-6 mb-30">
                                            <h5 class="mb-20">
                                                Jquery 3.3.1
                                            </h5>
                                            <p>Simplified HTML document traversing, event handling, and animating for
                                                rapid web development.</p>
                                        </div>
                                        <div class="col-sm-6 mb-30">
                                            <h5 class="mb-20">
                                                Powerful CLI - Grunt
                                            </h5>
                                            <p>A task automation tool. Compile and do changes with the introduced grunt
                                                command line interface.</p>
                                        </div>
                                        <div class="col-sm-6 mb-30">
                                            <h5 class="mb-20">
                                                API Usage
                                            </h5>
                                            <p>Google maps are built using updated API. Pinkman also supports twitter to
                                                show live feeds.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Tech Sec -->

                    <!-- Apps Sec -->
                    <section id="apps_sec" class="hk-landing-sec pb-65">
                        <div class="container">
                            <h2 class="text-center">Apps are designed considering <span class="text-pink">UX</span> in
                                mind.</h2>
                            <div class="hk-row mt-50 text-center">
                                <div class="col-md-6 col-sm-12">
                                    <a href="chats.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/chatapp.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Chats
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <a href="email.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/emailapp.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Email
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <a href="calendar.html" target="_blank">
                                        <div class="card shadow-hover">
                                            <img class="card-img-top"
                                                src="{{ asset('assets/dist/img/landing-pg/calenderapp.png') }}"
                                                alt="Card image cap">
                                            <div class="card-footer text-dark">
                                                Calendar
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <a href="file-manager.html">
                                        <div class="card shadow-hover">
                                            <div class="card-img position-relative">
                                                <img class="card-img-top d-block"
                                                    src="{{ asset('assets/dist/img/landing-pg/fileuploadapp.png') }}"
                                                    alt="Card image cap">
                                            </div>
                                            <div class="card-footer text-dark">
                                                File Manager
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Apps Sec -->

                    <!-- Utilities Sec -->
                    <section class="hk-landing-sec pb-35">
                        <div class="container">
                            <h2 class="text-center">Smooth<span class="text-pink"> realtime collaboration</span> of UI
                                Components and advanced functionality to your web applications.</h2>
                            <div class="row mt-50">
                                <div class="col-lg-3 col-sm-6 mb-45">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center">
                                            <span class="feather-icon text-pink mr-15"><i
                                                    data-feather="underline"></i></span>
                                            Utilities
                                        </span>
                                    </h5>
                                    <p>Easy styling with spacing, sizing, backgrounds, shadows and many more utilities.
                                    </p>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-45">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center">
                                            <span class="feather-icon text-teal mr-15"><i
                                                    data-feather="type"></i></span>
                                            Typography
                                        </span>
                                    </h5>
                                    <p>The Typography, includes global settings, headings, body text, lists, responsive
                                        typography and more.</p>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-45">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center">
                                            <span class="feather-icon text-orange mr-15"><i
                                                    data-feather="command"></i></span>
                                            Colors
                                        </span>
                                    </h5>
                                    <p>Play around contextual colors, 20+ base colors, 230+ color shades and many
                                        gradient color options.</p>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-45">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center">
                                            <span class="feather-icon text-pink mr-15"><i
                                                    data-feather="info"></i></span>
                                            Icons
                                        </span>
                                    </h5>
                                    <p>Over 1500 free icons. Each icon pack includes SVG or a webfont to easily add in
                                        css and html pages.</p>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-45">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center">
                                            <span class="feather-icon text-green mr-15"><i
                                                    data-feather="server"></i></span>
                                            Forms
                                        </span>
                                    </h5>
                                    <p>A variety of form control styles, layouts, custom components, editor, form
                                        pickers, sliders and more.</p>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-45">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center">
                                            <span class="feather-icon text-red mr-15"><i
                                                    data-feather="list"></i></span>
                                            Tables
                                        </span>
                                    </h5>
                                    <p>Add advance interaction controls like search, pagination & selectors, export
                                        using exclusive Data table.</p>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-45">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center">
                                            <span class="feather-icon text-pumpkin mr-15"><i
                                                    data-feather="pie-chart"></i></span>
                                            Charts
                                        </span>
                                    </h5>
                                    <p>Interactive charts, complex charts, realtime data charts, pie & donut charts and
                                        more.</p>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-45">
                                    <h5 class="mb-20">
                                        <span class="d-flex align-items-center">
                                            <span class="feather-icon text-violet mr-15"><i
                                                    data-feather="map"></i></span>
                                            Maps
                                        </span>
                                    </h5>
                                    <p>Vector and google maps integration for location hierarchies, basic map view, and
                                        key mapping features.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Utilities Sec -->

                    <!-- Features Sec -->
                    <section id="features_sec" class="hk-landing-sec pb-65">
                        <div class="container text-center">
                            <h2 class="mb-10"><span class="text-pink">Unlimited</span> features</h2>
                            <div class="row justify-content-center mt-50">
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature1.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        24x7 Support
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature2.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Online Documentation
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature3.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Free Updates Lifetime
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature4.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Fast Loading Time
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature5.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Light-weighted
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature6.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Clean Code
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature7.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Responsive Layout
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature8.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Ready to use demos
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature9.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Lots of widgets
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature10.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        1000+ UI Components
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature11.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Font Icons
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature12.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Google Maps
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature13.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Twitter Feed Jquery
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature14.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Google Web Fonts
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature15.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Lightbox Gallery
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature16.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Tinymce Editor
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature17.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Date Range Picker
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature18.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Color Picker
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature19.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Multi File Upload
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature20.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Chat App
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature21.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Calendar App
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature22.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Mail App
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature23.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Carousel
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature24.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Owl Slider
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature25.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Modals
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature26.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Menu Options
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature27.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Tabs
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature28.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Data Table Plugin
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature29.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Form Validation
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature30.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Authentication Pages
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature31.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Error Pages
                                    </div>
                                </div>
                                <div class="feature-block">
                                    <div class="card">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/dist/img/landing-pg/feature32.png') }}"
                                            alt="Card image cap">
                                    </div>
                                    <div class="feature-cap">
                                        Embeds
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Features Sec -->

                    <!-- Faq Sec -->
                    <section id="faq_sec" class="hk-landing-sec pb-25">
                        <div class="container">
                            <h2 class="mb-10">FAQ</h2>
                            <div class="mt-50">
                                <div class="row">
                                    <div class="col-sm-6 mb-55">
                                        <h5 class="mb-15">What's your refund policy?</h5>
                                        <p>A refund or credit on a purchase is not granted unless one of the promises
                                            given by the author in section 21 has been breached, or a refund is required
                                            under the <a href="https://themeforest.net/page/customer_refund_policy"
                                                target="_blank">Envato Market Refund Rules</a>.</p>
                                    </div>
                                    <div class="col-sm-6 mb-55">
                                        <h5 class="mb-15">What does support include?</h5>
                                        <p>Our support mainly covers pre-sale questions, basic front-end development
                                            questions, bug reports and help with included 3rd party assets through our
                                            support <a href="mailto:support@hencework.com"
                                                target="_blank">support@hencework.com</a></p>
                                    </div>
                                    <div class="col-sm-6 mb-55">
                                        <h5 class="mb-15">What's not covered by support?</h5>
                                        <p>Individual customization requests are not supported, but we tend to advise
                                            and show direction on such requests. Also server side implementation and
                                            backend integration issues are not covered since Pinkman is an HTML template
                                            with front-end support.</p>
                                    </div>
                                    <div class="col-sm-6 mb-55">
                                        <h5 class="mb-15">Custom Jobs</h5>
                                        <p>You are only eligible for requesting custom jobs if you have a purchase key
                                            and can only be take up after mutual agreement on the costing, based on the
                                            work involved and the availability of our team members.</p>
                                    </div>
                                    <div class="col-sm-6 mb-55">
                                        <h5 class="mb-15">A React / Angular version in future days?</h5>
                                        <p>We are currently not planning to release a react or an angular version. But
                                            collaborators are always welcome.</p>
                                    </div>
                                    <div class="col-sm-6 mb-55">
                                        <h5 class="mb-15">Will you provide RTL Support?</h5>
                                        <p>Yes. We are currently working on RTL and will be provided in the next update.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Faq Sec -->
                </div>
            </div>
            <!-- /Row -->

            <!-- Footer -->
            <div class="hk-footer-wrap  container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark"
                                    target="_blank">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#"
                                class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                    class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#"
                                class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                    class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#"
                                class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                    class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('assets/dist/js/feather.min.js') }}"></script>

    <!-- Gallery JavaScript -->
    <script src="{{ asset('assets/vendors/lightgallery/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/froogaloop2.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('assets/dist/js/lightgallery-all.js') }}"></script>
    <script src="{{ asset('assets/dist/js/landing-data.js') }}"></script>
    <script src="{{ asset('assets/dist/js/init.js') }}"></script>
</body>

</html>
