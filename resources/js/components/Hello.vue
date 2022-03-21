<template>
    <div class="w-screen min-h-screen flex justify-center items-center">
        <div class="max-w-5xl mx-auto bg-white rounded-md shadow-md p-8 text-gray-500 text-center">
            <h1 class="text-2xl font-semibold mb-2">Welcome to your new Laravel application!</h1>
            <div v-if="auth && username !== ''">
                <p>Welcome back, {{ username }}</p>
                <form action="/logout" method="post" class="mt-4">
                    <input type="hidden" name="_token" :value="csrfToken" />
                    <input type="submit" value="Logout" class="bg-blue-500 py-1 px-2 text-white cursor-pointer border border-blue-500 hover:text-blue-500 hover:bg-white" />
                </form>
            </div>
            <div v-else>
                <a href="/login">Login</a> | <a href="/register">Register</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "hello",
    props: ["auth", "username"],
    data() {
        return {
            csrfToken: document.getElementById("csrf-token").content
        }
    }
}
</script>
