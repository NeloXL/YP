import './assets/main.css'

import { createApp, h } from 'vue'
import App from './App.vue'
import router from "@/router/index.js";
const app = createApp({
    render: ()=>h(App)
});

app.use(router).mount('#app');
