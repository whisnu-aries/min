<div>
    @if (session()->has('success'))
    <div class="alert alert-success my-3 text-white">
        {{ session()->get('success') }}
    </div>
    @endif

    <div class="flex mb-4">
        <a href="{{route('client.create')}}">
            <button class="btn btn-outline btn-success " type="button">Add Client</button>
        </a>
        <label class="input input-bordered ml-auto flex items-center max-w-md gap-2">
            <input type="text" class="grow" placeholder="Search" wire:model="search" wire:keyup="$commit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                <path fill-rule="evenodd"
                    d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                    clip-rule="evenodd" />
            </svg>
        </label>
    </div>

    <table class="table">
        <thead>
            <th>No</th>
            <th>Logo</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tbody>
            @if ($data)
            @foreach ($data as $client)
            <tr class="hover">
                <th>{{ $loop->iteration }}</th>
                <td>
                    @if($client->logo == '')
                    <div class="avatar placeholder">
                        <div class="bg-neutral text-neutral-content w-24 rounded-full">
                            <span class="text-xl">{{$client->name}}</span>
                        </div>
                    </div>
                    @else
                    <div id="client_logo" class="avatar">
                        <div class="w-24 rounded-full">
                            <img id="logo_img" src="{{ isset($client->logo) ? asset('logo/'.$client->logo) : '' }}" />
                        </div>
                    </div>
                    @endif
                </td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->description }}</td>
                <td class="flex gap-2">
                    <a href="{{ route('client.edit', $client->uuid) }}">
                        <button class="btn btn-sm btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                stroke="white" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </button>
                    </a>
                    <a href="{{ route('client.destroy', $client->uuid) }}">
                        <button class="btn btn-sm btn-error">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                stroke="white" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="hover">
                <td class="text-center" colspan="5">No data to show.</td>
            </tr>
            @endif
        </tbody>
    </table>

    @if ($data)
    {{ $data->links() }}
    @endif
</div>