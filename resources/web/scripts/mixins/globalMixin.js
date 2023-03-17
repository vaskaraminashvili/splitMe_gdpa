export default {
    created() {
        const store = useGeneralStore()
        store.data = this.$attrs.data
    },
};
