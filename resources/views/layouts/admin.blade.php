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

<body class="bg-gray-100">

  <livewire:navbar />
  <div class="flex">
    <livewire:sidebar>
    <div class="pt-32 mx-auto container">
      @if (session()->has('message'))
        {{ session('message') }}
      @endif
      @yield('content')
    </div>
  </div>

  @stack('scripts')
</body>

</html>
