<template>
  <div class="widget widget_tag_cloud" v-if="categories.length > 0">
    <h3 class="widget_title">Categories</h3>
    <ul class="list-unstyled mb-0" v-if="categories.length > 0">
                  <li v-for="(category,index) in categories" :key="index">
                    <!-- <router-link :to="`category/${category.slug}/posts`">{{category.name}}</router-link> -->
                    <router-link :to="`/category/` + category.slug +`/posts`">{{ category.name }}</router-link>

                  </li>

                </ul>
  </div>
</template>

    <script>
export default {
  data() {
    return {
      categories: {},
    };
  },
  created() {
    this.getcategories();
  },
  methods: {
    getcategories() {
      axios
        .get("/api/categories")
        .then((res) => {
          console.log('res');
          this.categories = res.data;
        })
        .catch((err) => console.log(err));
      console.log("categories");
    },
  },
};
</script>
