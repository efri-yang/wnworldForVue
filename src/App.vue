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