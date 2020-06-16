<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@hasSection('title') @yield('title') - @endif {{ __('Today I Learn') }}</title>
    @include('layouts.includes.styles')
</head>
<body class="terminal">
    <div class="container">
        <div class="terminal-nav">
            <header class="terminal-logo">
                <div class="logo terminal-prompt"><a href="https://terminalcss.xyz" class="no-style">{{ __('TIL') }}</a></div>
            </header>
            <nav class="terminal-menu">
                <ul vocab="https://schema.org/" typeof="BreadcrumbList">
                    <li>
                        <a href="{{ url('/') }}" class="menu-item"><span>{{ __('Register') }}</span></a>
                        <meta property="position">
                    </li>
                    <li>
                        <a href="{{ url('/') }}" class="menu-item"><span>{{ __('Login') }}</span></a>
                        <meta property="position">
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        @include('layouts.includes.notices')
        @yield('content')
    </div>
    @include('layouts.includes.scripts')
</body>
</html>
