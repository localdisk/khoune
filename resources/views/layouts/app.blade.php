<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Boilerplate</title>
  <livewire:styles />
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @stack('styles')
  <livewire:scripts />
  <script src="{{ mix('js/app.js') }}"></script>
</head>

<body class="bg-gray-200">

  <livewire:navbar />
  @yield('content')

  @stack('scripts')

</body>

</html>
