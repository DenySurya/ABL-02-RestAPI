<div>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-10">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <button wire:click="showModal()" class="bg-green-500 hover:bg-green-700 text-white font-bold p-2 px-4 rounded mb-2">

                Tambahkan Pesanan
            </button>
            @if($isopen)
            @include('crud.create')
            @endif

            @if(session()->has('info'))
            <div class="bg-green-400 border-2 border-green-600 rounded-b mb-2 py-1">
                <div>
                    <h1 class="text-white font-bold text-center">{{session('info')}}</h1>
                </div>
            </div>

            @endif
            <table class="table-fixed w-full text-justify">


                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-400 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-400">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                No
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Nama sayur
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Jumlah Pesanan
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Action
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($posts as $post)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="">

                                                        <div class="text-sm font-medium text-gray-900 text-center">
                                                            {{$post->id}}
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">





                                                <div class="text-sm text-gray-900"> {{$post->title}}</div>






                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">

                                                <div class="text-sm text-gray-900 text-justify">{{ $post ->description }}

                                                </div>


                                            </td>


                                            <td class="px-6 block py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button wire:click="edit({{ $post ->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded ">
                                                    Edit
                                                </button>
                                                <button wire:click="delete({{ $post ->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold p-2 px-4 rounded ">
                                                    Delete
                                                </button>

                                            </td>

                                        </tr>
                                        @endforeach()

                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>