<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <img src={{$poll->user->avatar}} class="rounded-full mr-2 w-10 h-10">
    </div>

    <div class="w-full">
        <h5 class="font-bold mb-8">{{$poll->user->name}}</h5>
            <div class ="flex justify-between mt-6 mr-6">
                <p>{{$poll->player1}}</p>
                <div class="flex">
                <label class=" {{$poll->isVoted1By(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}} font-bold  "> {{$poll->voti1 ?: 0}}</label>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-2 mb-2 w-8 {{$poll->isVoted1By(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}}" width="30px" height="30px">
                        <g class="fill-current">
                            <path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"></path>
                        </g>
                    </svg>
                    
                </div>        
            </div>

            <div class ="flex justify-between mt-6 mr-6">
                <p>{{$poll->player2}}</p>
                <div class="flex">
                    <label class="{{$poll->isVoted2By(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}} font-bold  ">{{$poll->voti2 ?: 0}}</label>  
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-2 mb-2 w-8 {{$poll->isVoted2By(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}}" width="30px" height="30px">
                        <g class="fill-current">
                            <path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"></path>
                        </g>
                    </svg>
                </div> 
            </div>         
    </div>
    <hr class="mb-8">
    <div>

    </div>
</div>