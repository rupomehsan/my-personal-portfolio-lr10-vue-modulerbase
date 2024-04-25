export default [
    {
        name: "title",
        label: "Enter your  name",
        type: "text",
        value: "",
    },
    {
        name: "category_type",
        label: "Select for category",
        type: "select",
        value: "",
        data_list: [
            {
                label: "Blog",
                value: "blog",
            },
            {
                label: "Todo List",
                value: "todo_list",
            },
            {
                label: "Quiz",
                value: "quiz",
            },
        ],
    },
    {
        name: "image",
        label: "Upload your image",
        type: "file",
        value: null,
        multiple: false,
    },
];
