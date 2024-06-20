import './bootstrap';
import '../css/app.css';
import { createApp } from 'vue';
import routes from './routes';


createApp({})
    .use(routes)
    .mount("#app")
