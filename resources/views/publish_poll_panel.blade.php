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
                        <button class="bg-transparent hover:bg-blue-500 text-blue-500 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">Create poll</button>
                    </footer>
                </form>

                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>