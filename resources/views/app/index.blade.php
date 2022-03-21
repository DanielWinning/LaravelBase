<x-app-layout>
    <!--
        Welcome to your new Laravel application, with Breeze, Vue, Tailwind and SASS.
        Delete all this and build something cool :)
    -->
    <hello :auth="{{ json_encode(!is_null(auth()->user())) }}"
           @if(!is_null(auth()->user()))
           :username="{{ json_encode(auth()->user()->first_name . " " . auth()->user()->last_name) }}"
           @endif>
    </hello>
</x-app-layout>
