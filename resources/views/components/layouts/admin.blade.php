<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<link rel="stylesheet" href="{{ asset('admin/assets/vendors/core/core.css')}}">
	<link rel="stylesheet" href="{{ asset('admin/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<link rel="stylesheet" href="{{ asset('admin/assets/css/demo1/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png')}}" />


    @stack('style')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>

    <div class="main-wrapper">
        @include('components.layouts.partial.sidebar')
        <div class="page-wrapper">
            @include('components.layouts.partial.header')
            <div class="page-content">
                @yield('content')
                {{ $slot }}
			</div>
            @include('components.layouts.partial.footer')
        </div>
    </div>







	<script src="{{ asset('admin/assets/vendors/core/core.js')}}"></script>
	<script src="{{ asset('admin/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{ asset('admin/assets/js/template.js')}}"></script>
    @stack('script')
</body>
</html>
