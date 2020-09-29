{{--
  ./resources/views/posts/_index.blade.php
  Variables disponibles:
    $posts ARRAY(OBJ(id, ...))
--}}

<!-- ADD A POST -->
<div class="clearfix">
  <a class="btn btn-secondary float-left" href="#">Add Post &rarr;</a>
</div>

<!-- POSTS LIST -->
@foreach ($posts as $post)
<div class="post-preview">
  <a href="{{ route('posts.show', ['id' => $post->id, 'slug' => Str::slug($post->titre, '-')]) }}">
    <h2 class="post-title">
      {{ $post->titre }}
    </h2>
    <h3 class="post-subtitle">
      {{ $post->sousTitre }}
    </h3>
  </a>
  <p class="post-meta">Posted {{ $post->datePublication }} by {{$post->author->firstname}} {{$post->author->lastname}}</p>
  <ul>
      @foreach ($post->tags as $tag)
          <li> {{ $tag->nom }} </li>
      @endforeach
  </ul>
</div>
<hr>
@endforeach
<!-- Pager -->
<div class="clearfix">
  <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
</div>
</div>
