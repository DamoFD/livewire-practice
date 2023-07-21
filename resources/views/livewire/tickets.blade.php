<section class="w-5/12 border-2 border-gray-200 p-2 mt-10 mr-6 rounded-lg">
    <h1 class="text-3xl font-extrabold">Support Tickets</h1>

    @foreach ($tickets as $ticket)
        <div wire:click="$emit('ticketSelected', {{$ticket->id}})" class="mt-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:bg-gray-100 {{$active == $ticket->id ? 'bg-gray-200 hover:bg-gray-200' : ''}}">
            <p class="mx-2 pb-2">{{$ticket->question}}</p>
        </div>
    @endforeach
</section>
