<template>
    <li class="nav-item dropdown dropdown-lg">
        <a @click.prevent="show_notification = !show_notification" href="#"
            class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative">
            <i class="zmdi zmdi-notifications-active align-middle"></i>
            <span class="bg-info text-white badge-up">14</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right show" v-show="show_notification">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    New Notifications <a href="javascript:void();" class="extra-small-font">Clear
                        All</a>
                </li>
                <li class="list-group-item">
                    <a href="javaScript:void();">
                        <div class="media">
                            <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
                            <div class="media-body">
                                <h6 class="mt-0 msg-title">New Registered Users</h6>
                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </li>
</template>

<script>
export default {
    data: () => ({
        show_notification: 0,
    })
}
</script>

<style></style>
