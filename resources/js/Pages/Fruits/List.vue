<script>
import Layout from '@/Pages/Layout.vue'

export default {
  layout:Layout,
  props:{
    items:Array,
  },
};
</script>

<template>
  <div>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>名称</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in items" :key="item.id">
        <td>{{item.id}}</td>
        <td>{{item.name}}</td>
      </tr>
    </tbody>
  </table>
</div>
</template>
