<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
<style>
</style>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex items-center justify-between py-6">
            <ul class="flex items-center">
                <li>
                    <a href="{{route('main.index')}}" class="flex">
                        <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 80" x="0px" y="0px"><g><path d="M58,25H15.18l3.53-.88h0l6.16-1.53h0l5.47-1.36h0l6.16-1.53h0L42,18.34h0l14.73-3.66a1,1,0,0,0,.73-1.21L56.26,8.62a4.94,4.94,0,0,0-2.08-3,.07.07,0,0,0,0,0s0,0,0,0A.67.67,0,0,0,54,5.54,5,5,0,0,0,50.21,5l-2.11.52h0L42.62,6.85h0L36.45,8.39h0L31,9.75h0L24.8,11.28h0l-1.87.46L8.47,15.33a5,5,0,0,0-3.65,6.06L6,26.12V53a5,5,0,0,0,5,5H54a5,5,0,0,0,5-5V26A1,1,0,0,0,58,25ZM49,7.34l1.72-.43a3,3,0,0,1,1.45,0L47.29,15l-3.43.85ZM37.33,10.23l3.43-.85-5.11,8.48-3.43.85ZM25.68,13.12l3.43-.85L24,20.75l-3.43.85ZM7.11,18.64A3,3,0,0,1,9,17.27l8.51-2.11-5.11,8.49L7.73,24.79l-1-3.88A2.91,2.91,0,0,1,7.11,18.64ZM39.47,42.38l-13,7a1,1,0,0,1-.47.12,1,1,0,0,1-1-1v-14a1,1,0,0,1,1.47-.88l13,7a1,1,0,0,1,0,1.76Z"/></g></svg>
                        <div class="px-3">Movie app</div>
                    </a>
                </li>
            <li class="ml-16">
                <a href="#" class="hover:text-gray-300">Movies</a>
            </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 pl-8 px-4 py-1 focus:outline-none focus:shadow-outline  " placeholder="Search">
                    <div class="absolute top-0 text-gray-500 mt-2 ml-2">
                        <svg class="fill-current w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.35 7.938">
                            <path d="M2.645.53A2.118 2.118 0 00.529 2.642a2.12 2.12 0 002.116 2.116c.487 0 .935-.168 1.293-.446l1.427 1.426a.264.264 0 10.375-.373L4.312 3.938a2.11 2.11 0 00.446-1.295A2.117 2.117 0 002.645.529zm0 .528a1.58 1.58 0 011.584 1.585A1.58 1.58 0 012.645 4.23c-.88 0-1.587-.708-1.587-1.587 0-.88.707-1.585 1.587-1.585z"/>
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <a href="#">
                        <img src="{{asset('storage/avatars/default.png')}}" class="rounded-full h-8 w-8" alt="avatar"/>
                    </a>
                </div>
            </div>
        </div>
    </nav>
@yield('content')
</body>
</html>
