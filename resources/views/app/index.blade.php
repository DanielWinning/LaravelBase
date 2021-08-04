<x-app-layout>

    @auth
        <div class="w-full bg-blue-500 text-sm text-gray-50">
            <div class="mx-auto max-w-5xl text-right py-1">
                <span class="mr-4">Welcome back, {{ auth()->user()->first_name }}</span>
                <form action="/logout" method="post" class="inline-block">
                    @csrf
                    <input type="submit" value="Logout" class="bg-transparent cursor-pointer"/>
                </form>
            </div>
        </div>
    @endauth

    <!-- Remove this -->
    <div v-bind:class="[!auth ? 'flex items-center justify-center' : '', 'mx-auto max-w-5xl py-12 text-center min-h-screen']">
        <div>
            <h1 class="text-3xl font-bold">Welcome to your new Laravel application</h1>

            @auth
                @if(auth()->user()->isSuperUser())
                    <div class="w-full my-4">
                        <input type="text" v-model="searchTerm" placeholder="Start typing to filter routes" class="w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mt-8 text-left">
                        <table class="w-full">
                            <thead>
                            <tr class="border border-blue-500 bg-blue-500">
                                <th class="px-4 py-2">Route</th>
                                <th class="px-4 py-2">Methods</th>
                                <th class="px-4 py-2">Controller</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="route in routeList" class="border border-gray-400">
                                <td v-text="route.uri" class="px-4 py-2"></td>
                                <td v-text="route.methods" class="px-4 py-2"></td>
                                <td v-text="route.controller ?? '-'" class="px-4 py-2"></td>
                                <td v-text="route.controllerAction" class="px-4 py-2"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-gray-500 mt-6">
                        <p class="my-3">Welcome back, {{ auth()->user()->first_name }}!</p>
                    </div>
                @endif
            @else
                <div class="text-gray-500 mt-6">
                    <p class="my-3">Welcome to your new Laravel application.</p>
                    <p class="my-3">You'll need to <a href="/login" class="underline text-blue-500">login</a> or <a href="/register" class="underline text-blue-500">register</a> to access more of the application.</p>
                </div>
            @endauth
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            let app = new Vue({
                el: "#app",
                data: {
                    routes: {!! json_encode($routeList) !!},
                    searchTerm: "",
                    auth: {!! json_encode(!is_null(auth()->user()) && auth()->user()->isSuperUser()) !!}
                },
                computed: {
                    routeList() {
                        return this.routes.filter(route => route.uri.includes(this.searchTerm));
                    }
                }
            });
        </script>
    </x-slot>

</x-app-layout>
