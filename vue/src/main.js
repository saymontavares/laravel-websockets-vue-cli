import Vue from 'vue'
import App from './App.vue'

import axios from 'axios'
import Echo from 'laravel-echo'
window.Pusher = require('pusher-js')

window.Echo = new Echo({
  broadcaster: 'pusher',
  key: 'chatlocalkey',
  wsHost: '127.0.0.1',
  wsPort: 6001,
  disableStats: true,
  enabledTransports: ['ws', 'wss'],
  forceTLS: false,
  authEndpoint: 'http://127.0.0.1:8000/broadcasting/auth'
})

Vue.config.productionTip = false
Vue.prototype.$http = axios;

new Vue({
  render: h => h(App),
}).$mount('#app')
