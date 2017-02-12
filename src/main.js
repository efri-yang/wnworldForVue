import Vue from 'vue'
import App from './App'
import store from './store'
import router from './router'


import '../static/lib/flexible.js'
//store和router尽量小写
var vm=new Vue({
	el:"#app",
	store,
	router,
	render:h=>h(App)
})