<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Admin Panel')</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <!-- Extra CSS from template -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="bg-gray-100">

  <!-- Sidebar + Header -->
  @include('partials.sidebar')
  @include('partials.header')

  <!-- Content -->
  <main class="p-6">
    @yield('content')
  </main>

  <!-- JS -->
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
