<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<!doctype html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">

  {{-- Navbar from component --}}
  <x-navbar></x-navbar>

  {{-- Header from component --}}
  {{-- var $title berasal dari home(main) --}}
  <x-header>{{ $title }}</x-header>

  {{-- Content --}}
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      {{ $slot }}
    </div>
  </main>
</div>

</body>
</html> 