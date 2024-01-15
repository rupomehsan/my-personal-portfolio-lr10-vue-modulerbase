<template>
    <li class="nav-item dropdown">
        <a href="#" @click.prevent="show_notification = !show_notification" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative">
            <span class="user-profile">
                <img src="/backend/assets/images/avatars/avatar-13.png" class="img-circle" alt="user avatar">
            </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right show" v-show="show_notification">
            <li class="dropdown-item user-details">
                <a href="javaScript:void();">
                    <div class="media">
                        <div class="avatar"><img class="align-self-start mr-3"
                                src="/backend/assets/images/avatars/avatar-13.png" alt="user avatar">
                        </div>
                        <div class="media-body">
                            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                            <p class="user-subtitle">mccoy@example.com</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="zmdi zmdi-comments mr-3"></i>Inbox</li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="zmdi zmdi-balance-wallet mr-3"></i>Account</li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="zmdi zmdi-settings mr-3"></i>Setting</li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="zmdi zmdi-power mr-3"></i>Logout</li>
        </ul>
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
