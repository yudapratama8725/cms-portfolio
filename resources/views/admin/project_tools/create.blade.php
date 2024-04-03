<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Assign Tools') }}
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
                
                <form action="{{ route('admin.project_tools.store', $project) }}" enctype="multipart/form-data" method="POST">

                    @csrf

                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl text-indigo-950 font-bold">
                            Assign Tool
                        </h1>

                        <div class="flex flex-col gap-y-2">
                            <h3>
                                Tools
                            </h3>
                            <select name="tool_id" id="tool_id">
                                <option value="">Choose Tool Below</option>
                                @forelse ($tools as $tool)
                                <option value="{{ $tool->id }}">{{ $tool->name }}</option>
                                @empty
                                <option value="">Choose Tool Below</option>
                                @endforelse

                            </select>
                        </div>

                        <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">
                            Assign Tool
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>