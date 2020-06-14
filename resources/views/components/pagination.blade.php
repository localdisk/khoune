@if ($paginator->hasPages())
<div class="flex justify-center my-5">
  @if ($paginator->onFirstPage())
    <a class="relative inline-block py-2 px-3 leading-tight bg-white border border-gray-300 text-gray-600 border-r-0 ml-0 cursor-not-allowed">
      Prev
    </a>
  @else
    <a
      class="relative inline-block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 border-r-0 ml-0 hover:bg-gray200 cursor-pointer"
      id="prev-page"
      wire:click="previousPage"
    >
      Prev
    </a>
  @endif

  @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if(is_string($element))
      <a class="relative inline-block py-2 px-3 leading-tight bg-blue-700 text-white font-semibold ml-0">
        {{ $element }}
      </a>
    @endif
    {{-- Array Of Links --}}
    @if (is_array($element))
      @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
          <a class="relative inline-block py-2 px-3 leading-tight bg-blue-700 text-white font-semibold ml-0">
            {{ $page }}
          </a>
        @else
          <a
            class="relative inline-block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 border-r-0 ml-0 hover:bg-gray200 cursor-pointer"
            id="page-p{{ $page }}"
            wire:click="gotoPage({{ $page }})"
          >
            {{ $page }}
          </a>
        @endif
      @endforeach
    @endif
  @endforeach
  {{-- Next Page Link --}}
  @if ($paginator->hasMorePages())
    <a
      class="relative inline-block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 ml-0 hover:bg-gray200 cursor-pointer"
      wire:click="nextPage"
      id="next-page"
      >
      Next
    </a>
  @else
    <a class="relative block py-2 px-3 leading-tight border border-gray-300 text-gray-600 ml-0 cursor-not-allowed">
      Next
    </a>
  @endif
@endif
