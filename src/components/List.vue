<template>
    <div class="box-main">
        <ul class="log-list">
            <li v-for="item in listData">
                <h2 class="tit"><i class="iconfont icon-iconfonticon05"></i><a href="#">{{item.post_title}}</a></h2>
                <div class="entry-meta">
                    <span><i class="iconfont icon-time"></i>{{item.post_date}}</span>
                    <span><i class="iconfont icon-iconfont90"></i><a href="#">前端开发</a></span>
                    <!-- <span><i class="iconfont icon-xiebiaoqian"></i>次</span> -->
                    <span><i class="iconfont icon-icon-admin"></i> {{item.meta_value}}</span>
                </div>
                <div class="desc">
                    <p v-html="item.post_excerpt"></p>
                </div>
                <a href="#" class="readmore">阅读全文</a>
            </li>
            
        </ul>
    </div>
</template>
<style lang="scss">
@import 'static/scss/_functions.scss';
.box-main {
    margin: 30px 20px 0;
}

.log-list li {
    border: 1px solid #cfcfcf;
    background: #fff;
    padding: 15px 20px 65px;
    margin-bottom: 20px;
    position: relative;
    .tit {
	    font-size: 42px;
        
        word-break:break-all;
	    font-weight: normal;
	    i {
		    color: #e96363;
		    font-size: 80px;
		    padding: 0;
		    vertical-align: middle;
		    height: px2rem(60px);
		    line-height: px2rem(50px);
		    overflow: hidden;
		    display: inline-block;
		}
		.zd {
		    color: #e96363;
		    margin-right: 5px;
		}
		
		
		
	}
	.readmore {
		    position: absolute;
		    color: #fff;
		    right: 20px;
		    bottom: 15px;
		    padding: 12px 28px;
		    border-radius: 4px;
		    font-size: 28px;
		    border-color: #d43f3a;
		    background-color: #d9534f;
		    &:hover{
		    	background-color: #c9302c;
    			border-color: #ac2925;
		    }
		    &:active{
		    	-webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
    			box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
		    }
		}
	.entry-meta {
		    color: #999;
		    margin-top: 5px;
		    padding-bottom: 2px;
		    border-bottom: 1px solid #dedede;
		    a {
			    color: #999;
			    &:hover {
				    text-decoration: underline;
				}
			}
			span {
			    font-size: 28px;
			    margin-right: 20px;
			    i {
			    margin-right: 5px;
			    vertical-align: middle;
			}
			}
			
			.discuss {
			    margin-right: 0;
			    float: right;
			}
		}
	.desc {
		    padding: 15px 10px;
		    word-break: break-all;
		    line-height: 1.5;
		    font-size: 32px;
		    color: #666;
		    p {
			    text-indent: 2em;
			    margin-bottom: 10px;
			}
		}
}
</style>
<script>
    export default{
        props: ['listData'],
        data(){
            return {}
        }
    }
</script>
