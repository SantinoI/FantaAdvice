<div class="flex-1 ">
            <div class="border border-blue-400 rounded-lg py-2 px-8 mb-8">
                <form action="/polls" method="POST">
                    @csrf
                    <div class="inline relative w-50 m-2">
                        <select name="player1_selected" id="player1_selected" class=" block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline ">
                            <option>Player 1</option>
                        </select>
                    </div>

                    <div class="inline relative w-50 m-2">
                        <select name="player2_selected" id="player2_selected" class=" block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                             <option>Player 2</option>
                        </select>
                    </div>

                    <hr class="my-2">

                    <footer class="flex justify-between">
                        <img src="{{auth()->user()->avatar}}" class="rounded-full mr-2 w-10 h-10">
                        <button class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white"type="submit">Create poll</button>
                    </footer>
                </form>
            </div>

        </div>