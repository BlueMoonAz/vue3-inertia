<script>
import Layout from '@/Pages/Layout.vue'

export default {
    layout:Layout,
    data() {
        return {
            greeting: "Hello World!",
        };
    },
};
</script>

<template>
    <p class="greeting">{{ greeting }}</p>
</template>

<style>
.greeting {
    color: red;
    font-weight: bold;
}
</style>