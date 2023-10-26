<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app_name', 'ADMIN-PANEL') }}</title>

    @include('admin.layouts.includes.styles')

</head>

<body>
   @include('admin.layouts.includes.header')
   @include('admin.layouts.includes.sidebar')
   <main id="main" class="main">
    <div class="pagetitle">
        <h1>{{ $pageTitle ?? 'Dashboard' }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ $pageTitle ?? 'Dashboard' }}</li>
            </ol>
        </nav>
    </div>
    <section class="section">

            @yield('content')

    </section>
</main>
@include('admin.layouts.includes.footer')


@include('admin.layouts.includes.scripts')
</body>

</html>
