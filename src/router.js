import Vue from 'vue'
import VueRouter from  'vue-router'


import HomePage from './views/home/Home'
import ListPage from './views/classifylist/ClassifyList'



Vue.use(VueRouter)

const routes=[
	{
		path: '/',
		component:HomePage
	},
	{
		path:'/classify',
		component:ListPage

	}
	
]



const router=new VueRouter({
	mode:'history',
	routes,
	linkActiveClass: "active"
})

router.afterEach(function(route){
	console.dir('router.afterEach')
})

module.exports = router;
