<section class="flex flex-col gap-2 my-2">
    <div class="bg-white shadow p-8 rounded-2xl">
        <div class="text-center">
            <p>Ready to boost your business?</p>
            <span>let's discuss what you need.</span>
        </div>

        @session('status')
        <div class="p-4 bg-green-100">
            {{ $value }}
        </div>
        @endsession

        <form class="mx-auto mt-8 max-w-xl" wire:submit="save">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 mb-3">
                <div>
                    <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
                    <div class="mt-1">
                        <input type="text" id="name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            wire:model="name">
                        @error('name')
                        <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="business_name" class="block text-sm font-semibold leading-6 text-gray-900">Business
                        Name</label>
                    <div class="mt-1">
                        <input type="text" id="business_name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            wire:model="business_name">
                        @error('business_name')
                        <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 mb-3">
                <div>
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-1">
                        <input type="email" id="email"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            wire:model="email">
                        @error('email')
                        <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="no_whatsapp" class="block text-sm font-semibold leading-6 text-gray-900">No
                        Whatsapp</label>
                    <div class="mt-1">
                        <input type="tel"
                            id="no_whatsapp"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            wire:model="no_whatsapp">
                        @error('no_whatsapp')
                        <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 mb-3">
                <div>
                    <label for="business_name" class="block text-sm font-semibold leading-6 text-gray-900">
                        Service you might needs:
                    </label>
                    <select class="mt-1 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" wire:model="service">
                        @foreach ($services as $service)
                        <option value="{{$service->uuid}}">{{$service->name}}</option>
                        @endforeach
                    </select>
                    @error('service_id')
                    <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 mb-3">
                <div>
                    <label for="description" class="block text-sm font-semibold leading-6 text-gray-900">
                        Describe what you needs:
                    </label>
                    <textarea class="mt-1 block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        id="description" wire:model="description" ></textarea>
                    @error('description')
                    <div class="alert mt-2 p-2 bg-red-400 text-white text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mt-10">
                <button type="submit"
                    class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's
                    talk</button>
            </div>
        </form>
    </div>
</section>