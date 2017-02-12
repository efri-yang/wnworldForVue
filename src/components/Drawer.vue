<template>
	<div class="wn-drawer" ref="drawer">
        <ul class="list">
            <li><a href="#">首页</a></li>
            <li><a href="#">前端开发</a>
                <ul class="sub-menu">
                    <li><a href="#">Css</a></li>
                    <li><a href="#">Javascript</a></li>
                    <li><a href="#">工具</a></li>
                </ul>
            </li>
        </ul>
    </div>
</template>
<style lang="scss">
	@import 'static/scss/_functions.scss';
	.wn-drawer {
	    position: absolute;
	    right: 0;
	    top: 0;
	    width: 50%;
	    height: 100%;
	    background: #222;
	    z-index: 11;
	    -webkit-transition: -webkit-transform 250ms ease-out;
	    transform: translate3d(100%, 0px, 0px);
	    &.show{
	    	transform: translate3d(0px, 0px, 0px);
	    }
	    >.list{
	    	padding-top: 30px;
	    	>li{
				height: px2rem(100px);
			    line-height: px2rem(100px);
			    text-align: left;
			    padding: 0 10px 0 20px;
			    >ul{
			    	padding-left: 40px;
			    }
			    >a{
			    	color: #fff;
				    font-size: 36px;
				    display: block;
			    }
	    	 }
	    }
	}

</style>
<script>
	export default{
		
	}
</script>