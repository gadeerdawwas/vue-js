<template>
    <section class="container main-content">
        <div class="row">
            <div class="col-md-9">
                <div class="tabs-warp question-tab">
                    <div class="tab-inner-warp" v-if="issearching">
                        ... search post
                    </div>

                    <div class="tab-inner-warp" v-else>
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
                                    ><span></span><img alt="" :src="'asset/images/' + post.iamge"
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
                    <h3 class="widget_title">Search</h3>
                    <div class="ul_list ul_list-icon-ok">
                       <input type="text" class="form-control" placeholder="Search" v-model="searchpost">

                    </div>
                </div>



                <categories></categories>



            </aside><!-- End sidebar -->
        </div>
    </section>
    </template>

    <script>
    import categories from './Category.vue';

    export default {
      data() {
        return {
          posts: {},
          searchpost: '',
          issearching : false
        };
      },
      components:{
        categories
      },
      watch:{
        searchpost(query){
            if (query.length > 0) {
                console.log(query);
                axios.get('/api/searchposts/'+query)
                .then(res => {
                    this.posts = res.data;
                    this.issearching =true;
                })
                .catch(err => console.log(err))
            }else{
                let oldpost=  JSON.parse(localStorage.getItem('posts'));
                console.log(oldpost);
                this.posts =oldpost ;
            }

        }
      },
      methods: {
        getUser() {
          axios.get("/api/posts").then((response) => {
            this.posts = response.data;
            localStorage.setItem('posts',JSON.stringify(this.posts))
          });
          // .then(response =>  console.log(response.data))
          console.log("Component mounted.ddd");
        },
      },
      created() {
        console.log("Component mounted.");
        this.getUser();
      },
    };
    </script>
