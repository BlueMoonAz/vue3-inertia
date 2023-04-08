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
  <el-form :model="form" >
    <el-form-item label="フルーツ:">
      <el-input v-model="form.name" autocomplete="off" />
    </el-form-item>
    <el-form-item label="価格:">
      <el-input v-model="form.price" autocomplete="off" />
    </el-form-item>
    <el-button type="submit" @click.prevent="submit()">登録</el-button>
  </el-form>
</template>