import Vue from 'vue'
import VueRouter from  'vue-router'


import Home from './components/Home'
import FrontEnd from './components/FrontEnd'
import SuiYu from './components/SuiSuiYu'



Vue.use(VueRouter)

const routes=[
	{path: '/',redirect:{name:"home"}},
	{path:"/home",component:Home,name:"home"},
	{path:'/frontEnd',component:FrontEnd},
	{path:'/suisuiyu',component:SuiYu}
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
