<x-app-layout>

    <!-- Remove this -->
    <div class="mx-auto max-w-5xl py-12 text-center">
        <h1 class="text-3xl font-bold">Welcome to your new Laravel application</h1>

        <div class="w-full my-4">
            <input type="text" v-model="searchTerm" placeholder="Start typing to filter routes" class="w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div class="mt-8 text-left">
            <table class="w-full">
                <thead>
                <tr class="border border-gray-400 bg-gray-400">
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
    </div>

    <x-slot name="scripts">
        <script>
            let app = new Vue({
                el: "#app",
                data: {
                    routes: {!! json_encode($routeList) !!},
                    searchTerm: ""
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
