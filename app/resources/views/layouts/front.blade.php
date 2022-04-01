<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
	<title>Happy Birthday</title>
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	@livewireStyles
    
    </head>
    <body>

	{{ $slot }}
	@livewireScripts
	
    </body>
</html>
