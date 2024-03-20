import Layout from "./Layout.vue"
import Dashboard from "../Dashboard.vue"

import user_routes from "../management/user/setup/routes";

import category_routes from "../management/Category/setup/routes";
import blog_routes from "../management/BlogManagement/Blog/setup/routes";
import totdo_list_routes from "../management/TodoList/setup/routes";



const routes = {
    path: '/',
    component: Layout,
    children: [
        {
            path: 'dashboard',
            component: Dashboard,
            name: 'adminDashboard',
        },

        user_routes,
        category_routes,
        blog_routes,
        totdo_list_routes,

    ]
};


export default routes;
