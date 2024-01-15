<template>
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper">
        <div class="brand-logo">
            <a href="#/admin" class="d-flex align-items-center">
                <img src="/backend/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">Dashtreme Admin</h5>
            </a>
            <div class="close-btn"><i class="zmdi zmdi-close"></i></div>
        </div>

        <ul class="metismenu" id="menu">
            <side-bar-drop-down-menus
                :icon="`fa fa-plus`"
                :menu_title="`Contact Messages`"
                :menus="[
                    {
                        route_name: `ContactMessageAll`,
                        title: `All Contacts`,
                    },
                ]"
            />

            <!-- <side-bar-single-menu :menu_title="`Settings`" :icon="`fa fa-arrow-right`" :route_name="`Settings`"/> -->

        </ul>
    </div>
</template>

<script>
import { mapActions } from 'pinia'
import { auth_store } from '../../../store/auth_store';
import SideBarDropDownMenus from './SideBarDropDownMenus.vue';
import SideBarSingleMenu from './SideBarSingleMenu.vue';
export default {
    components: { SideBarDropDownMenus, SideBarSingleMenu },
    methods: {
        ...mapActions(auth_store, ['log_out']),
        logout_submit: function () {
            let confirm = window.confirm('logout');
            if (confirm) {
                this.log_out();
            }
        }
    }
}
</script>

<style></style>
