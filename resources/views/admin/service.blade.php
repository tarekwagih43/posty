@extends('layouts.admin')

@section('content')

<div class="flex justify-center mb-5">
    @if(Session::get('success'))
    <div class="text-green-500 mt-2 text-sm">
        {{ Session::get('success') }}
    </div>
    @endif
</div>
    <div class="flex justify-center mb-5">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <!-- Setting -->
        <div>
            <div class="md:grid md:grid-cols-6 md:gap-6">
                <div class="md:col-span-2">
                    <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Service</h3>
                    <p class="mt-1 text-md text-gray-600">
                        {{ $service->title }}
                    </p>
                    <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="mt-5 flex rounded-md shadow-sm">
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-4">
                    <form action="{{ route('service', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $service->id }}" name="id" id="id">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                <label for="title" class="block text-sm font-medium text-gray-700">
                                    Service Title
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="title" id="title" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-sm rounded-r-md sm:text-sm border-gray-300" placeholder="website name" value="{{ $service->title }}">
                                </div>
                                @error('title')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                            </div>

                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">
                                Description
                                </label>
                                <div class="mt-1">
                                <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="About">{{ $service->description }}</textarea>
                                </div>
                                @error('description')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                                <p class="mt-2 text-sm text-gray-500">
                                Services Description.
                                </p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="description">
                                    Service photo
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                <input id="image" name="image" type="file">
                                @error('image')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        </div>
    </div>

@endsection
