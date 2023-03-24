import './bootstrap';

import { createApp } from 'vue';

import Welcome from './Components/Welcome.vue';
import Home from './Components/Home.vue';

const app = createApp({});

app.component('welcome', Welcome);
app.component('home', Home);

app.mount('#app');
