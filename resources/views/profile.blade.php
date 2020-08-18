
<ul>
    <li>
        <div class="flex item-center my-8">
            <img src="{{auth()->user()->avatar}}" alt="" class="rounded-full mr-4 ">
            
        </div>
        
        <div class="flex-col text-lg font-bold my-3 mx-4">
            <p>{{auth()->user()->name}}</p>
            <br>
            <a  href="{{ route('logout') }}" 
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