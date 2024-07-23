{{-- Layout(Main) from component --}}
<x-layout>
  {{-- var $title berasal dari Route --}}
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ($posts as $post)

    <article class="py-8 max-w-screen-md border-b border-gray-300">
      <a href="/posts/{{ $post['slug'] }}">
        <h2 class="mb-2 text-3xl tracking-tight font-bold">{{ $post['title'] }}</h2>
      </a>
      <div>
        <a href="">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }} <!-- or {{ $post->created_at->format('j F Y') }} to see: angka tanggal, nama bulan dan angka tahun--> 
      </div>
      <p class="my-2">{{ Str::limit($post['body'], 100) }}</p>
      <a href="/posts/{{ $post['slug'] }}" class="my-24 underline">Read More >></a>
    </article>

  @endforeach

</x-layout>