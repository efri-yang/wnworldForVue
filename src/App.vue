<template>
	<div class="app" id="J_app">
		  <transition
			appear
			:enter-active-class="animateIn"
			:leave-active-class="animateOut"
			:mode="animateMode"
		  >
		  		<router-view></router-view>
		  </transition>
	</div>
</template>
<style lang="scss">
	@import '../static/iconfont/iconfont.css';
	@import '../static/css/reset.css';
	
	.app{
		    width: 100%;
    		-webkit-box-sizing: border-box;
    		position: relative;
    		overflow: hidden;
    		min-height: 100%;
	}
</style>
<script>
	export default {

		computed:{
			animateIn(){
				return 'animated ' + this.$store.state.animateIn;
			},
			animateOut(){
				return 'animated ' + this.$store.state.animateOut;
			},
			animateMode(){
				return this.$store.state.animateOut;
			}
		}
	}

</script>