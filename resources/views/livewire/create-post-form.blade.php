@if (session()->has('message'))
  {{ session('message') }}
@endif

<div class="flex justify-center items-center w-full pt-32 mx-auto">
  <div class="w-full max-w-3xl">
    <form class="bg-white shadow-md rounded-md p-8" wire:submit.prevent="store">
      <h1 class="text-xl font-bold mb-4">Create Post Form</h1>
      {{-- title --}}
      <div class="mb-4">
        <label class="label" for="title">
          Title
        </label>
        <input class="text @error('title') danger @enderror" id="title" type="text" placeholder="title" wire:model.debounce.500ms="title">
        @error('title')
          <p class="help danger">{{ $message }}</p>
        @enderror
      </div>
      {{-- tags --}}
      <livewire:tagify />
      {{-- body --}}
      <div class="mb-6">
        <label class="label" for="body">
          Body
        </label>
        <textarea name="body" id="body" cols="30" rows="10" class="text" placeholder="body"></textarea>
        @error('body')
          <p class="help danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="flex items-center justify-end">
        <button class="button primary" type="submit">
          Create
        </button>
      </div>
    </form>
  </div>
</div>

