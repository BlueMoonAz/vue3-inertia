<script>
import Layout from '@/Pages/Layout.vue'

export default {
  layout:Layout,
  props:{
    items:Array,
  },
  methods:{
    destroy(item){
      if(confirm(item.name+'を削除しますか？')){
        this.$inertia.delete(`/fruits/del/${item.id}`)
      }
    }
  }
};
</script>

<template>
  <div>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>名称</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in items" :key="item.id">
        <td>{{item.id}}</td>
        <td>{{item.name}}</td>
        <td>
          <input type="button" value="削除" @click="destroy(item)"/>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</template>
