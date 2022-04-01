<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
	<title>Happy Birthday</title>
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireStyles
    <style>
        .imagen{ 
            background-image: url("{{asset('img/f3.jpg')}}");
            height: 900px;
            
            
        }
    </style>
    </head>
    <body>
        @livewire('navigation')
        <div class="imagen bg-cover bg-fixed">

            <div>

                <div class="bg-white/50 h-auto w-full sm:rounded-lg py-10">
                    <div class=" bg-orange-200 h-[700px] my-10 mx-auto w-[600px] rounded-3xl ">
                        <div class="p-10 text-center">
                            <p class="">Estas </p>
                            <p>Invitado</p>
                            <p>A Festejar Conmigo</p>
                            <p>Mi Cumpleaños</p>
                        </div>

                    </div>

                </div>

            </div>
            
        </div>

        {{ $slot }}
        @livewireScripts
    </body>
</html>
