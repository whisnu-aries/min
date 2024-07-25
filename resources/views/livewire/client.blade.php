<section class="flex flex-col gap-2 my-2">
    <div class="bg-white shadow p-8 rounded-2xl">
        <p class="text-center">Explore more about our partner success stories.</p>
        <div class="flex my-4">
            <div class="flex items-center mx-2">
                <button type="button" @click="owl.trigger('prev.owl.carousel', [300]);"
                    class="bg-white rounded-full p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </div>
            <div class="carousel w-full overflow-hidden">
                <div class="owl-carousel owl-theme">
                    @foreach ($clients as $item)
                        <div class="item w-full h-40">
                            <a href="{{ route('clients.detail', $item->uuid) }}">
                                <img src="{{ $item->photo }}"
                                    class="w-full h-full rounded object-cover absolute inset-0 z-10" />
                                <div class="flex justify-center items-end absolute bottom-2 left-0 mx-4 z-20">
                                    <div class="flex flex-row items-center gap-2">
                                        {{-- <div class="bg-white rounded-full p-1 flex justify-center items-center bg-center bg-cover w-10 h-10" style="background-image: url('{{ $item->logo }}')">
                                        </div> --}}
                                        
                                        <div class="bg-white rounded-full p-1 flex justify-center items-center w-10 h-10">
                                            {{-- <img src="{{$img}}" class="w-full h-full object-cover absolute inset-0 z-10" /> --}}
                                            <i class="fa-brands fa-instagram"></i>
                                        </div>
                                        <span class="text-sm ">{{ $item->name }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex items-center mx-2">
                <button type="button" @click="owl.trigger('next.owl.carousel', [300]);"
                    class="mr-2 bg-white rounded-full p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>


<script>
    var owl = $('.owl-carousel');
        $(document).ready(function() {
            owl.owlCarousel({
            margin: 8,
            nav: false, 
            dots: false, 
            loop: true,
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
        })
</script>