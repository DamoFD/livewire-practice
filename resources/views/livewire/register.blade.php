<div class="w-full flex justify-center">
    <form wire:submit.prevent="submit" class="flex flex-col items-center bg-gray-200 rounded-lg w-2/3 mt-20 py-10">
        <h1 class="text-xl font-extrabold">Sign up to get started</h1>
        <hr class="border-gray-300 w-2/3 mt-4">
        <div class="mt-10 flex flex-col w-2/3">
        <input wire:model="form.name" class="bg-gray-100" placeholder="name" type="text" />
            @error('form.name') <p class="text-red-500">{{ $message }}</p> @enderror
        <input wire:model="form.email" class="bg-gray-100 mt-2" placeholder="email" type="email" />
            @error('form.email') <p class="text-red-500">{{ $message }}</p> @enderror
        <input wire:model="form.password" class="bg-gray-100 mt-2" placeholder="password" type="password" />
            @error('form.password') <p class="text-red-500">{{ $message }}</p> @enderror
        <input wire:model="form.password_confirmation" class="bg-gray-100 mt-2" placeholder="Confirm Password" type="password" />
            @error('form.password_confirmation') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>
        <button class="bg-gray-500 mt-2 px-16 py-2" type="submit">Register</button>
    </form>
</div>
