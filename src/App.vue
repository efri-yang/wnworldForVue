<template>
	<div class="main-box">
		  <Navigation></Navigation>
		  <transition name="fade">
            <keep-alive>
                <router-view target="_blank" class="child-view"></router-view >
            </keep-alive>
        </transition>
	</div>
</template>
<script>
	import Navigation from './components/Nav'

	export default {

		components:{
			Navigation
		}
	}

</script>