<x-layouts.app>
    <section>
        <div class="h-[60vh] rounded-2xl bg-center bg-cover"
            style="background-image: url('{{ asset('/img/img1.jpg') }}')">
        </div>
    </section>

    <section class="my-3">
        <div class="bg-white shadow p-8 rounded-2xl">
            <p class="text-6xl">{{ $client->name }}</p>
            <p class="mt-4 md:mt-16">{{ $client->description }}</p>
        </div>
    </section>

    <dialog id="detail_modal" class="modal">
        <div class="modal-box h-full">
            <form method="dialog" class="relative m-0" style="z-index:50;">
                <button
                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 bg-slate-200 hover:bg-slate-300">✕</button>
            </form>
            <div id="modal_carousel" class="owl-carousel owl-theme">
                <div class="h-[60vh] rounded-2xl bg-center bg-cover"
                    style="background-image: url('https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg')">
                </div>
                <div class="h-[60vh] rounded-2xl bg-center bg-cover"
                    style="background-image: url('https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.jpg')">
                </div>
                <div class="h-[60vh] rounded-2xl bg-center bg-cover"
                    style="background-image: url('https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.jpg')">
                </div>
                <div class="h-[60vh] rounded-2xl bg-center bg-cover"
                    style="background-image: url('https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.jpg')">
                </div>
                <div class="h-[60vh] rounded-2xl bg-center bg-cover"
                    style="background-image: url('https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.jpg')">
                </div>
                <div class="h-[60vh] rounded-2xl bg-center bg-cover"
                    style="background-image: url('https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.jpg')">
                </div>
                <div class="h-[60vh] rounded-2xl bg-center bg-cover"
                    style="background-image: url('https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.jpg')">
                </div>
            </div>


            <p class="text-2xl mt-3 font-bold">This is the Title</p>
            <p>Lorem ipsum dolor sit amet, officia excepteur ex fugiat reprehenderit enim labore culpa sint ad nisi
                Lorem pariatur mollit ex esse exercitation amet. Nisi anim cupidatat excepteur officia.
                Reprehenderit nostrud nostrud ipsum Lorem est aliquip amet voluptate voluptate dolor minim nulla est
                proident. Nostrud officia pariatur ut officia. Sit irure elit esse ea nulla sunt ex occaecat
                reprehenderit commodo officia dolor Lorem duis laboris cupidatat officia voluptate. Culpa proident
                adipisicing id nulla nisi laboris ex in Lorem sunt duis officia eiusmod. Aliqua reprehenderit
                commodo ex non excepteur duis sunt velit enim. Voluptate laboris sint cupidatat ullamco ut ea
                consectetur et est culpa et culpa duis.</p>
        </div>
    </dialog>

    <section class="my-3">
        <div class="bg-white shadow p-8 rounded-2xl">
            <p>See our collaborations.</p>
            <div class="flex my-4" x-data="{ currentSlide: 1 }">
                <div class="flex items-center mx-2">
                    <button type="button" @click="owl.trigger('prev.owl.carousel', [300]);"
                        class="bg-white rounded-full p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </div>
                <div class="carousel w-full">
                    <div id="project_carousel" class="owl-carousel owl-theme">
                        {{-- @foreach ($clients as $item) --}}
                        <div class="item w-full h-40" onclick="detail_modal.showModal()">
                            {{-- <a href="{{ route('clients.detail', $item->uuid) }}"> --}}
                                <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg"
                                    class="w-full h-full rounded object-cover absolute inset-0 z-10" />
                                <div class="flex justify-center items-end absolute bottom-2 left-0 mx-4 z-20">
                                    <div class="flex flex-row items-center gap-2">
                                        <div class="rounded-full p-1 w-6 h-6 bg-slate-600" >
                                        </div>
                                        <span class="text-sm text-white">Title</span>
                                    </div>
                                </div>
                            {{-- </a> --}}
                        </div>
                        <div class="item w-full h-40" onclick="detail_modal.showModal()">
                            {{-- <a href="{{ route('clients.detail', $item->uuid) }}"> --}}
                                <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg"
                                    class="w-full h-full rounded object-cover absolute inset-0 z-10" />
                                <div class="flex justify-center items-end absolute bottom-2 left-0 mx-4 z-20">
                                    <div class="flex flex-row items-center gap-2">
                                        <div class="rounded-full p-1 w-6 h-6 bg-slate-600" >
                                        </div>
                                        <span class="text-sm text-white">Title</span>
                                    </div>
                                </div>
                            {{-- </a> --}}
                        </div>
                        <div class="item w-full h-40" onclick="detail_modal.showModal()">
                            {{-- <a href="{{ route('clients.detail', $item->uuid) }}"> --}}
                                <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg"
                                    class="w-full h-full rounded object-cover absolute inset-0 z-10" />
                                <div class="flex justify-center items-end absolute bottom-2 left-0 mx-4 z-20">
                                    <div class="flex flex-row items-center gap-2">
                                        <div class="rounded-full p-1 w-6 h-6 bg-slate-600" >
                                        </div>
                                        <span class="text-sm text-white">Title</span>
                                    </div>
                                </div>
                            {{-- </a> --}}
                        </div>
                        <div class="item w-full h-40" onclick="detail_modal.showModal()">
                            {{-- <a href="{{ route('clients.detail', $item->uuid) }}"> --}}
                                <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg"
                                    class="w-full h-full rounded object-cover absolute inset-0 z-10" />
                                <div class="flex justify-center items-end absolute bottom-2 left-0 mx-4 z-20">
                                    <div class="flex flex-row items-center gap-2">
                                        <div class="rounded-full p-1 w-6 h-6 bg-slate-600" >
                                        </div>
                                        <span class="text-sm text-white">Title</span>
                                    </div>
                                </div>
                            {{-- </a> --}}
                        </div>
                        <div class="item w-full h-40" onclick="detail_modal.showModal()">
                            {{-- <a href="{{ route('clients.detail', $item->uuid) }}"> --}}
                                <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg"
                                    class="w-full h-full rounded object-cover absolute inset-0 z-10" />
                                <div class="flex justify-center items-end absolute bottom-2 left-0 mx-4 z-20">
                                    <div class="flex flex-row items-center gap-2">
                                        <div class="rounded-full p-1 w-6 h-6 bg-slate-600" >
                                        </div>
                                        <span class="text-sm text-white">Title</span>
                                    </div>
                                </div>
                            {{-- </a> --}}
                        </div>
                        <div class="item w-full h-40" onclick="detail_modal.showModal()">
                            {{-- <a href="{{ route('clients.detail', $item->uuid) }}"> --}}
                                <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg"
                                    class="w-full h-full rounded object-cover absolute inset-0 z-10" />
                                <div class="flex justify-center items-end absolute bottom-2 left-0 mx-4 z-20">
                                    <div class="flex flex-row items-center gap-2">
                                        <div class="rounded-full p-1 w-6 h-6 bg-slate-600" >
                                        </div>
                                        <span class="text-sm text-white">Title</span>
                                    </div>
                                </div>
                            {{-- </a> --}}
                        </div>
                        {{-- @endforeach --}}
                    </div>
                </div>
                <div class="flex items-center mx-2">
                    <button type="button" @click="owl.trigger('next.owl.carousel', [300]);"
                        class="mr-2 bg-white rounded-full p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>


<script>
    var owl = $('#project_carousel');
    var owl_modal = $('#modal_carousel');

    $(document).ready(function() {
        owl.owlCarousel({
            margin: 8,
            nav: false, 
            dots: false, 
            loop: false,
            responsiveClass: true, 
            responsive: {
                0: {
                items: 1,
                },
                400: {
                items: 2,
                },
                700: {
                items: 4,
                },
                1000: {
                items: 6,
                }
            }
        })

        owl_modal.owlCarousel({
            items:1,
            loop: true,
            nav: false, 
        })
    })
</script>