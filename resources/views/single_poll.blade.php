<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <img src={{$poll->user->avatar}} class="rounded-full mr-2 w-10 h-10">
    </div>

    <div class="w-full">
    <h5 class="font-bold mb-4">{{$poll->user->name}}</h5>
        <input class="mb-4" type="radio" id="player1" name="selected" value="player1">
        <label for="player1">{{$poll->player1}}</label>
        <br>
        <input class="mb-4" type="radio" id="player2" name="selected" value="player2">
    <label for="player2">{{$poll->player2}}</label>
    </div>
    <hr class="mb-8">
    <footer class="flex justify-between">
        <button class="bg-blue-300 rounded-lg shadow py-4 px-2 text-white"type="submit">Vote</button>
    </footer>
</div>