import Vue from 'vue'
import App from './App'
import store from './store'
import router from './router'


//store和router尽量小写
new Vue({
	el:"#app",
	store,
	router,
	render:h=>h(App)
})