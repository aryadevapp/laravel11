{{-- Layout(Main) from component --}}
<x-layout>
  {{-- var $title berasal dari Route --}}
  <x-slot:title>{{ $title }}</x-slot:title>

  {{-- <article class="py-8 max-w-screen-md">
    <h2 class="mb-2 text-3xl tracking-tight font-bold">{{ $post['title'] }}</h2>
    <div>
      By <a href="">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> | {{ $post->created_at->format('j F Y') }}
    </div>
    <p class="my-2">{{ $post['body'] }}</p>
    <a href="/posts" class="my-24 underline"><< Back to Articel</a>
  </article> --}}

  {{-- New --}}

  <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="/postst" class="font-medium text-sm text-blue-600 hover:underline">&laquo; Back to all Posts</a>
              <address class="flex items-center my-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                      <div>
                          <a href="/authors/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                          <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </span>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
          </header>
          <p>{{ $post->body }}</p>
      </article>
  </div>
</main>

</x-layout>