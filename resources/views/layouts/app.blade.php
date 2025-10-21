<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - @yield('title', '대시보드')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- 헤더 -->
        @include('layouts.partials.header')

        <div class="flex">
            <!-- 사이드바 -->
            @include('layouts.partials.sidebar')

            <!-- 메인 컨텐츠 -->
            <main class="flex-1 ml-64 p-8">
                <div class="max-w-7xl mx-auto">
                    @yield('content')
                </div>
            </main>
        </div>

        <!-- 푸터 -->
        @include('layouts.partials.footer')
    </div>

    @livewireScripts
    @stack('scripts')
</body>
</html>
