import { defineStore } from "pinia";

export const category_setup_store = defineStore("category_setup_store", {
    state: () => ({
        all_data: {},
        single_data: {},
        role_data: {},
        category_type: [],
        api: "categories"
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
            formData.append('category_type', JSON.stringify(this.category_type))
            let response = await axios.post(`${this.api}`, formData);
            return response;
        },

        update: async function (form, id) {
            let formData = new FormData(form);
            formData.append('category_type', JSON.stringify(this.category_type))
            let response = await axios.post(`${this.api}/${id}?_method=PATCH`, formData);
            return response;
        },

        delete: async function (id) {
            var data = await window.s_confirm();
            if (data) {
                let response = await axios.delete(`${this.api}/${id}`);
                window.s_alert("Data deleted");
                this.all();
                console.log(response.data);
            }
        },
        bulk_action: async function (action, data) {
            let response = await axios.post(`${this.api}/bulk-action`, { action, data })
            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                this.all();
            }
        },

        // additional function
        // additional function
        get_all_categories: async function () {
            let response = await axios.get(`${this.api}?get_all=1`);
            response = response.data.data;
            this.all_data = response;
        },

        set_category_type: async function (item) {
            if (item == 'empty') {
                this.category_type = []
                return false
            }
            if (!this.category_type.includes(item)) {
                this.category_type.push(item);
            }
        },
        remove_category_type: async function (index) {
            this.category_type = this.category_type.filter((item, i) => i !== index)
        }


    },
});
