require('./bootstrap');

import { createApp } from 'vue';
import router from './router';

import App from './pages/App.vue';

const app = createApp({
    data(){
        return {
            message: 'hi there'
        }
    },
    components: {
        App,
    }
})
app.use(router).mount('#app')



// Vue 2
// window.Vue = require('vue').default;
//

// options object
// Vue 2
// const app = new Vue({
//     router,
//     el: '#app',
//     render: h => h(App)
// });
