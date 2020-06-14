<div class="flex justify-center items-center h-full">
  <div class="w-full max-w-md">
    <form class="bg-white shadow-md rounded-md px-8 pt-6 pb-8 mb-4" wire:submit.prevent="register">
      <h1 class="text-xl font-bold mb-4">Register Form</h1>
      <div class="mb-4">
        <label class="label" for="username">
          Username
        </label>
        <input class="text @error('name') danger @enderror" id="username" type="text" placeholder="username" wire:model.debounce.500ms="name">
        @error('name')
          <p class="help danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label class="label" for="email">
          Email Address
        </label>
        <input class="text @error('email') danger @enderror" id="email" type="text" placeholder="email" wire:model.debounce.500ms="email">
        @error('email')
          <p class="help danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label class="label" for="password">
          Password
        </label>
        <input class="text @error('password') danger @enderror" id="password" type="password" wire:model.debounce.500ms="password">
        @error('password')
          <p class="help danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label class="label" for="password_confirmation">
          Password Cnfirmication
        </label>
        <input class="text" id="password_confirmation" type="password" wire:model.debounce.500ms="password_confirmation">
      </div>
      <div class="flex items-center justify-between">
        <button class="button primary" type="submit">
          Sign Up
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
          Forgot Password?
        </a>
      </div>
    </form>
  </div>
</div>
