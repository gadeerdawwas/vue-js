<template>

   <section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<article class="post single-post clearfix">
					<div class="post-inner">
				        <div class="post-img"><img alt="" :src="'/asset/images/'+post.iamge"  ></div>
			        	<h2 class="post-title"><span class="post-type"><i class="icon-film"></i></span>{{ post.title }}</h2>
			        	    <div class="post-meta">
			        	        <span class="meta-author"><i class="icon-user"></i><a href="#">{{ post.username }}</a></span>
			        	        <span class="meta-date"><i class="icon-time"></i>{{ post.added_at }}</span>
			        	        <span class="meta-categories"><i class="icon-suitcase"></i><a href="#" v-if="post.Categoryname " >{{ post.Categoryname }}</a></span>
			        	        <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">{{ post.comments_count }} comments</a></span>
			        	    </div>
				        <div class="post-content">
                            <p>{{ post.body }}</p>


				        </div><!-- End post-content -->
				        <div class="clearfix"></div>
				    </div><!-- End post-inner -->
				</article><!-- End article.post -->




				<div id="commentlist" class="page-content">
					<div class="boxedtitle page-title"><h2>Comments ( <span class="color">{{ post.comments_count }}</span> )</h2></div>
					<ol class="commentlist clearfix">

					    <li class="comment" v-for="(comment , index) in post.comments " :key="index">
					        <div class="comment-body clearfix">
					            <div class="avatar"><img alt="" v-bind:src="'asset/images/'+comment.User.profile_image"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-meta">
					                        <span >{{ comment.User.name }}</span>
					                        <div class="date">{{ comment.added_at }}</div>
					                    </div>
					                </div>
					                <div class="text">
                                        {{ comment.body }}
					                </div>


					            </div>
					        </div>

					    </li>

					</ol><!-- End commentlist -->
				</div><!-- End page-content -->

				<div id="respond" class="comment-respond page-content clearfix">
				    <div class="boxedtitle page-title"><h2>Answer</h2></div>
				    <form action="#" method="post" id="commentform" class="comment-form">

				        <div id="respond-textarea">
				            <p>
				                <label class="required" for="comment">Comment<span>*</span></label>
				                <textarea id="comment" name="comment" aria-required="true" cols="58" rows="10"></textarea>
				            </p>
				        </div>
				        <p class="form-submit">
				        	<input name="submit" type="submit" id="submit" value="Post Comment" class="button small color">
				        </p>
				    </form>
				</div>

				<div class="post-next-prev clearfix">
				    <p class="prev-post">
				        <a href="#"><i class="icon-double-angle-left"></i>&nbsp;Prev post</a>
				    </p>
				    <p class="next-post">
				        <a href="#">Next post&nbsp;<i class="icon-double-angle-right"></i></a>
				    </p>
				</div><!-- End post-next-prev -->
			</div><!-- End main -->
			<aside class="col-md-3 sidebar">
				<div class="widget widget_stats">
					<h3 class="widget_title">Stats</h3>
					<div class="ul_list ul_list-icon-ok">
						<ul>
							<li><i class="icon-signal"></i>Categorys ( <span>20</span> )</li>
							<li><i class="icon-comment"></i>Question ( <span>50</span> )</li>
						</ul>
					</div>
				</div>





				<div class="widget widget_highest_points">
					<h3 class="widget_title">Best Question </h3>
					<ul>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="images/demo/admin.jpg" alt=""></a>
							</div>
							<h6><a href="#">This is my secand Question</a></h6>
							<span class="comment">12 answer</span>
						</li>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="images/demo/avatar.png" alt=""></a>
							</div>
							<h6><a href="#">This is my four Question</a></h6>
							<span class="comment">10 answer</span>
						</li>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="images/demo/avatar.png" alt=""></a>
							</div>
							<h6><a href="#">This is my first Question</a></h6>
							<span class="comment">5 answer</span>
						</li>
					</ul>
				</div>


				<div class="widget">
					<h3 class="widget_title">Best Question </h3>
					<ul>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="images/demo/admin.jpg" alt=""></a>
							</div>
							<h6><a href="#">This is my secand Question</a></h6>
							<span class="comment">12 answer</span>
						</li>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="images/demo/avatar.png" alt=""></a>
							</div>
							<h6><a href="#">This is my four Question</a></h6>
							<span class="comment">10 answer</span>
						</li>
						<li>
							<div class="author-img">
								<a href="#"><img width="60" height="60" src="images/demo/avatar.png" alt=""></a>
							</div>
							<h6><a href="#">This is my first Question</a></h6>
							<span class="comment">5 answer</span>
						</li>
					</ul>
				</div>

			</aside><!-- End sidebar -->
		</div><!-- End row -->
	</section><!-- End container -->
</template>

<script>

    export default {
       data(){
         return {
              post: {},
            }
       },
       created() {
        this.getPost();
       },
       methods : {
        getPost(){
            console.log(this.$route.params.slug);
            axios.get('/api/posts/'+this.$route.params.slug)
            .then((res)=>{
                console.log(res)
                       this.post = res.data
                     })
            // .then(res =>
            // console.log(res)
            // this.return=res.data ;

            // )
            .catch(err => console.log(err))

        }

       }
    }
</script>
