import Vue from 'vue'
import VueRouter from  'vue-router'


import HomePage from './views/home/Home'
import ListPage from './views/classifylist/ClassifyList'
import AboutMe from './views/aboutme/AboutMe'
import DetailPage from './components/DetailPage'


Vue.use(VueRouter)

const routes=[
	{
		path: '/',
		component:HomePage
	},
	{
		path:'/category',
		component:ListPage
	},
	{
		path:'/aboutme',
		component:AboutMe
	},
	{
		path:"/detailpage/:id",
		name:"detailpage",
		component:DetailPage
	}

	
]



const router=new VueRouter({
	mode:'hash',
	routes,
	linkActiveClass: "active"
})


module.exports = router;
