import { createRouter, createWebHistory } from "vue-router";

import PostDetails from '../components/PostDetails.vue';
import Post from '../components/Posts.vue';
import CategoryPosts from '../components/CategoryPost.vue';

const routes = [{
        path: "/",
        name: "Post",
        component: Post,
    },
    {
        path: '/post/:slug',
        name: "PostDetails",
        component: PostDetails,
    },
    { path: '/category/:slug/posts', component: CategoryPosts, name: 'CategoryPosts' },


];

const router = createRouter({
    history: createWebHistory(
        import.meta.env.BASE_URL),
    routes,
    mode: "history",

});

export default router;