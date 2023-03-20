
<template>
    <div id="border">
        <span v-for="(item,index) in data">
            {{ item }}
        </span>
        <br>
        <br>
        <br>
        <span>text jere</span>
        <input type="text" :value="inputValue" >
        <div id="slot">
            <p>slot here</p>
            <slot></slot>
        </div>

    </div>
</template>

<script>
export default {
    props: {
        inputValue: {
            type: String,
            default: "test"
        },
    },
}
</script>

<style lang="scss" scoped>
#border{
    border: 2px solid red;
    padding: 20px;
}
</style>
