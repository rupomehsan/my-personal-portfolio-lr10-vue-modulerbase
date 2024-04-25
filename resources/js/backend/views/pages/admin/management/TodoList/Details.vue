<template>
    <div>

        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="text-capitalize"> Details {{ route_prefix }}</h5>
                <div>
                    <router-link class="btn btn-outline-warning btn-sm" :to="{ name: `All${route_prefix}` }">All {{
                    route_prefix }}</router-link>
                </div>
            </div>
            <div class="col-lg-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h5 class="card-title">{{ all_data_by_catgory_id?.data?.[0]?.category.title }}</h5>
                            <div v-if="child_items.length" class="btn-group m-1 mb-3"
                                onclick="document.getElementById('table-actions').classList.toggle('show')">
                                <button type="button" class="btn btn-light waves-effect waves-light">Actions</button>
                                <button type="button"
                                    class="btn btn-light split-btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu" style="" id="table-actions">
                                    <a href="javaScript:void();" class="dropdown-item"
                                        @click="bulkActions('delete')">Delete</a>
                                    <a href="javaScript:void();" class="dropdown-item"
                                        @click="bulkActions('active')">Active</a>
                                    <a href="javaScript:void();" class="dropdown-item"
                                        @click="bulkActions('inactive')">Inactive</a>

                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="w-10"><input type="checkbox" v-model="parent_item"
                                                @click="toggleParentCheckbox"></th>
                                        <th class="text-start">SL</th>
                                        <th>title</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in all_data_by_catgory_id.data" :key="index">
                                        <td class="w-10">
                                            <input @click="toggleChildCheckbox(item.id)"
                                                :checked="child_items.includes(item.id)" type="checkbox">
                                        </td>
                                        <td class="text-start">{{ index + 1 }}</td>
                                        <td>{{ item.title }}</td>
                                        <td style="width: 100px;">
                                            <div class="d-flex justify-content-between gap-2">
                                                <a @click.prevent="completeTask(item.id)" class="btn btn-sm  "
                                                    title="Task complete or not"
                                                    :class="item.is_complete =='1' ? 'bg-success btn-outline-success' : 'bg-danger btn-outline-danger'">
                                                    <i :class="item.is_complete ? 'fa-check ' : 'fa-times'"
                                                        class="fa "></i>
                                                </a>
                                                <router-link class="btn btn-sm btn-outline-warning mx-2" :to="{
                    name: `Create${route_prefix}`, query: {
                        id: item.id,
                    },
                }">
                                                    <i class="fa fa-pencil"></i>
                                                </router-link>
                                                <a @click.prevent="is_model_open = !is_model_open; getSingleData(item.id)"
                                                    title="Show Details" class="btn btn-sm btn-outline-warning mx-2"
                                                    :to="{
                    name: `Details${route_prefix}`, params: {
                        id: item.id,
                    },
                }">
                                                    <i class="fa fa-book"></i>
                                                </a>
                                                <a @click.prevent="deleteData(item.id)"
                                                    class="btn btn-sm btn-outline-danger ">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <div :class="is_model_open ? 'show d-block' : ''" class="modal fade ">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-info">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title text-white">{{ single_data.title }}</h5>
                            <button @click="is_model_open = false" type="button" class="close text-white"
                                data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body  " style="max-height:300px;overflow-y: auto;">
                            <p v-html="single_data.description"></p>

                        </div>
                        <div class="modal-footer">
                            <button @click="is_model_open = false" type="button" class="btn btn-light"
                                data-dismiss="modal"><i class="fa fa-times"></i>
                                Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import { mapActions, mapState } from 'pinia'
import { todo_list_setup_store } from './setup/store';
import setup from "./setup";
import form_fields from "./setup/form_fields";

export default {
    data: () => ({
        route_prefix: '',
        page_title: '',
        param_id: '',
        parent_item: false,
        child_items: [],
        loaded: false,
        is_model_open: false
    }),
    created: function () {
        this.param_id = this.$route.params.id;
        this.route_prefix = setup.route_prefix;
        this.page_title = setup.page_title;
        this.get_all_data_by_category_id(this.param_id)
        this.loaded = true

    },
    methods: {
        ...mapActions(todo_list_setup_store, {
            get_all_data_by_category_id: 'get_all_data_by_category_id',
            delete_data: 'delete',
            bulk_action: 'bulk_action',
            get_single_data: 'get',
            complete_task: 'complete_task',
        }),
        toggleParentCheckbox() {
            this.child_items = event.target.checked ? this.all_data_by_catgory_id.data.map(item => item.id) : []
        },

        toggleChildCheckbox(id) {
            let isChecked = event.target.checked
            if (isChecked) {
                this.child_items.push(id)
            } else {
                this.child_items = this.child_items.filter(item => item != id)
            }

        },
        async bulkActions(action) {
            let response = await this.bulk_action(action, this.child_items)
            if (response?.data?.status == 'success') {
                this.get_all_data_by_category_id(this.param_id);
            }
            this.parent_item = false
            this.child_items = []
        },
        getSingleData(id) {
            this.get_single_data(id)
        },
        async completeTask(id) {
            let response = await this.complete_task(id)
            if (response?.data?.status == 'success') {
                this.get_all_data_by_category_id(this.param_id);

            }
        },
        async deleteData(id) {
            let response = await this.delete_data(id)
            if (response?.data?.status == 'success') {
                this.get_all_data_by_category_id(this.param_id);
            }
        }

    },
    computed: {
        ...mapState(todo_list_setup_store, {
            all_data_by_catgory_id: 'all_data_by_catgory_id',
            single_data: 'single_data',
        })
    }
}
</script>
