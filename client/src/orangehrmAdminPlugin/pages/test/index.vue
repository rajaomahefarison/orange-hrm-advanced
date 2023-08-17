<script>

export default ({
    setup() {
        
    },
    props : {
        unselectableIds : {
            type : Array,
            default : () => []
        }
    }
})
</script>

<template>
    <h1>{{ unselectableIds }}</h1>
</template>