<template>
      <div class="row">
            <div class="col-md-9">
                <div class="tabs-warp question-tab">

                    <div class="tab-inner-warp">
                            <div class="tab-inner">
                                <article
                                class="question question-type-normal"
                                v-for="post in posts"
                                :key="post.id"
                                >
                                <h2>
                                    <router-link :to="'/post/' + post.slug">{{ post.title }}</router-link>

                                </h2>
                                <!-- <a class="question-report" href="#">{{ post.user.name }}</a> -->
                                <div class="question-author">
                                    <a href="#" original-title="ahmed" class="question-author-img tooltip-n"
                                    ><span></span><img alt="" :src="'/asset/images/' + post.iamge"
                                    /></a>
                                </div>
                                <div class="question-inner">
                                    <div class="clearfix"></div>
                                    <p class="question-desc">{{ post.body.substr(0, 150) }}</p>
                                    <div class="question-details">
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                    </div>
                                    <span class="question-date"
                                    ><i class="icon-time"></i>{{ post.added_at }}</span
                                    >
                                    <span class="question-comment"
                                    ><a href="#"
                                        ><i class="icon-comment"></i>{{ post.comment_count }} commemts</a
                                    ></span
                                    >
                                    <span class="question-view"
                                    ><i class="icon-user"></i>{{ post.user.name }}
                                    </span>
                                    <div class="clearfix"></div>
                                </div>
                                </article>
                            </div>
                    </div>
                </div>
            </div>




            <aside class="col-md-3 sidebar">
                <div class="widget widget_stats">
                    <h3 class="widget_title">Stats</h3>
                    <div class="ul_list ul_list-icon-ok">
                        <ul>
                            <li><i class="icon-question-sign"></i>Questions ( <span>20</span> )</li>
                            <li><i class="icon-comment"></i>Answers ( <span>50</span> )</li>
                        </ul>
                    </div>
                </div>



                <!-- <categories></categories> -->



            </aside><!-- End sidebar -->
        </div>
   </template>

   <script>
 import categories from './Category.vue';
       export default {
           data(){
               return{
                   posts:[]
               }
           },
           mounted() {
               console.log('Component mounted.')
               this.getPosts();
           },
           components:{
        categories
      },
           methods:{
               getPosts(){
                   axios.get('/api/category/'+this.$route.params.slug+'/posts')
                   .then(res => {
                       console.log('res')
                       console.log(res)
                       console.log('res')
                       this.posts = res.data;
                   })
                   .then(err => console.log(err))
                console.log('555555555555555555555');
               }
           }
       }
   </script>
