<h3 class = "font-bold text-lg mb-4 my-2 block">Ultimi voti del tuo team</h3>

<ul>
    @forelse($players as $player)
    <li class="my-5 ">
        <div class="items-center">
            <img src="{{$player->img}}" alt="" class="rounded-full ml-2 mr-4 ">
        <p class="font-bold ml-2">{{$player->name}}</p>
        <p class=" ml-2"> Juventus</p>
        <p class="font-bold ml-2"> {{$player->fantamedia}}</p>
        <hr>
        </div>
    </li>
    @empty
        <p class="p-4">Please insert your Team</p>

    @endforelse
</ul>