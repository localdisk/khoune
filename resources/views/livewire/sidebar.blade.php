<div class="bg-gray-800 w-1/4 h-screen shadow pt-20">
  <ul>
    <li x-data="{ open: false}">
      <a class="inline-block w-full cursor-pointer text-white hover:bg-gray-700 p-4 pl-6" @click="open = ! open">
        Posts
        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'-rotate-90': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </a>
      <div class="bg-gray-700" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform scale-100" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-100">
        <ul>
          <li><a class="inline-block w-full text-white hover:bg-blue-500 cursor-pointer pl-10 py-2">List</a></li>
          <li><a class="inline-block w-full text-white hover:bg-blue-500 cursor-pointer pl-10 py-2">New</a></li>
          <li><a class="inline-block w-full text-white hover:bg-blue-500 cursor-pointer pl-10 py-2">Edit</a></li>
        </ul>
      </div>
    </li>
    <li x-data="{ open: false}">
      <a class="inline-block w-full cursor-pointer text-white hover:bg-gray-700 p-4 pl-6" @click="open = ! open">
        User
        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'-rotate-90': open, 'rotate-0': !open}" class="inline w-5 h-5 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </a>
      <div class="bg-gray-700" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform scale-100" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-100">
        <ul>
          <li><a class="inline-block w-full text-white hover:bg-blue-500 cursor-pointer pl-10 py-2">List</a></li>
          <li><a class="inline-block w-full text-white hover:bg-blue-500 cursor-pointer pl-10 py-2">New</a></li>
          <li><a class="inline-block w-full text-white hover:bg-blue-500 cursor-pointer pl-10 py-2">Edit</a></li>
        </ul>
      </div>
    </li>
  </ul>
</div>
