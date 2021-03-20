<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="inline-block mr-2 mt-2 p-2.5">
                    <a href=""
                       class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                        Thêm mới
                    </a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
                        <div class="container mx-auto">
                            <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
                                <div class="text-center">
                                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Add new
                                        Role</h1>
                                </div>
                                <div class="m-2">
                                    <form action="{{route('role.store')}}" method="POST" id="form">
                                        @csrf
                                        <div class="mb-6">
                                            <label for="name"
                                                   class="text-sm text-gray-600 dark:text-gray-400">Name</label>
                                            <input type="text" name="name" id="name" placeholder="roles"
                                                   required
                                                   class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                        </div>
                                        <div class="mb-6">
                                            <button type="submit"
                                                    class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">
                                                Add
                                            </button>
                                            @isset($mess)
                                                <p class="text-base text-center text-green-500 font-bold"
                                                   id="result">{{$mess}}</p>
                                            @endisset()
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
