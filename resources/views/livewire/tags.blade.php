<div class="w-1/3 mx-auto py-10 px-10">
  <h1 class="text-4xl text-center">
    <a href="{{ route('home') }}">Blog Title</a>
  </h1>

  @foreach($posts as $post)
    <div class="py-6">
      <p class="text-green-500 text- font-semibold text-xl">{{ $post->created_at->format('Y-m-d') }}</p>
      <h2 class="text-3xl border-b border-gray-300">{{ $post->title }}</h2>
      <p class="py-4">
        <a href="{{ route('tags', $tag->name )}}">
          <span class="bg-blue-500 text-white rounded-sm p-1 mr-2">
            #{{ $tag->name }}
          </span>
        </a>
      </p>
      <p class="py-4 text-lg">
        {{ mb_strimwidth($post->body, 0, 100, '...')}}
      </p>
    </div>
  @endforeach
  {{ $posts->links('components.pagination') }}
</div>
