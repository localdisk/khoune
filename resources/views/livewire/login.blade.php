@if (session()->has('message'))
{{ session('message') }}
@endif

<div class="flex justify-center items-center h-full">
  <div class="w-full max-w-md">
    <form class="bg-white shadow-md rounded-md px-8 pt-6 pb-8 mb-4" wire:submit.prevent="login">
      <h1 class="text-xl font-bold mb-4">Login Form</h1>
      <div class="mb-4">
        <label class="label" for="email">
          Email Address
        </label>
        <input class="text" id="email" type="text" placeholder="email" wire:model.debounce.500ms="email">
      </div>
      <div class="mb-6">
        <label class="label" for="password">
          Password
        </label>
        <input class="text" id="password" type="password" wire:model.debounce.500ms="password">
      </div>
      <div class="flex items-center justify-between">
        <button class="button primary" type="submit">
          Sign In
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
          Forgot Password?
        </a>
      </div>
    </form>
  </div>
</div>
