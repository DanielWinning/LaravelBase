/*import * as Vue from "vue";
import Hello from "./components/Hello.vue";

const app = new Vue({
    el: "#app",
    components: {
        Hello
    },
    data: {
        _token: document.getElementById("csrf-token").content
    }
});*/

import { createApp } from "vue";
import Hello from "./components/Hello.vue";

let app = createApp({
    data() {
        return {
            _token: document.getElementById("csrf-token").content
        }
    },
    components: {
        Hello
    }
}).mount("#app");


