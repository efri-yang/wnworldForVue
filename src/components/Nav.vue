<style lang="scss">
	.nav-box{
		li{
			&.active{
				a{
					color: #f60
				}
			}
		}
	}
</style>
<template>
	<ul class="nav-box">
		<router-link to='/home' tag="li"><a>首页</a></router-link>
		<router-link to='/frontend' tag="li"><a>前端开发</a></router-link>
		<router-link to='/suisuiyu' tag="li"><a>那些事儿</a></router-link>
	</ul>
</template>