<nav class="bg-white shadow-lg py-2 px-4">
    <h1 class="font-light text-3xl">BeeFlix</h1>
    <ul class="flex">
        <a href="{{ url()->previous() }}">
            <li class="border-2 bg-black text-white p-1 border-gray-600 text-sm font-medium hover:scale-105 shadow-md">BACK</li>
        </a>
        <a href="{{ route('home') }}">
            <li class="border-2 p-1 border-gray-600 text-sm font-medium text-gray-400 hover:scale-105 shadow-md">VIEW ALL MOVIES</li>
        </a>
    </ul>
</nav>