<template>
    <div>
        create
        <form @submit.prevent="store_message($event.target)">
            <input type="text" value="alsdfdasf" name="name">
            <input type="text" value="alsdfdasf" name="subject">
            <input type="text" value="alsdfdasf" name="message">
            <button>submit</button>
        </form>
    </div>
</template>

<script>
import { mapActions } from 'pinia'
import { contact_message_store } from './setup/store';
export default {
    created: function () {
    },
    methods: {
        ...mapActions(contact_message_store, {
            store_message: 'store',
        })
    }
}
</script>

<style>

</style>
