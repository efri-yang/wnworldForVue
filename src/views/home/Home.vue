<template>
	<div :class="[isOpen ? 'page-box page-home open' : 'page-box page-home' ]">
		<HeaderHome v-on:drawertoggle="drawerToggleClick"></HeaderHome>
		<List></List>
		<Drawer :toggleOpen="isOpen"></Drawer>
		<div :class="[isOpen ? 'wn-drawer-mask open' :'wn-drawer-mask']" ref="drawerMask"></div>
	</div>
</template>
<style lang="scss">
	.page-box{
		-webkit-transition: -webkit-transform 250ms ease-out;
		height: 100%;
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
</style>
<script>
	import HeaderHome from '../../components/HeaderHome';
	import List from '../../components/List'
	import Drawer from '../../components/Drawer';

	export default {
		data(){
			return {

				isOpen:false
			}
		},
		mounted(){
			var _this=this;
			this.$refs.drawerMask.ontouchstart=function(event){
				_this.isOpen=!_this.isOpen;
				event.stopPropagation();
				return false;
			}
		},
		methods:{
			drawerToggleClick:function(){
				this.isOpen=!this.isOpen;

			}
		},
		components:{
			HeaderHome,
			Drawer,
			List
		}
	}

</script>