<template>
	<div class="category-box">
		<HeaderInside :headTitle="headTitle"></HeaderInside>
		<div class="box-main">
			
		</div>
	</div>
</template>
<script>
	import HeaderInside from '../../components/HeaderInside';
	import List from '../../components/List';
	export default{
		data(){
			return {
				headTitle:this.$route.params.title,
				id:this.$route.params.id,
			}
		},
		created(){
			this.headTitle=this.$route.params.title;
		},
		watch:{
			'$route':function(){
				this.headTitle=this.$route.params.title
			}
		},
		methods:{
			getData(){
				this.$http.post("/api/wnForVueGetCategory.php",{id:this.id},{emulateJSON:true}).then(repsonse=>{
					console.dir("xxx");
				});
			}
		},
		components:{
			HeaderInside,
			List
		}
	}
</script>