<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Schemify</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700;800&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        @guest
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
        @endguest    

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>   

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">   

        <link href="{{ asset('css/layout_styles.css') }}" rel="stylesheet"></link>

    </head>

    <body class="antialiased">  
        <header>
            <div class="header" style="padding: 2em 10% 2em 10%;">
                <a href="{{ url('/') }}" class="logo">          
                    <img class="logo-image" style="height: 80px;" src="{{ asset('/img/GERIAUSIAS_LOGO.png') }}">
                    <img class="logo-text" style="height: 70px; margin-left: 1em;" src="{{ asset('/img/logo-text.png') }}">
                </a>

                <div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="header-link underscore-animation">Renginiai</a>
                            
                        @else
                            <a href="{{ route('login') }}" class="header-link underscore-animation">Prisijungti</a>
                            

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="header-link underscore-animation">Registruotis</a>
                            @endif
                        @endauth
                        </div>
                    @endif
                </div>
                
            </div>
        </header>
        
        <div class="gradient-card" style="align-items: center;">
            <div style="margin-right: auto;" class="promo-text">
                <div class="intro-text-big">PLANUOK ATEITĮ DABAR</div>
                <div class="intro-text-list">
                    <ul>
                        <li>Tvarkyk dienotvarkę</li>
                        <li>Kurk Renginius</li>
                        <li>Dalinkis su kitais</li>
                    </ul>
                </div>
            </div>

            <div class="landing">

                @if (Route::has('login'))
                    @auth
                        <div style="font-size: 2.5rem; ">
                           <img class="white-svg" src="{{ asset('img/user-icon.svg') }}" alt="user icon">
                           {{ Auth::user()->name }}
                        </div>

                        <div style="margin-top: 0.5em; margin-left:1em;">
                            <div style="margin-bottom: 0.2em;">
                                <a href="/{{ Auth::user()->id }}/events" class="landing-link-animation">
                                    <img class="white-svg" src="{{ asset('img/events-icon.svg') }}" alt="events icon">
                                    <span class="landing-link">Renginiai</span>
                                </a>
                            </div>

                            <div style="margin-bottom: 0.2em;">
                                <a href="/users/{{ Auth::user()->id }}" class="landing-link-animation">
                                    <img style="" class="white-svg" src="{{ asset('img/info-icon.svg') }}" alt="info icon">
                                    <span class="landing-link">Vartotojo duomenys</span>
                                </a>
                            </div>

                            <div style="margin-left: 0.1em;"> 
                                <a href="{{ route('logout') }}" class="landing-link-animation" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <img style="" class="white-svg" src="{{ asset('img/logout-icon.svg') }}" alt="log out icon">
                                    <span class="landing-link">{{ __('Atsijungti') }}</span>
                                </a> 

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>  
                            </div>
                        </div>

                    @else
                        <div class="name" style="font-size: 3rem;">SCHEMIFY</div>
                        <div class="promo-login">Turi paskyrą? Prisijunk!</div> 
                        <div style="margin-top: 0.5em;">    
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <label for="email" class="form-label" style="margin-top: 0;">{{ __('El. pašto adresas') }}</label>
                                <input id="email" type="email" class="normalise-font form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">

                                @error('email')
                                    <div class="error-message" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror

                                <label for="password" class="form-label">{{ __('Slaptažodis') }}</label>
                                <input id="password" type="password" class="normalise-font form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <div class="error-message" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror

                                <div class="form-check form-label">
                                    <input class="form-check-input" style="margin-top: 0.5em;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Prisiminti paskyrą') }}
                                    </label>
                                </div>
                        
                                <button type="submit"  class="btn btn-warning form-label">
                                    {{ __('Prisijungti') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="ytb-animation form-label" href="{{ route('password.request') }}" style="margin-left: 0.5em;">
                                        {{ __('Pamiršai slaptažodį?') }}
                                    </a>
                                @endif
                            </form> 
                        </div>
                    @endauth
                @endif
            </div>
        </div>
        
        @include('footer')
    </body>
</html>
