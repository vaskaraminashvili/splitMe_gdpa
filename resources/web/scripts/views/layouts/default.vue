<template>
    <slot/>
</template>

<script>
export default {
    setup() {
        const store = useGeneralStore()
        return {
            store
        }
    },

};
</script>

<style lang="scss" scoped></style>
