<template>
    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">

            <div class="toggle-menu">
                <i @click.prevent="toggle_menu" class="zmdi zmdi-menu"></i>
            </div>

            <div class="search-bar flex-grow-1">

            </div>

            <ul class="navbar-nav align-items-center right-nav-link ml-auto">

                <nofication></nofication>

                <top-right-profile></top-right-profile>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->
</template>

<script>
import Nofication from './Nofication.vue'
import TopRightProfile from './TopRightProfile.vue'
export default {
    components: { Nofication, TopRightProfile },
    methods: {
        toggle_menu: function(){
            document.getElementById('wrapper').classList.toggle('toggled');
        }
    }
}
</script>

