<script >
import Layout from '@/Pages/Layout.vue'

export default {
    layout:Layout,
    data(){
        return {
            form: this.$inertia.form({
                name: null,
            }),
        }
    },
    methods: {
        submit() {
            this.form.post('create')
        },
  },
}
</script>

<template>
  <form @submit.prevent="submit">
    <label for="name">name:</label>
    <input id="name" v-model="form.name" />
    <button type="submit">Submit</button>
  </form>
</template>