<script setup >
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import Layout from '@/Pages/Layout.vue'

const form=reactive({
                name: null,
                price:null,
            })

function submit() {
  Inertia.post('/fruits/create', form);
}

</script>

<template>
  <Layout>
  <el-form :model="form" >
    <el-form-item label="フルーツ:">
      <el-input v-model="form.name" autocomplete="off" />
    </el-form-item>
    <el-form-item label="価格:">
      <el-input v-model="form.price" autocomplete="off" />
    </el-form-item>
    <el-button type="submit" @click.prevent="submit()">登録</el-button>
  </el-form>
  </Layout>
</template>