<x-layouts.admin>
    <div class="mb-8">
        <p class="text-xl font-semibold">
            {{ isset($service) ? 'Edit' : 'Add' }} service
        </p>
    </div>

    <div class="mt-10">
        <form class="space-y-6" action="{{ isset($service) ? route('service.update', $service->uuid) : route('service.store') }}"
            method="POST">
            @csrf
            @if (isset($service))
                @method("PUT")
            @endif
            <div class="mb-3">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Service Name
                    <strong class='text-red-400'>*</strong>
                </label>
                <input id="name" name="name" type="text" class="input input-bordered w-full"
                    placeholder="Service holder" value="{{ old('name', (isset($service->name) ?? $service->name) ) }}" required />
                @error('name')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Service Type
                    <strong class='text-red-400'>*</strong>
                </label>
                <select id="type" name="type" class="select select-bordered w-full" required>
                    <option disabled selected>Select type</option>
                    <option value="marketing" {{ isset($service->type) && $service->type === "marketing" ? "selected" : '' }}>Marketing</option>
                    <option value="production" {{ isset($service->type) && $service->type === "production" ? "selected" : '' }}>Production</option>
                </select>
                @error('type')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Service Description
                    <strong class='text-red-400'>*</strong>
                </label>
                <textarea id="description" name="description" class="textarea textarea-bordered w-full"
                    placeholder="Service description" rows="5" required>{{old('description', isset($service->description) ?? $service->description )}}</textarea>
                @error('description')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mr-auto">
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ isset($service) ? "Update" : "Submit" }}
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin>