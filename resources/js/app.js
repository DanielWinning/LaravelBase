import Vue from "vue";
import Hello from "./components/Hello.vue";

const app = new Vue({
    el: "#app",
    components: {
        Hello
    },
    data: {
        _token: document.getElementById("csrf-token").content
    }
});
