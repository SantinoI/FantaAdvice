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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Start by entering your team
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insert Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <select name="" id="" class=" block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">  
                                <option value="">ciao</option>   
                        </select> 
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add Player</button>
                    </div>
                </div>
            </div>
      </div>
    @endforelse
</ul>

