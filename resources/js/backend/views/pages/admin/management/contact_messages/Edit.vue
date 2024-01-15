<template>
    <div>
        <form @submit.prevent="store_message($event.target)">
            <input type="text"  name="name">
            <input type="text"  name="subject">
            <textarea type="text" name="message"></textarea>
            <select name="gender" id="">
                <option value="female">female</option>
                <option value="male">male</option>
                <option value="oth">oth</option>
            </select>
            <button>submit</button>
        </form>
    </div>
</template>

<script>
import { mapActions } from 'pinia'
import { contact_message_store } from './setup/store';
export default {
    created: function () {
        this.get_contact_message(12);
    },
    methods: {
        ...mapActions(contact_message_store, {
            get_contact_message: 'get',
        })
    }
}
</script>

<style>

</style>
