import Vue from 'vue'
import Vuex from 'vuex'


Vue.use(Vuex)


const state={
	animateIn:"slideInRight",
	animateOut:"slideOutLeft",
	animateMode:"",
	drawerOpen:false
}

const getters={
	
}

const mutations={
	changeAnimate(state,playload){
		if(playload.mode=="normal"){
			state.animateIn="slideInRight";
			state.animateOut="slideOutLeft";
			state.animateMode=''	
		}else if(playload.mode=="reverse"){
			state.animateIn='slideInLeft';
			state.animateOut='slideOutRight';
			state.animateMode=''
		}else if(playload.mode == 'change'){
			state.animateIn = playload.animateIn
			state.animateOut = playload.animateOut
			state.animateMode = playload.animateMode
		}
	}
}

const actions={
	
}

export default new Vuex.Store({
	state,
	getters,
	mutations,
	actions
})