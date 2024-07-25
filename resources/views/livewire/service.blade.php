<section class="flex flex-col gap-2 my-2 md:flex-row md:gap-4">
    <div class="h-[30vh] rounded-2xl bg-center bg-cover md:basis-3/5 md:h-screen md:sticky md:top-0"
        style="background-image: url('{{ asset('img/img2.jpg') }}')">
        <div class="absolute w-[100%] p-8 bottom-0 rounded-b-2xl bg-white/75 hidden md:block">
            <p class="underline font-bold text-3xl">OUR SERVICES</p>
            <p class="my-4">
                We offer you a wide services to support your business.
            </p>
            <div class="mt-2">
                <button class="text-white rounded-full p-2 mb-2 mr-1 {{ $type === "marketing" ? "bg-primary"
                    : "bg-accent" }}" wire:click="change_type('marketing')">
                    Marketing Communication Strategy
                </button>
                <button class="text-white rounded-full p-2 mb-2 ml-1 {{ $type === "production" ? "bg-primary"
                    : "bg-accent" }}" wire:click="change_type('production')">
                    Creative Production
                </button>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-4 md:basis-2/5">
        <div class="rounded-2xl p-8 bg-white shadow mt-2 block md:hidden">
            <p class="text-3xl font-bold underline">
                OUR SERVICES
            </p>
            <p class="my-4">
                We offer you a wide services to support your business.
            </p>
            <div class="mt-2">
                <button class="text-white rounded-full p-2 mb-2 mr-1 {{ $type === "marketing" ? "bg-primary"
                    : "bg-accent" }}" wire:click="change_type('marketing')">
                    Marketing Communication Strategy
                </button>
                <button class="text-white rounded-full p-2 mb-2 ml-1 {{ $type === "production" ? "bg-primary"
                    : "bg-accent" }}" wire:click="change_type('production')">
                    Creative Production
                </button>
            </div>
        </div>
        <div class="flex flex-col gap-2">
            @foreach ($services as $service)
            <x-card.service no="{{ $loop->index + 1 }}" title="{{ $service->name }}"
                description="{{ $service->description }}" />
            @endforeach
        </div>
    </div>
</section>