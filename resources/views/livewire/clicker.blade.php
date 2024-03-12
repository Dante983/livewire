<div>
    @if(session('message'))
    <span class="text-green-500">{{ session('message') }}</span>
    @endif
    <form class="p-5" wire:submit="createNewUser" action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="name" type="text" placeholder="name">
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="email" type="text" placeholder="email">
        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="password" type="text" placeholder="password">
        @error('password') <span class="text-red-500">{{ $message }}</span> @enderror

        <button class="block rounded px-3 py-1 bg-gray-400 text-white">Create</button>
    </form>


    @foreach($users as $user)
    <p class="">{{ $user->name }}</p>
    @endforeach
</div>
