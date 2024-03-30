<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Projects') }}
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
                
                <form action="{{ route('admin.projects.update', $project) }}" enctype="multipart/form-data" method="PUT">

                    @csrf

                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl text-indigo-950 font-bold">
                            Add New Project
                        </h1>
                        <div class="flex flex-col gap-y-2">
                            <h3>
                                Name
                            </h3>
                            <input value="{{ $project->name }}" type="text" id="name" name="name" placeholder="Add Your Name">
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <h3>
                                Category
                            </h3>
                            <select name="category" id="category">
                                <option value="">Choose Category Below</option>
                                <option value="Website Development">Website Development</option>
                                <option value="App Development">App Development</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <h3>
                                Cover Image
                            </h3>
                            <input type="file" id="cover" name="cover">
                        </div>

                        <div class="flex flex-col gap-y-2">
                            <h3>
                                About
                            </h3>
                            <textarea name="about" id="about" cols="30" rows="10" placeholder="Add About"></textarea>
                        </div>

                        <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">
                            Upload Project
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>