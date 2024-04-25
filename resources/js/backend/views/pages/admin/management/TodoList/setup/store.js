import { defineStore } from "pinia";

export const todo_list_setup_store = defineStore("todo_list_setup_store", {
    state: () => ({
        all_data: {},
        single_data: {},
        all_todolist_categories_data: {},
        all_data_by_catgory_id: {},
        api: "todo-lists"
    }),
    getters: {
        doubleCount: (state) => state.count * 2,
    },
    actions: {

        all: async function (url) {
            let response;
            if (url) {
                response = await axios.get(url);
            } else {
                response = await axios.get(this.api);
            }
            this.all_data = response.data.data;
        },

        get: async function (id) {
            let response = await axios.get(`${this.api}/${id}`);
            response = response.data.data;
            this.single_data = response;
        },

        store: async function (form) {
            let formData = new FormData(form);
            let response = await axios.post(this.api, formData);
            return response;
        },

        update: async function (form, id) {
            let formData = new FormData(form);
            let response = await axios.post(`${this.api}/${id}?_method=PATCH`, formData);
            return response;
        },

        delete: async function (id) {
            var data = await window.s_confirm();
            if (data) {
                let response = await axios.delete(`${this.api}/${id}`);
                window.s_alert("Data deleted");
                return response

            }
        },
        bulk_action: async function (action, data) {
            let response = await axios.post(`${this.api}/bulk-action`, { action, data })
            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                return response
            }
        },

        // additional function
        // additional function
        get_all_todolist_categories: async function () {
            let response = await axios.get('categories?todolist=true');
            response = response.data.data;
            this.all_todolist_categories_data = response;
        },
        get_all_data_by_category_id: async function (id) {
            let response = await axios.get(`${this.api}?category_id=${id}`);
            response = response.data.data;
            this.all_data_by_catgory_id = response;
        },
        complete_task: async function (id) {
            var data = await window.s_confirm();
            if (data) {
                let response = await axios.post(`${this.api}/${id}?_method=PATCH&is_task_complete=1`, {});
                window.s_alert("Data Updated");
                return response
            }
        },

    },
});
