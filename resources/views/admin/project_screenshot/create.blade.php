<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Assign Screenshot') }}
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
                
                <form action="{{ route('admin.project_screenshot.store', $project) }}" enctype="multipart/form-data" method="POST">

                    @csrf

                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl text-indigo-950 font-bold">
                            Add Project Screenshots
                        </h1>

                        <div class="flex flex-row items-center gap-x-5">
                            <img src="{{ Storage::url($project->cover) }}" class="object-cover w-[120px] h-[90px] rounded-2xl">
                            <div class="flex flex-col gap-y-1">
                                <h3 class="font-bold text-xl">
                                    {{ $project->name }}
                                </h3>
                                <p class="text-sm text-slate-400">
                                    {{ $project->category }}
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <h3>
                                Screenshot
                            </h3>
                            <input type="file" id="screenshot" name="screenshot">
                        </div>

                        <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">
                            Add Screenshot
                        </button>

                    </div>

                </form>

                <hr class="my-10">
                <h3 class="text-xl text-indigo-950 font-bold">
                    Existing Screenshot
                </h3>

                <div class="flex flex-col gap-y-5">

                    @forelse($project->screenshots as $screenshot)

                    {{-- Melakukan Foreach Data Dari Table Projects --}}
                    <div class="item-project flex flex-row items-center justify-between">

                        <div class="flex flex-row items-center gap-x-5">
                            <img src="{{ Storage::url($screenshot->screenshot) }}" class="object-cover w-[120px] h-[90px] rounded-2xl">
                        </div>

                        <div class="flex flex-row items-center gap-x-2">
                            <form action="{{ route('admin.project_screenshot.destroy', 'xxx') }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="py-3 px-5 rounded-full bg-red-500 text-white">
                                    Delete
                                </button>
                            </form>
                        </div>

                    </div>

                    @empty
                    <p>
                        Belum ada screenshot Tersedia.
                    </p>
                    @endforelse

                </div>

            </div>
        </div>
    </div>
</x-app-layout>