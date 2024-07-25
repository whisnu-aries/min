<div class="navbar bg-zinc-700">
    <div class="flex-1">
        <a href="{{ route('dashboard') }}">
            <img class="h-8 w-auto mx-4" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="logo">
        </a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1 text-white">
            <li><x-navigation.admin_nav_link href="{{ route('service.index') }}">Services</x-navigation.admin_nav_link></li>
            <li><x-navigation.admin_nav_link href="{{ route('client.index') }}">Clients</x-navigation.admin_nav_link></li>
            <li><x-navigation.admin_nav_link href="{{ route('project.index') }}">Project</x-navigation.admin_nav_link></li>
            <li><x-navigation.admin_nav_link href="#contact">Contacts</x-navigation.admin_nav_link></li>
            <li onclick="$('#logout').trigger('click')"><x-navigation.admin_nav_link href="#">Logout</x-navigation.admin_nav_link></li>
        </ul>
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" id="logout"></button>
    </form>
</div>