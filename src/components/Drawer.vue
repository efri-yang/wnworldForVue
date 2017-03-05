<template>
	<div :class="[isOpen ? 'wn-drawer open' : 'wn-drawer']" ref="drawer">
        <ul class="list">
            <li><a href="/">首页</a></li>
            <li v-for="item in dataList"><a href="#">{{item.name}}</a>
                <ul class="sub-menu" v-show="item.child">
                    <li v-for="child in item.child"><a href="#" v-html="child.name"></a></li>
                   
                </ul>
            </li>
            <li><a href="/" @click="openAboutMe">关于散崖</a></li>
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
	    display: none;
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
		computed:{
			isOpen(){
				return this.$store.state.drawerOpen
			}
		},
		created(){
			this.$http.get("../wnworldForVue/conn/getNav.php").then((response) =>{
				console.dir(response.body);
				this.dataList=response.body;
			})
		},
		methods:{
			openAboutMe:function(event){
				var _this=this;
				event.preventDefault();
				this.$store.state.drawerOpen=!this.$store.state.drawerOpen;
				this.$refs.drawer.style.display="none";
					this.$store.commit({
						type : 'changeAnimate',
						mode : 'normal',

					}),
					this.$router.push({
						path : '/aboutme'
					})

				
				
			}
		}
	}
</script>