<h3 class = "font-bold text-lg mb-4 my-2 block">Ultimi voti del tuo team</h3>

<ul>
    @foreach(range(1,25) as $index)
    <li class="my-5 ">
        <div class="flex item-center ">
            <img src="/" alt="" class="rounded-full mr-4">
            Santino Isgrò
        </div>
    </li>
    @endforeach
</ul>