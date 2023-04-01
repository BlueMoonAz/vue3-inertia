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
    },
    edit(item){
      this.isActive=item.id;
    },
    cancel(){
      this.isActive=null;
    }
  },
  data(){
    return{
      isActive:null,
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
        <td>
          {{item.name}}
          <div v-show="isActive==item.id">
            <input type="text" v-bind:value="item.name"/>
            <input type="button" value="取消" @click="cancel()"/>
          </div>
        </td>
        <td>
          <input type="button" value="削除" @click="destroy(item)"/>
          <input type="button" value="編集" @click="edit(item)"/>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</template>
