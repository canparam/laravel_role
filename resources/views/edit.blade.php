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
                </div>
                <div class="p-6 bg-white border-b border-gray-200">

                    <div
                        class="flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                        <div class="w-full">
                            <form action="{{route('user.update', $item->id)}}" method="post" class="p-5">
                                @csrf
                                @method('PUT')
                                <label class="text-gray-600 font-light">Tên</label>
                                <input type='text' placeholder="name"
                                       class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg text-gray-700 focus:outline-none"
                                       value="{{$item->name}}" readonly/>
                                <label class="text-gray-600 font-light ">Quyền</label>
                                <select class="w-full border bg-white rounded px-3 py-2 outline-none mt-3"
                                        name="roles_models_id">
                                    @foreach($rols as $role)
                                    <option class="py-1" value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                <div class="m-3">
                                    <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Lưu
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
