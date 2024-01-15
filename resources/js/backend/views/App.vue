<template>
    <div id="wrapper">
        <top-header></top-header>
        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <router-view></router-view>
            </div>
        </div>
        <!--End content-wrapper-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->
    </div>
</template>

<script>
import TopHeader from './components/TopHeader.vue'
export default {
    components: { TopHeader },
    created: function () {
        let prev_url = window.sessionStorage.getItem('prevurl');
        switch (this.user.role) {
            case 1:
                break;
            case 2:
                window.location.hash = prev_url || "#/admin/dashboard";
                // this.$router.replace({ name: "adminDashboard" })
                break;
            default:
                break;
        }
    },
    data: () => ({
        user: {
            role: 2, // admin
        }
    })
}
</script>

<style></style>

