<?php

namespace App\Models;

use Illuminate\Support\Arr;

// Class Data
class Post{
  public static function all() {
      return [
          [
              'id' => 1,
              'slug' => 'how-writing-heals-the-soul',
              'title' => 'How Writing Heals the Soul',
              'author' => 'Galang Arya Tama',
              'body' => 'Writing about a stressful or traumatic event for just fifteen minutes a day offers remarkable health benefits.'
          ],
          [
              'id' => 2,
              'slug' => 'an-addiction-medicine-pioneer',
              'title' => 'An Addiction Medicine Pioneer',
              'author' => 'Arya Tama',
              'body' => 'When I was in medical school, neither addiction psychiatry nor addiction medicine existed. Dr. David Smith and a small group of pioneers changed all that.'
          ]
      ];
  }
  public static function find($slug) {
    // return Arr::first(Post::all(), function($post) use ($slug) {
    //   return $post['slug'] == $slug;
    // });

    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if (!$post) {
      abort(404);
    }

    return $post;
  }
};
