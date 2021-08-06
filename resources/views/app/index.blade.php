<x-app-layout>
    <hello v-bind:auth="{{ json_encode(!is_null(auth()->user())) }}" @if(!is_null(auth()->user()))
           v-bind:username="{{ json_encode(auth()->user()->first_name . " " . auth()->user()->last_name) }}" @endif>
    </hello>
</x-app-layout>
