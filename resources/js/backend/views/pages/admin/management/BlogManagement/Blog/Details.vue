<template>
    <div class="card">
        <div class="card-body">
            <section>
                <h5 class="text-capitalize text-center text-dark">{{ single_data.title }}</h5>
                <hr>
                <div v-html="single_data.description"></div>
            </section>


        </div>
    </div>
</template>

<script>
import { mapActions, mapState } from 'pinia'
import { blog_setup_store } from './setup/store';
import setup from "./setup";


export default {
    data: () => ({
        route_prefix: '',
        param_id: null,
    }),
    created: async function () {

        this.param_id = this.$route.params.id;
        this.route_prefix = setup.route_prefix;
        await this.get_single_data(this.param_id);

    },
    methods: {

        ...mapActions(blog_setup_store, {
            get_single_data: 'get',
        }),


    },

    computed: {
        ...mapState(blog_setup_store, {
            single_data: "single_data",
        }),
    },


}
</script>
