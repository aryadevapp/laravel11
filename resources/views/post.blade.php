{{-- Layout(Main) from component --}}
<x-layout>
  {{-- var $title berasal dari Route --}}
  <x-slot:title>{{ $title }}</x-slot:title>

  <article class="py-8 max-w-screen-md">
    <h2 class="mb-2 text-3xl tracking-tight font-bold">{{ $post['title'] }}</h2>
    <div>
      <a href="">{{ $post['author'] }}</a> | 1 Januari 2024
    </div>
    <p class="my-2">{{ $post['body'] }}</p>
    <a href="/posts" class="my-24 underline"><< Back to Articel</a>
  </article>
</x-layout>