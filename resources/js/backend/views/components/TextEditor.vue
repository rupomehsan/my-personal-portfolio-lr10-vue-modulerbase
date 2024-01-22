<template>
    <div>
        <div :id="name"></div>
    </div>
</template>

<script>
export default {
    props: {
        name: {
            required: true,
            type: String,
        },
    },
    created() {
        this.initialiteSummerNote('description')
        this.summerNoteTooltip('Style', 'dropdown-style')
        this.summerNoteTooltip('Font Family', 'dropdown-fontname')
        this.summerNoteTooltip('More Color', 'note-color')


    },
    methods: {
        initialiteSummerNote(id) {
            setTimeout(function () {
                $(`#${id}`).summernote({
                    height: 216,
                    tabsize: 2,
                });
            }, 1000)
        },
        summerNoteTooltip(style, classname) {
            setTimeout(function () {
                let target = document.querySelector(`[data-bs-original-title="${style}"]`);
                let targetClass = document.querySelector(`.${classname}`);
                target.addEventListener('click', function () {
                    targetClass.classList.toggle('show');
                });
            }, 1000)
        },
    }
}
</script>

<style></style>
