
<ul>
    <li>
        <div class="flex item-center my-8">
            <img src="{{auth()->user()->avatar}}" alt="" class="rounded-full mr-4 ">
            
        </div>
        
        <div class="flex-col ml-6 text-lg">
            <p class=" font-bold text-gray-700 my-3 mx-4">{{auth()->user()->name}}</p>
            <div class="flex">
                <p class=" font-bold my-3 ml-8 mr-3">{{auth()->user()->credits}} </p>
            <img src="https://i.ibb.co/GRVFmbn/coin.png" alt="" class="rounded-full  w-10 h-10">
            </div>
            
            
            <hr class="mt-3 mb-3">
            <ul class="font-bold text-gray-700">
                <li class="mb-3"> <a class="text-lg ">Change Image</a></li>
            </ul>
           
            


            <a  href="{{ route('logout') }}" 
                class="font-bold text-gray-700 no-underline"
                onclick="event.preventDefault();
                document.getElementById('logout-button').submit();">
                {{ __('Logout') }}
            </a>

            
            <form id="logout-button" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </div>
    
    </li>
</ul>