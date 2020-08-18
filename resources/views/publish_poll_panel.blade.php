<div class="flex-1 ">
            <div class="border border-blue-400 rounded-lg py-3 px-8 mb-8">
                <h1 class="font-bold text-lg text-blue-500">Ask your question to the FantaAdvice community</h1>
                <form action="/polls" method="POST">
                    @csrf
                    <div class="inline relative w-50 m-2">
                        <select name="player1_selected" id="player1_selected" class=" block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline ">
                            @foreach ($players as $player)
                                <option>{{$player->name}}</option>    
                            @endforeach
                        </select>
                    </div>

                    <div class="inline relative w-50 m-2">
                        <select name="player2_selected" id="player2_selected" class=" block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($players as $player)
                                <option>{{$player->name}}</option>    
                            @endforeach
                            
                        </select>
                    </div>

                    <hr class="my-2">

                    <footer class="flex justify-between">
                        <img src="{{auth()->user()->avatar}}" class="rounded-full mr-2 w-10 h-10">
                        <button class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white"type="submit">Create poll</button>
                    </footer>
                </form>
                @error('player1_selected')
                    <p class="text-red-500 font-bold text-sm mt-1 mb-1">{{$message}}</p>
                @enderror
            </div>
        </div>