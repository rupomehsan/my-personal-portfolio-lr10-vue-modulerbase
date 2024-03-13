<template>
    <div>
        <form @submit.prevent="submitHandler">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="text-capitalize">{{ param_id ? 'Update' : 'Create' }} new {{ route_prefix }}</h5>
                    <div>
                        <router-link class="btn btn-outline-warning btn-sm" :to="{ name: `All${route_prefix}` }">All {{
            route_prefix }}</router-link>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12" v-for="(form_field, index) in form_fields" :key="index">
                            <div v-if="form_field.name == 'category_type' && category_type.length"
                                class="bootstrap-tagsinput" style="min-height: 40px;">
                                <template v-for="(item, index) in category_type" :key="index">
                                    <span class="tag badge badge-light">{{ item }}<span data-role="remove"
                                            @click="removeCategoryType(index)"></span></span>
                                </template>
                            </div>
                            <common-input :label="form_field.label" :type="form_field.type" :name="form_field.name"
                                :multiple="form_field.multiple" :value="form_field.value"
                                :data_list="form_field.data_list" :checked="form_field.checked"
                                :onchange="setCategoryType" />
                        </div>

                        <div class="form-group full_width category_card_dropdown custom_scroll">
                            <label for="" class="mb-2">Select Parent Category</label>
                            <ul class="list">
                                <div class="left_line"></div>
                                <li>
                                    <div class="details"><input type="radio" name="parent_id" checked="checked"
                                            class="form-check-input">
                                        <div class="title">
                                            No parent
                                        </div>
                                    </div>
                                </li>
                                <nested-category :children="children" :child_parent_id="child_parent_id"
                                    :type="'radio'" />
                            </ul>
                        </div>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-square px-5"><i class="icon-lock"></i>
                            Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import { mapActions, mapState } from 'pinia'
import { category_setup_store } from './setup/store';
import setup from "./setup";
import form_fields from "./setup/form_fields";


export default {
    data: () => ({
        route_prefix: '',
        form_fields,
        param_id: null,
        children: [],
        child_parent_id: [null],
        loaded: false
    }),
    created: async function () {
        let id = this.$route.query.id;
        this.route_prefix = setup.route_prefix;
        await this.get_all_categories()
        this.loaded = true
        if (this.all_data) {
            this.children = []
            this.all_data.forEach((item) => {
                this.children.push(item)
            })
        }

        if (id) {
            this.param_id = id;
            await this.get_single_data(id);
            if (this.single_data) {
                this.set_category_type('empty')
                this.form_fields.forEach((field, index) => {
                    Object.entries(this.single_data).forEach((value) => {
                        if (field.name == value[0]) {
                            this.form_fields[index].value = value[1];
                        }
                        if (value[0] == 'parent_id') {
                            this.child_parent_id.push(value[1]);
                        }
                        if (field.name == 'category_type' && value[0] == 'category_type') {
                            value[1].forEach((item) => {
                                this.set_category_type(item);
                            })
                        }
                    });
                });
            }
        } else {
            this.form_fields.forEach((item) => {
                item.value = "";
            });

            this.set_category_type('empty')


        }
    },
    methods: {
        ...mapActions(category_setup_store, {
            get_single_data: 'get',
            store_data: 'store',
            update_data: 'update',

            get_all_categories: 'get_all_categories',
            set_category_type: 'set_category_type',
            remove_category_type: 'remove_category_type',
        }),

        submitHandler: async function ($event) {
            if (this.param_id) {
                let response = await this.update_data($event.target, this.param_id);
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            } else {
                let response = await this.store_data($event.target);
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            }
        },


        setCategoryType() {
            if (event.target.name === 'category_type') {
                this.set_category_type(event.target.value);
            }
        },
        removeCategoryType(index) {
            this.remove_category_type(index)
        }



    },

    computed: {
        ...mapState(category_setup_store, {
            single_data: "single_data",
            all_data: 'all_data',
            category_type: 'category_type',
        }),
    },


}
</script>
