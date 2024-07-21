{{-- Layout(Main) from component --}}
<x-layout>
  {{-- var $title berasal dari Route --}}
  <x-slot:title>{{ $title }}</x-slot:title>
  <h1>About</h1>
  <h5>Hallo saya {{ $name }}</h5>
</x-layout>