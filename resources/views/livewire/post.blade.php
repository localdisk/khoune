<div class="w-1/3 mx-auto py-10 px-10">
  <h1 class="text-4xl text-center">
    <a href="{{ route('home') }}">Blog Title</a>
  </h1>

  <div class="py-6">
    <p class="text-green-500 text- font-semibold text-xl">{{ $post->created_at->format('Y-m-d') }}</p>
    <h2 class="text-3xl border-b border-gray-300">
      <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
    </h2>
    <p class="py-4">
      @foreach($post->tags as $tag)
        <a href="{{ route('tags', $tag->name )}}">
          <span class="bg-blue-500 text-white rounded-sm p-1 mr-2">
            #{{ $tag->name }}
          </span>
        </a>
      @endforeach
    </p>
    <p class="py-4 text-lg">
      {{ $post->body }}
    </p>
  </div>
</div>
