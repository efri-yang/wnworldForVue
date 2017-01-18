import Vue from 'vue'
import Vuex from 'vuex'


Vue.use(Vuex)


const state={
	count:0,
	handHistory:[]
}

const getters={
	count:state=>state.count,
	handHistory:state=>state.handHistory
}

const mutations={
	increment (state){
		state.count++
	},
	decrement (state){
		state.count--
	},
	addHistory(state,text){
		state.handHistory.push(text)
	}
}

const actions={
	increment ({commit}){
		commit('increment');
		commit('addHistory','increment')
	},
	decrement ({commit}){
		commit('decrement')
		commit('addHistory','decrement')
	},
	incrementIfOdd ({commit,state}){
		if(state.count % 2 !=0){
			state.count++;
			commit('addHistory','increment')
		}
	},
	incrementAsync({commit}){
		return new Promise((resolve,reject)=>{
			setTimeout(()=>{
				commit('increment')
				resolve()
			},1000)
		})
	}
}

export default new Vuex.Store({
	state,
	getters,
	mutations,
	actions
})