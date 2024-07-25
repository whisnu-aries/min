<x-layouts.admin>
    <div class="mb-8">
        <p class="text-xl font-semibold">
            {{ isset($data['project']) ? 'Edit' : 'Add' }} project
        </p>
    </div>

    <div class="mt-10">
        <form class="space-y-6" enctype="multipart/form-data"
            action="{{ isset($data['project']) ? route('project.update', $data['project']->uuid) : route('project.store') }}"
            method="POST">
            @csrf
            @if (isset($data['project']))
            @method("PUT")
            @endif
            <div class="mb-3">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Project Name
                    <strong class='text-red-400'>*</strong>
                </label>
                <input id="name" name="name" type="text" class="input input-bordered w-full" placeholder="Project name"
                    value="{{ old('name', isset($data['project']) ? $data['project']->name : '' ) }}" required />
                @error('name')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="client" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Client
                    <strong class='text-red-400'>*</strong>
                </label>
                <select id="client" name="client" class="select select-bordered w-full" required>
                    <option disabled selected>Select service</option>
                    @foreach ($data['clients'] as $client)
                    <option value="{{ $client->uuid }}" {{ isset($data['project']) && $data['project']->client_id ===
                        $client->id ? 'selected' : '' }} >
                        {{ $client->name }}
                    </option>
                    @endforeach
                </select>
                @error('client')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="service" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Service
                    <strong class='text-red-400'>*</strong>
                </label>
                <select id="service" name="service" class="select select-bordered w-full" required>
                    <option disabled selected>Select service</option>
                    @foreach ($data['services'] as $service)
                    <option value="{{ $service->uuid}} " {{ isset($data['project']) && $data['project']->service_id ===
                        $service->id ? 'selected' : '' }} >
                        {{ $service->name}}
                    </option>
                    @endforeach
                </select>
                @error('service')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Project Description
                    <strong class='text-red-400'>*</strong>
                </label>
                <textarea id="description" name="description" class="textarea textarea-bordered w-full"
                    placeholder="Project description" rows="5"
                    required>{{old('description', isset($data['project']) ? $data['project']->description : '' )}}</textarea>
                @error('description')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="assets" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Project assets
                    <strong class='text-red-400'>*</strong>
                </label>
                <input id="assets" name="assets[]" type="file" class="file-input file-input-bordered w-full" multiple
                    value="{{ old('logo', (isset($client->logo) ? $client->logo : '') ) }}" />
                @error('assets')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
            </div>
            @if(isset($data['project']))
            <div class="border border-dashed rounded-md border-slate-600 p-4 mb-3">
                <div class="grid grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach ($data['project']->assets as $asset)
                    <div class="card bg-base-100 shadow-xl">
                        <img src="{{ asset('projects/'.$asset->link) }}"
                            alt="Shoes" />
                        <div class="card-body p-3">
                            <div class="card-actions justify-center">
                                <a href="{{ route('asset.destroy', $asset->uuid) }}">
                                <button class="btn btn-error" type="button"><i class="fa-solid fa-trash"></i> Delete</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="mr-auto">
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ isset($data['project']) ? "Update" : "Submit" }}
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin>