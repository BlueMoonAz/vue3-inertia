<script >
import Layout from '@/Pages/Layout.vue'

export default {
    layout:Layout,
    data(){
        return {
            form: this.$inertia.form({
                name: null,
                price:null,
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
    <label for="fruitName">フルーツ:</label>
    <input id="fruitName" v-model="form.name" />
    <label for="price">値段:</label>
    <input id="price" v-model="form.price" />
    <button type="submit">登録</button>
  </form>
</template>