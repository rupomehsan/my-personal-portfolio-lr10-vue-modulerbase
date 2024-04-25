export default [
    {
        name: "name",
        label: "Enter your name",
        type: "text",
        value: "",
    },

    {
        name: "phone",
        label: "Enter your phone",
        type: "text",
        value: "",
    },

    {
        name: "email",
        label: "Enter your email",
        type: "text",
        value: "",
    },

    {
        name: "address",
        label: "Enter your address",
        type: "text",
        value: "",
    },

    {
        name: "blood_group",
        label: "Select your blood group",
        type: "select",
        value: "",
        data_list: [
            {
                label: "O-",
                value: "O-",
            },
            {
                label: "O+",
                value: "O+",
            },
            {
                label: "A+",
                value: "A+",
            },
            {
                label: "A-",
                value: "A-",
            },
            {
                label: "AB-",
                value: "AB-",
            },
            {
                label: "AB+",
                value: "AB+",
            },
            {
                label: "B-",
                value: "B-",
            },
             {
                label: "B+",
                value: "B+",
            },
        ],
    },

    {
        name: "division_id",
        label: "Select division",
        type: "select",
        value: "",
        data_list: [],
    },

    {
        name: "district_id",
        label: "Select district",
        type: "select",
        value: "",
        data_list: [],
    },

    {
        name: "thana_id",
        label: "Select thana",
        type: "select",
        value: "",
        data_list: [],
    },

    {
        name: "image",
        label: "Enter your image",
        type: "file",
        value: "",
    },
];
