import './bootstrap';
import '../css/app.css';

import vApp from "./components/layouts/app.vue"

import { createApp } from 'vue/dist/vue.esm-bundler.js';

const app = createApp({})
app.component('app', vApp)
app.mount('#app')
