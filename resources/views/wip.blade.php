<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
    </h2>
    </x-slot> --}}
  <div class="fixed bottom-0 right-0 mb-4 mr-2">
    <button class="sm:hidden flex items-center text-white justify-center bg-blue-500 hover:bg-blue-400 w-24 h-24 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
    </button>
  </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            {{-- This is a post component --}}
                <div class="flex flex-col  p-6 sm:px-20 bg-white border-b border-gray-200">
                    <img src="https://c3.thejournal.ie/media/2012/05/bad-parking-390x285.jpg" class="aspect-auto rounded-xl bg-blue-500">
                    <div class="flex flex-row mt-4">
                        <div class="">Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit. At accusantium voluptatem ab tempore. Delectus quae dolorem sapiente dolores officia dolor corporis quibusdam, voluptatum necessitatibus nobis eligendi provident, molestias doloremque mollitia?</div>
                        {{-- shitty counter --}}
                        <button class="text-center"><span class="text-4xl">💩</span> 2444</button>
                    </div>
                    <div class="flex flex-col mt-4 space-y-4">
                        {{-- This is a comment component --}}
                        <div class="flex flex-row  p-6 space-x-4 bg-gray-100 rounded-xl">
                            <div class="flex flex-col text-center">
                                <img src="https://c3.thejournal.ie/media/2012/05/bad-parking-390x285.jpg" class="h-20 w-20 bg-blue-500 rounded-xl">
                                <span class="text-grey-dark font-medium text-2xs">2022-01-01</span>
                            </div>
                            <div class="flex flex-col">
                                <div>Username</div>
                                <div>Comment created_at</div>
                                <div>The comment</div>
                            </div>
                        </div>
                        {{-- This is a comment component --}}
                        <div class="flex flex-row  p-6 space-x-4 bg-gray-100 rounded-xl">
                            <div class="flex flex-col text-center">
                                <div class="h-20 w-20 bg-blue-500 rounded-xl"></div>
                                <span class="text-grey-dark font-medium text-2xs">2022-01-01</span>
                            </div>
                            <div class="flex flex-col">
                                <div>Username</div>
                                <div>Comment created_at</div>
                                <div>The comment</div>
                            </div>
                        </div>
                        {{-- This is a comment component --}}
                        <div class="flex flex-row  p-6 space-x-4 bg-gray-100 rounded-xl">
                            <div class="flex flex-col text-center">
                                <div class="h-20 w-20 bg-blue-500 rounded-xl"></div>
                                <span class="text-grey-dark font-medium text-2xs"></span>
                            </div>
                            <div class="flex flex-col">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                </div>
            {{-- component end --}}
            </div>
        </div>
    </div>
</x-app-layout>
