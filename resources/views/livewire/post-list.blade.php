<div class="pt-32 mx-auto container">
  <table class="border-collapse w-full">
    <th class="py-4 px-6 bg-gray-300 font-bold uppercase text-gray-700 border-gray-600">title</th>
    <th class="py-4 px-6 bg-gray-300 font-bold uppercase text-gray-700 border-gray-600">body</th>
    <th class="py-4 px-6 bg-gray-300 font-bold uppercase text-gray-700 border-gray-600">user</th>
    <th class="py-4 px-6 bg-gray-300 font-bold uppercase text-gray-700 border-gray-600">tags</th>
    <th class="py-4 px-6 bg-gray-300 font-bold uppercase text-gray-700 border-gray-600">create</th>
    <th class="py-4 px-6 bg-gray-300 font-bold uppercase text-gray-700 border-gray-600">update</th>
    <th class="py-4 px-6 bg-gray-300 font-bold uppercase text-gray-700 border-gray-600">action</th>

    @foreach ($posts as $post)
    <tr class="hover:bg-gray-200 bg-white">
      <td class="py-4 px-6 border-gray-600 text-gray-900">
        {{ $post->title }}
      </td>
      <td class="py-4 px-6 border-gray-600 text-gray-900">
        {{ $post->body }}
      </td>
      <td class="py-4 px-6 border-gray-600 text-gray-900">
        {{ $post->title }}
      </td>
      <td class="py-4 px-6 border-gray-600 text-gray-900">
        {{ $post->tags->implode('name', ',') }}
      </td>
      <td class="py-4 px-6 border-gray-600 text-gray-900">
        {{ $post->created_at->format('Y-m-d H:i:s') }}
      </td>
      <td class="py-4 px-6 border-gray-600 text-gray-900">
        {{ $post->updated_at->format('Y-m-d H:i:s') }}
      </td>
      <td class="py-4 px-6 border-gray-600 text-gray-900">
        <button class="button">Edit</button>
        <button class="button danger">delete</button>
      </td>
    </tr>
    @endforeach
  </table>
  {{ $posts->links('components.pagination') }}
</div>
