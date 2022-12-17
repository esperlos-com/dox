export let formModules = [
    {
        type: "select",
        label: "نوع فرم",
        default:{
            "value": "-1",
            "text": "نوع فرم را انتخاب کنید"
        },
        options:  [
            {
                "value": "1",
                "text": "متن"
            },
            {
                "value": "2",
                "text": "متن بزرگ"
            },
            {
                "value": "3",
                "text": "انتخابی"
            },
            {
                "value": "4",
                "text": "عکس"
            },
        ],
        initial: "-1",
        classes: ['form-control','ml-2'],
        datasets:[{
            data: 'role',
            value: 'form_type'
        }]
    },
    {
        type: "input",
        label: "عنوان",
        hint:"عنوان",
        initial: "",
        classes: ['form-control','ml-2'],
        datasets:[{
            data: 'role',
            value: 'title'
        }]
    },
    {
        type: "input",
        label: "مقادیر",
        hint:"مقادیر",
        initial: "",
        classes: ['form-control','ml-2'],
        datasets:[{
            data: 'role',
            value: 'values'
        }]
    },
    {
        type: "input",
        label: "جایگاه",
        hint:"جایگاه",
        initial: "",
        classes: ['form-control','ml-2'],
        datasets:[{
            data: 'role',
            value: 'order'
        }]
    },
];


