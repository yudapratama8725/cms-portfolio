<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">

                    @if ($errors->any())

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $errors)
                                    <li class="py-5 bg-red-700 text-white font-bold">{{ $errors }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                    @endif
                
                    <div class="flex flex-row items-center gap-x-5">
                        <div class="flex flex-col gap-y-1">
                            <h3 class="font-bold text-xl">
                                {{ $projectOrder->name }}
                            </h3>
                            <p class="text-sm text-slate-400">
                                {{ $projectOrder->email }}
                            </p>
                        </div>
                    </div>

                <hr class="my-10">
                <h3 class="text-xl text-indigo-950 font-bold">
                    Brief Informasi
                </h3>

                <div class="flex flex-row">
                    <p class="text-sm text-slate-400">
                        Pesan : {{ $projectOrder->brief }}
                    </p>
                </div>

                <div class="flex flex-row">
                    <p class="text-sm text-slate-400">
                        Category : {{ $projectOrder->category }}
                    </p>
                </div>

                <div class="flex flex-row">
                    <p class="text-sm text-slate-400">
                        Budget : {{ $projectOrder->budget }}
                    </p>
                </div>
                
                <hr class="my-10">

                <a href="{{ route('admin.project_orders.index') }}" type="submit" class="py-3 px-5 rounded-full bg-red-500 text-white">
                    Back
                </a>

            </div>
        </div>
    </div>
</x-app-layout>