<template>
	<div :class="[isOpen ? 'page-box page-home open' : 'page-box page-home' ]">
		<HeaderHome v-on:drawertoggle="drawerToggleClick"></HeaderHome>
		<List :listData="dataList"></List>
		<div :class="[isOpen ? 'wn-drawer-mask open' :'wn-drawer-mask']" ref="drawerMask"></div>
		<Drawer ref="drawer"></Drawer>
	</div>
</template>
<style lang="scss">
	.page-box{
	-webkit-transition: -webkit-transform 250ms ease-out;
    top: 0;
    width: 100%;
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
	import HeaderHome from '../../components/HeaderHome';
	import List from '../../components/List';
	import Drawer from '../../components/Drawer';
	import {mapState} from 'vuex';
	export default {
		data(){
			return {
				dataList:""
			}
		},
		computed:mapState({
				isOpen:state=>state.drawerOpen
		}),
		mounted(){
			var _this=this;
			this.$refs.drawerMask.onclick=function(event){
				_this.$store.state.drawerOpen=!_this.$store.state.drawerOpen
				event.stopPropagation();
				return false;
			}

		},
		created(){
			this.$http.get("../wnworldForVue/conn/getCategory.php").then((response)=>{
				console.dir(response.body);
				this.dataList=response.body;
			})
		},
		methods:{
			drawerToggleClick:function(){
				this.$store.state.drawerOpen=!this.$store.state.drawerOpen
			}
		},
		components:{
			HeaderHome,
			Drawer,
			List
		}
	}

</script>