<nav class="bg-gray-800 flex items-center">
  <h1>
    <a wire:click="dashboard" class="text-white inline-block p-6 hover:bg-gray-700 uppercase font-bold cursor-pointer">khoune</a>
  </h1>
  {{-- <a class="text-white inline-block p-6 hover:bg-gray-700 cursor-pointer" wire:click="home">Home</a> --}}

  @if (auth()->check())
  <div class="flex flex-grow items-center justify-end">
    {{-- dropdown --}}
    <div x-data="{ open: false }" @click.away="open = false">
      <a class="text-white inline-block p-6 hover:bg-gray-700 cursor-pointer" @click="open = ! open">
        {{ auth()->user()->name }}
        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </a>
      <div class="absolute z-10 rounded shadow bg-white border-gray-100 w-40" style x-show="open">
        <a class="block cursor-pointer hover:bg-gray-100 p-2" wire:click="logout">Logout</a>
      </div>
    </div>{{-- dropdown --}}

    {{-- <a class="text-white inline-block p-6 hover:bg-gray-700 cursor-pointer">Logout</a> --}}
  </div>
  @endif
</nav>
