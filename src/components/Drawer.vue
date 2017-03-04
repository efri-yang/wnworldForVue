<template>
	<div class="wn-drawer" ref="drawer">vue
        <ul class="list">
            <li><a href="/">首页</a></li>
            <li v-for="item in dataList"><a href="#">{{item.name}}</a>
                <ul class="sub-menu" v-show="item.child">
                    <li v-for="child in item.child"><a href="#" v-html="child.name"></a></li>
                   
                </ul>
            </li>
            <li><a href="/">关于散崖</a></li>
            <li><a href="/">未分类</a></li>
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
				
			    text-align: left;
			    padding: 0 10px 0 30px;
			    >ul{
			    	padding-left: 40px;
			    	a{
			    		font-size:32px;
			    		color: #fff;
			    		height: px2rem(80px);
			            line-height: px2rem(80px);
			    	}
			    }
			    >a{
			    	color: #fff;
				    font-size: 36px;
				    display: block;
				    height: px2rem(100px);
			        line-height: px2rem(100px);
			    }
	    	 }
	    }
	}

</style>
<script>
	export default{
		data(){
			return {
				dataList:""
			}
		},
		created(){
			this.$http.get("../wnworldForVue/conn/getNav.php").then((response) =>{
				console.dir(response.body);
				this.dataList=response.body;
			})
		}
	}
</script>