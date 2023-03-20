export default {
    mounted() {
        const store = useGeneralStore()
        if (this.$attrs.testData !== undefined) {
            store.data = this.$attrs.testData
        }

    },
    computed: {
        // gives access to this.doubleCount inside the component
        // same as reading from store.doubleCount
        ...mapState(useGeneralStore, ['data', 'count']),

    },
};
