<div>
    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
            <x-cart color="white" size="30"/>
            <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
            </span>
        </x-slot>

        <x-slot name="content">
            <li class="flex px-2 border-b border-gray-200">
                <img class="h15 w-20 object-cover mr-4" src="https://pix6.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768">
                 <article class="flex-1">
                <h1 class="font-bold">Hotel Patuju</h1>
                <p>Cant: 1</p>
                <p>USD: 200</p>
                 </article>
                </li>


            <div class="py-6 px-4">

                <a class="w-full px-16 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded" href="{{route('shoping-cart')}}">pagar</a>
            </div>
        </x-slot>
    </x-jet-dropdown>
</div>

