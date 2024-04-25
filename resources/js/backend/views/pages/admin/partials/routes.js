import Layout from "./Layout.vue";
import Dashboard from "../Dashboard.vue";

import user_routes from "../management/user/setup/routes";

import category_routes from "../management/Category/setup/routes";
import blog_routes from "../management/BlogManagement/Blog/setup/routes";
import todo_list_routes from "../management/TodoList/setup/routes";
import personal_note_routes from "../management/PersonalNote/setup/routes";
import contact_number_routes from "../management/ContactNumber/setup/routes";

import project_routes from "../management/Project/setup/routes";
import blood_doner_routes from "../management/BloodDoner/setup/routes";
import credential_routes from "../management/Credential/setup/routes";

const routes = {
    path: "/",
    component: Layout,
    children: [
        {
            path: "dashboard",
            component: Dashboard,
            name: "adminDashboard",
        },

        user_routes,
        category_routes,
        blog_routes,
        todo_list_routes,
        personal_note_routes,
        contact_number_routes,
        project_routes,
        blood_doner_routes,
        credential_routes,
    ],
};

export default routes;
