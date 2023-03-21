<template>
    <div class="">
        <div class="px-8 py-12">
            <img src="@/web/assets/imgs/logo.svg" class="h-10" >
            <img src="@/web/assets/imgs/beach-work.jpg" class="mt-6 rounded-lg shadow-xl" >
            <h1 class="mt-6 text-2xl font-bold text-gray-900">Yuo can work from anywhere. <span class="text-indigo-500">take advantage of it</span></h1>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, voluptates! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, nobis.</p>
            <div class="mt-4">
                <a href="#" class="inline-block bg-indigo-500 rounded-xl text-white px-5 py-3 shadow-lg uppercase tracking-wider font-semibold text-sm">Book Here</a>
            </div>
        </div>
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
