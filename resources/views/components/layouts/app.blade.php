<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/f3295059fb.js" crossorigin="anonymous"></script>
    
    {{-- vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireScripts
</head>

<body class="bg-gray-100">

    <div class="container ">

        {{ $slot }}
        
    </div>

    @livewireStyles
</body>

</html>
