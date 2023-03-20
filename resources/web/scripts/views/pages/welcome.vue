<template>
    <div id="">
        <h1 class="text-3xl font-bold underline">test</h1>

    </div>
</template>

<script>
import fInput from '../components/f-input.vue';

export default {
    props: {
        testData: Object
    },
    components: {
        fInput,
    },
};
</script>

<style lang="scss" scoped>
.html{
  margin-right: 0;
}
</style>
