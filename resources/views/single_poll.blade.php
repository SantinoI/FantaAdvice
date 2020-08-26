<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <img src={{$poll->user->avatar}} class="rounded-full mr-2 w-10 h-10">
    </div>

    <div class="w-full">
        <div class="flex justify-between">
            <h5 class="font-bold text-blue-500 mb-8">{{$poll->user->name}}</h5>

            @if($poll->user_id == Auth()->user()->id ||Auth()->user()->is_super_admin == 1 )
            <form action="/polls/{{$poll->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">
                    <img src="https://i.ibb.co/jMR7RqQ/close.png" width=10" height="10">
                </button>
            </form>
            @endif

        </div>
        
            <form method="POST" action="/home/{{$poll->id}}/vote1" >
                @csrf
                <div class ="flex justify-between mt-6 mr-6">
                    <p class="font-bold text-gray-700 mb-8">{{$poll->player1}}</p>
                    <div class="flex">
                        
                    <button type="submit" class=" {{$poll->isVoted1By(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}} font-bold  "> {{$poll->voti1 ?: 0}}</button>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-2 mb-2 w-8 {{$poll->isVoted1By(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}}" width="30px" height="30px">
                            <g class="fill-current">
                                <path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"></path>
                            </g>
                        </svg>   
                    </div>        
                </div>
            </form>

        <form method="POST" action="/home/{{$poll->id}}/vote2" >
                
                @method('DELETE')
                @csrf
                <div class ="flex justify-between mt-6 mr-6">
                    <p class="font-bold text-gray-700 mb-8">{{$poll->player2}}</p>
                    <div class="flex">
                        <button type="submit" class="{{$poll->isVoted2By(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}} font-bold  ">{{$poll->voti2 ?: 0}}</button>  
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-2 mb-2 w-8 {{$poll->isVoted2By(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}}" width="30px" height="30px">
                            <g class="fill-current">
                                <path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"></path>
                            </g>
                        </svg>
                    </div> 
                </div>
            </form>         
    </div>
    <hr class="mb-8">
    <div>

    </div>
</div>