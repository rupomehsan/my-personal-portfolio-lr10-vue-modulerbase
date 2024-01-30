<template>
    <div class="form-group">
        <label for="">
            {{ label || name }}
        </label>
        <div v-if="['text', 'number', 'password', 'email', 'date', 'month'].includes(type)" class="mt-1 mb-3">
            <template v-if="name == 'tags'">
                <input type="text" class="form-control" :value="value" :name="name" data-role="tagsinput">
            </template>
            <template v-else>
                <input class="form-control form-control-square mb-2" :type="type" :name="name" :id="name" :value="value"
                    @change="errorReset" />
            </template>

        </div>

        <div v-if="type === 'textarea'" class="mt-1 mb-3">
            <!-- <textarea class="form-control form-control-square" rows="10"  type="text" :name="name" :value="value"
                @change="errorReset"></textarea> -->
            <!-- <div :id="name"></div> -->
            <text-editor :name="name" />

        </div>

        <div v-if="type === 'select'" class="mt-1 mb-3">
            <select :name="name" class="form-control" :id="name" @change="errorReset">
                <option value="">Select item</option>
                <option v-for="data in data_list" :key="data" :value="data.value" :selected="data.value == value">
                    {{ data.label }}
                </option>
            </select>
        </div>
        <div v-if="type === 'file'" class="mt-1 mb-3">
            <image-component :name="name" :multiple="multiple" :accept="`.jpg,.jpeg,.png`"
                :images="[value]"></image-component>
        </div>
    </div>
</template>

<script>
import TextEditor from './TextEditor.vue';
/**
 * props:
 */
export default {
    components: { TextEditor },
    data: () => ({
        tags: ''
    }),
    props: {
        name: {
            required: true,
            type: String,
        },
        label: {
            required: true,
            type: String,
        },
        type: {
            required: true,
            type: String,
        },
        multiple: {
            required: false,
            type: Boolean,
        },
        value: {
            required: false,
            type: String,
        },
        data_list: {
            required: false,
            type: Array,
        },
        
    },

    methods: {
        errorReset(event) {
            let currentElement = event.target
            let nextElement = currentElement.nextElementSibling;
            if (nextElement) {
                currentElement.classList.remove('border-warning')
                nextElement.remove()
            }
        },
    },
    created: async function () {
        // this.tags = this.value
        console.log(this.value);
        // setTimeout(() => {
        //     console.log(this.tags);
        // }, 1000)
    }



};
</script>

<style>
.bootstrap-tagsinput {
    background-color: rgba(255, 255, 255, 0.2);
    border: 0px solid #ccc;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    display: inline-block;
    padding: 4px 6px;
    color: #555;
    vertical-align: middle;
    border-radius: 4px;
    width: 100%;
    line-height: 22px;
    cursor: text;
}

.bootstrap-tagsinput input {
    border: none;
    box-shadow: none;
    outline: none;
    background-color: transparent;
    padding: 0 6px;
    margin: 0;
    color: #fff;
    width: auto;
    max-width: inherit;
}

.bootstrap-tagsinput.form-control input::-moz-placeholder {
    color: #777;
    opacity: 1;
}

.bootstrap-tagsinput.form-control input:-ms-input-placeholder {
    color: #777;
}

.bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
    color: #777;
}

.bootstrap-tagsinput input:focus {
    border: none;
    box-shadow: none;
}

.bootstrap-tagsinput .tag {
    margin-right: 2px;
}

.bootstrap-tagsinput .tag [data-role="remove"] {
    margin-left: 8px;
    cursor: pointer;
}

.bootstrap-tagsinput .tag [data-role="remove"]:after {
    content: "x";
    padding: 0px 2px;
}

.bootstrap-tagsinput .tag [data-role="remove"]:hover {
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
</style>
