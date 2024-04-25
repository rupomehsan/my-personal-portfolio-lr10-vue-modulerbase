export default [
    {
        name: "name",
        label: "Enter your name",
        type: "text",
        value: "",
    },

    {
        name: "link",
        label: "Enter your link",
        type: "text",
        value: "",
    },

    {
        name: "description",
        label: "Enter your description",
        type: "textarea",
        value: "",
    },

    {
        name: "thumb_image",
        label: "Upload thumb image",
        type: "file",
        multiple: false,
        value: "",
    },
    {
        name: "images",
        label: "Upload project images",
        type: "file",
        multiple: true,
        value: [],
    },
];
