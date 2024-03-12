<div>
    <form wire:submit="createNewUser" action="">
        <input wire:model="name" type="text" placeholder="name">
        <input wire:model="email" type="text" placeholder="email">
        <input wire:model="password" type="text" placeholder="password">

        <button>Create</button>
    </form>


    @foreach($users as $user)
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>
    @endforeach
</div>
