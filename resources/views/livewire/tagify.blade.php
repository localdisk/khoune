<div wire:ignore class="mb-4">
  <label class="label" for="tagify">
    Tags
  </label>
  <input
    type="text"
    id="tagify"
    autocomplete="off"
    class="shadow-sm appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight"
    wire:model="values"
  >
</div>

@push('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify@3.11.1/dist/tagify.min.css">
@endpush

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@3.11.1/dist/tagify.min.js"></script>
  <script>
  document.addEventListener("DOMContentLoaded", function(event) {

    var input = document.getElementById('tagify')
    var tagify = new Tagify(input, {
      whitelist : [
        @foreach($tags as $tag)
          '{{ $tag }}'@if(! $loop->last), @endif
        @endforeach
      ]
    })
    input.addEventListener('change', onChange)

    function onChange(e){
      @this.call('changeTags', e.target.value)
    }

  })
  </script>
@endpush
