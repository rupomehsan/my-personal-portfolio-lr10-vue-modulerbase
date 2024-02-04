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
                        <div class="col-md-6">
                            <div class="form-group"><label for="">Select category</label>
                                <div class="mt-1 mb-3">
                                    <div class="form-control form-control-square mb-2 " style="height: auto;" type="text"
                                        id="blog_category_id" @click="modal_show = !modal_show">
                                        <template v-for="item in set_categories_data" :key="item.id">
                                            <div class="border d-inline-block m-1 ">
                                                <span class="px-1">{{ item.name }}</span>
                                                <i aria-hidden="true" class="fa fa-close border-left px-1 c-pointer"></i>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <template v-for="(form_field, index) in form_fields" :key="index">
                            <div class="col-md-6" :class="form_field.type == 'textarea' ? 'col-md-12' : ''">
                                <common-input :label="form_field.label" :type="form_field.type" :name="form_field.name"
                                    :multiple="form_field.multiple" :value="form_field.value"
                                    :data_list="form_field.data_list" />
                            </div>
                        </template>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-square px-5"><i class="icon-lock"></i>
                            Submit</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal" :class="modal_show ? 'd-block show' : ''" id="largesizemodal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Select categories</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" @click="modal_show = false">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group full_width category_card_dropdown custom_scroll">
                            <label for="" class="mb-2">Select Category</label>
                            <ul class="list">
                                <div class="left_line"></div>
                                <nested-category :children="children" :child_parent_id="child_parent_id"
                                    :type="'checkbox'" />
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal" @click="modal_show = false"><i
                                class="fa fa-times"></i>
                            Close</button>
                        <button type="button" @click="modal_show = false" class="btn btn-white"><i
                                class="fa fa-check-square-o"></i> Save
                            changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions, mapState } from 'pinia'
import { blog_setup_store } from './setup/store';
import setup from "./setup";
import form_fields from "./setup/form_fields";


export default {
    data: () => ({
        route_prefix: '',
        form_fields,
        param_id: null,
        modal_show: false,
        children: [],
        child_parent_id: null
    }),
    created: async function () {



        let id = this.$route.query.id;
        this.route_prefix = setup.route_prefix;

        await this.get_all_blog_categories()
        await this.get_all_data()

        if (this.all_blog_categories_data) {
            this.children = []
            this.all_blog_categories_data.forEach((item) => {
                this.children.push(item)
            })
        }

        if (this.all_blog_categories_data && this.all_blog_categories_data.length) {
            this.all_blog_categories_data.forEach((data) => {
                this.form_fields.forEach((field) => {
                    if (field.name == 'blog_category_id') {
                        field.data_list = []
                        let dataList = {}
                        dataList.label = data.title,
                            dataList.value = data.id
                        field.data_list.push(dataList)
                    }
                })
            })
        }



        if (id) {
            this.param_id = id;
            await this.get_single_data(id);
            if (this.single_data) {
                this.form_fields.forEach((field, index) => {
                    Object.entries(this.single_data).forEach((value) => {
                        if (field.name == value[0]) {
                            this.form_fields[index].value = value[1];
                        }
                        if (field.name == 'description' && value[0] == 'description') {
                            $('#description').summernote('code', value[1]);
                        }


                    });
                });
            }
        } else {
            this.form_fields.forEach((item) => {
                item.value = "";
            });
        }

    },
    methods: {

        ...mapActions(blog_setup_store, {
            get_all_data: 'all',
            get_single_data: 'get',
            store_data: 'store',
            update_data: 'update',

            get_all_blog_categories: 'get_all_blog_categories',
        }),

        submitHandler: async function ($event) {
            if (this.param_id) {
                this.setSummerEditor()
                let response = await this.update_data($event.target, this.param_id);
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            } else {
                this.setSummerEditor()
                
                let response = await this.store_data($event.target);
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            }
        },

        setSummerEditor() {
            var markupStr = $('#description').summernote('code');
            var target = document.createElement('input');
            target.setAttribute('name', 'description');
            target.value = markupStr;
            document.getElementById('description').appendChild(target);
        },

    },

    computed: {
        ...mapState(blog_setup_store, {
            single_data: "single_data",
            all_data: 'all_data',
            all_blog_categories_data: 'all_blog_categories_data',
            set_categories_data: 'set_categories_data',
        }),
    },


}
</script>


