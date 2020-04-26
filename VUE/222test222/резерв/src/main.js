import Vue from 'vue'
import App from './App.vue'

Vue.filter('uppercase', value => value.toUpperCase())

new Vue({
  el: '#app',
  render: h => h(App)
})




