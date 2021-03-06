<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Boilerplate</title>
  <livewire:styles />
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @stack('styles')
  <script src="{{ mix('js/app.js') }}"></script>
</head>

<body class="h-screen bg-gray-500">

  @yield('content')

  <livewire:scripts />
  @stack('scripts')

</body>

</html>
