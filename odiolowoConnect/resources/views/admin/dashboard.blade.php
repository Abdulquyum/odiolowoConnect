<x-layout>
    <div class="middle">
    <a href="{{ route('admin.add') }}"><div class="bg-primary w-50 middle">Add Programme</div></a>
    <a href="{{route('admin.view')}}"><div class="bg-secondary w-50 middle">View Programme</div></a>
    <a href="{{route('admin.view')}}"><div class="bg-danger w-50 middle">Delete Programme</div></a>
    <a href="{{ route('admin.applicants') }}"><div class="bg-success w-50 middle">View Applicants</div></a>
    </div>
    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif 

<style>
    .middle {
        margin: auto;
        padding: 20px;
        margin-top: 30px;
        text-align: center;
        border-radius: 20%;
    }
</style>
</x-layout>