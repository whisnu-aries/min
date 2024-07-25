<x-layouts.admin>
    <div class="mb-8">
        <p class="text-xl font-semibold">
            {{ isset($client) ? 'Edit' : 'Add' }} client
        </p>
    </div>

    <div class="mt-10">
        <form class="space-y-6"
            action="{{ isset($client) ? route('client.update', $client->uuid) : route('client.store') }}"
            enctype="multipart/form-data" method="POST">
            @csrf
            @if (isset($client))
            @method("PUT")
            @endif
            <div class="mb-3">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Client Name
                    <strong class='text-red-400'>*</strong>
                </label>
                <input id="name" name="name" type="text" class="input input-bordered w-full" placeholder="Client name"
                    value="{{ old('name', (isset($client->name) ? $client->name : '') ) }}" required />
                @error('name')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="logo" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Client logo
                    <strong class='text-red-400'>*</strong>
                </label>
                <input id="logo" name="logo" type="file" class="file-input file-input-bordered w-full"
                    value="{{ old('logo', (isset($client->logo) ? $client->logo : '') ) }}"  onchange="handleUploadedLogo(this)" />
                @error('logo')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
                <div class="w-full mt-3 flex justify-center gap-3">
                    <div id="client_logo" class="{{ isset($client) ? 'avatar' : 'avatar hidden' }}">
                        <div class="w-24 rounded-full">
                            <img id="logo_img" src="{{ isset($client->logo) ? asset('logo/'.$client->logo) : '' }}" />
                        </div>
                    </div>
                    <div id="client_placeholder"
                        class="{{ !isset($client) ? 'avatar placeholder' : 'avatar placeholder hidden' }}">
                        <div class="bg-neutral text-neutral-content w-24 rounded-full">
                            <span class="text-3xl">Logo</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900 mb-2">
                    Client Description
                    <strong class='text-red-400'>*</strong>
                </label>
                <textarea id="description" name="description" class="textarea textarea-bordered w-full"
                    placeholder="Service description" rows="5"
                    required>{{old('description', isset($client->description) ? $client->description : '' )}}</textarea>
                @error('description')
                <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mr-auto">
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ isset($client) ? "Update" : "Submit" }}
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin>

<script>
    function handleUploadedLogo(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const img = document.getElementById('logo_img');
                img.src = e.target.result;  // Set image source with data URL

                $('#client_logo').removeClass('hidden')
                $('#client_placeholder').addClass('hidden')
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            $('#client_logo').addClass('hidden')
            $('#client_placeholder').removeClass('hidden')
        }
    }
</script>