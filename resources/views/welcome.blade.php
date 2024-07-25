<x-layouts.app>
    <section class="flex flex-col gap-2 mb-2 md:flex-row md:gap-4">
        <div class="bg-secondary flex flex-col justify-end h-[40vh] rounded-2xl p-10 md:basis-1/2 md:h-[50vh]">
            <p class="font-bold text-3xl text-white md:text-5xl">All-in-one</p>
            <p class="text-3xl text-white md:text-5xl">Social media<br />business solution.</p>
        </div>
        <div class="h-[40vh] rounded-2xl md:basis-1/2 md:h-[50vh] bg-center bg-cover"
            style="background-image: url('{{ asset('/img/img1.jpg') }}')">
        </div>
    </section>

    <section class="flex flex-col gap-2 my-2 md:flex-row md:gap-4">
        <x-card.value value="100+" title="Clients"
            description="Help more than 100+ brands brand to handle their Social Media Marketing, and has several brands that have been managed for more than 3 years." />
        <x-card.value value="50+" title="Clients"
            description="Help more than 50+ Brands Campaign and Digital Asset for their business." />
        <x-card.value value="100%" title="Commitments"
            description="Client satisfaction is out top priority, we take pride in our 100% track record of happy clients." />
    </section>

    <section class="my-2">
        <div class="bg-white shadow p-8 rounded-2xl">
            <p class="underline text-3xl">HERE WE ARE</p>
            <p class="mt-8 text-slate-600">
                Impact to our people, clients, partners and society through
                creativity has been our gigs for 4+ years. From brands you've
                heard to brands you will, we help them grow their social media
                businesses with integrated digital marketing strategy and
                campaigns.
            </p>
        </div>
    </section>

    <section class="flex flex-col gap-2 my-2 h-screen md:flex-row md:gap-4 md:h-[50vh]">
        <x-card.image image="img/person1.jpg" title="Thinkers" />
        <x-card.image image="img/person2.jpg" title="Designers" />
        <x-card.image image="img/person3.jpg" title="Strategist" />
    </section>

    <section class="my-2">
        <div class="p-8 bg-white shadow rounded-2xl">
            <p class="text-slate-600">
                So, We do really understand the process of creative thinking, producing a good visual, and how to grow
                your social media business. We can communicate your brand and its messages in an impactful and enggaging
                way on your social media platforms, either with organic content strategies or paid ad strategies.
            </p>
            <p class="mt-8 text-slate-600">
                Minette Creaative Lab is a digital marketing agency based in <strong>Bandung, Indonesia</strong>.
            </p>
        </div>
    </section>

    @livewire('service')

    @livewire('client')

    @livewire('ContactForm')

    <section class="bg-zinc-900">
        <div class="grid text-white md:gap-16 md:grid-cols-3">
            <div class="p-4">
                <div class="w-full h-20 mb-8 bg-blue-200 ">IMG</div>
                <p>+62 896-6839-1391</p>
                <p>minettestudios@gmail.com</p>
            </div>
            <div class="p-4">
                <div class="grid grid-flow-row gap-2">
                    <a href="#" class="underline">Service</a>
                    <a href="#" class="underline">Projects</a>
                    <a href="#" class="underline">Contact Us</a>
                </div>
            </div>
            <div class="p-4">
                <p>Follow us on:</p>
                <div class="flex gap-2 mt-2">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-tiktok"></i>
                    <i class="fa-regular fa-envelope"></i>
                </div>
            </div>
        </div>
        <p class="text-center text-white mt-4">&copy;2024 by Minette Creative Lab.</p>
    </section>

</x-layouts.app>