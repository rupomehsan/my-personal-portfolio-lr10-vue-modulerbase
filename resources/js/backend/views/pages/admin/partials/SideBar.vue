<template>
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper">
        <div class="brand-logo">
            <router-link :to="{ name: `adminDashboard` }" class="d-flex align-items-center">
                <img src="/assets/images/logoicon.png" class="logo-icon" alt="logo icon" />
                <h5 class="logo-text">Admin Panel</h5>
            </router-link>
            <div class="close-btn"><i class="zmdi zmdi-close" @click="toggle_menu"></i></div>
        </div>
        <div class="m-2">
            <input type="text" class="form-control" placeholder="Search">

        </div>
        <hr>
        <ul class="metismenu" id="menu">

            <li>
                <router-link :to="{ name: `adminDashboard` }" class="border" href="javascript:void();">
                    <div class="parent-icon">
                        <i class="zmdi zmdi-view-dashboard"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </router-link>
            </li>
            <side-bar-single-menu :icon="`fa fa-plus`" :menu_title="`Category`" :route_name="'AllCategory'" />

            <!-- <li class="menu-label mt-0">Blog</li> -->
            <side-bar-drop-down-menus :icon="`fa fa-plus`" :menu_title="`Blog Management`" :menus="[
                {
                    route_name: `AllBlog`,
                    title: `Blogs`,
                },
            ]" />

            <side-bar-drop-down-menus :icon="`fa fa-plus`" :menu_title="`Task Management`" :menus="[
                {
                    route_name: `AllTodoList`,
                    title: `Todo List`,
                },
                {
                    route_name: `AllPersonalNote`,
                    title: `Note`,
                },
                {
                    route_name: `AllContactNumber`,
                    title: `Contact number`,
                },
                {
                    route_name: `AllCredential`,
                    title: `Credential`,
                },
            ]" />


            <side-bar-drop-down-menus :icon="`fa fa-plus`" :menu_title="`Projects Management`" :menus="[
                {
                    route_name: `AllProject`,
                    title: `Projects`,
                },
            ]" />
            <side-bar-drop-down-menus :icon="`fa fa-plus`" :menu_title="`Blood Management`" :menus="[
                {
                    route_name: `AllBloodDoner`,
                    title: `Blood Doner`,
                },
            ]" />
        </ul>
    </div>
</template>

<script>
import { mapActions } from "pinia";
import { auth_store } from "../../../../store/auth_store";
import SideBarDropDownMenus from "./SideBarDropDownMenus.vue";
import SideBarSingleMenu from "./SideBarSingleMenu.vue";
export default {
    data: () => ({
        showSidebar: true,
    }),
    components: { SideBarDropDownMenus, SideBarSingleMenu },
    methods: {
        ...mapActions(auth_store, ["log_out"]),
        logout_submit: function () {
            let confirm = window.confirm("logout");
            if (confirm) {
                this.log_out();
            }
        },
        toggle_menu: function () {
            document.getElementById('wrapper').classList.toggle('toggled');
        },
    },
};
</script>

<style></style>
