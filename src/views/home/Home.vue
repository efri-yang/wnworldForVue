<template>
	<div :class="[isOpen ? 'page-box page-home open' : 'page-box page-home' ]">
		<HeaderHome v-on:drawertoggle="drawerToggleClick"></HeaderHome>
		<div class="box-main">
			<List :id="id" :pageNum="pageNum" :count="count"></List>
		</div>
		<div :class="[isOpen ? 'wn-drawer-mask open' :'wn-drawer-mask']" ref="drawerMask"></div>
		<Drawer ref="drawer"></Drawer>
	</div>
</template>
<style lang="scss">
	.box-main{
		

	}
	.page-box{
	-webkit-transition: -webkit-transform 250ms ease-out;
    top: 0;
    width: 100%;
    height:100%;
    position: absolute;
    background:#e5e5e5;
		&.open{
			transform: translate3d(-50%, 0px, 0px);
			margin-left: 1px;
		}
		.wn-drawer-mask {
		    position: fixed;
		    left:0;
		    top:0;
		    bottom: 0;
		    right:0;
		    background-color: rgba(0, 0, 0, 0.8);
		    visibility: hidden;
		    z-index: 10;
		    opacity: 0;
		    &.open{
		    	opacity:1; 
		    	visibility:visible;
		    	-webkit-transition:all 250ms ease-out;
		    }
		}
	}
	.page-home{
		&.open{
			.wn-drawer{
				display: block;
			}
		}
	}
</style>
<script>
    /**
     * 要给<list><list>传入 id(全部或者某个分类) defaultpage(第几页)  每次请求几页
     */
	import HeaderHome from '../../components/HeaderHome';
	import List from '../../components/List';
	import Drawer from '../../components/Drawer';
	import {mapState} from 'vuex';
	export default {
		data(){
			return {
				id:"all",
				pageNum:1,
				count:5
			}
		},
		computed:mapState({
				isOpen:state=>state.drawerOpen
		}),
		watch:{
            '$route' (to,from){
                console.group('homepage:watch-route 创建前状态===============》');
                console.dir('homepage watch-$route to:'+to.path+", from:"+from.path);

            }
        },
		methods:{
			drawerToggleClick:function(){
				this.$store.state.drawerOpen=!this.$store.state.drawerOpen
			}
		},
		beforeCreate(){
			console.dir("cccccc")
		},
		beforeMount(){
            console.group('HOME beforeMount 挂载前状态===============》');
        },
		created(){
			this.$store.dispatch('toggleLoading',true);
			// this.$http.get("/api/wnForVueGetCategory.php").then((response)=>{
			// 	console.dir(response.body);
			// 	this.dataList=response.body;
				
			// })
		},
		
		mounted(){
			var _this=this;
			console.group('HOME mounted 挂载前状态===============》');
			this.$refs.drawerMask.onclick=function(event){
				_this.$store.state.drawerOpen=!_this.$store.state.drawerOpen
				event.stopPropagation();
				return false;
			}
		},
		activated:function(){
            console.group('activated keep-alive切入到该组件状态(home)===============》');
        },
        deactivated:function(){
            console.group('deactivated keep-alive切出该组件状态(home))===============》');
        },
		components:{
			HeaderHome,
			Drawer,
			List
		}
	}

</script>