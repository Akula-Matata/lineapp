<!DOCTYPE html>
<html lang="ru">

    @include('partials._head')

    <body>

        @include('partials._nav')

        <br>

        <div class="container">

        	@include('partials._messages')

            {{-- {{ Auth::check() ? "Logged In" : "Logged Out"}} --}}
       
            @yield('content')

        </div>

        @include('partials._scripts')

    </body>

</html>
