<script>
import Layout from '@/Pages/Layout.vue'
import { useForm } from '@inertiajs/inertia-vue3';

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
      this.name=item.name;
    },
    update(item){
      const form = useForm({
        id:item.id,
        name:this.name
      })

      this.isActive=null;
      form.put(`/fruits/${item.id}/update`);

    },
    cancel(){
      this.isActive=null;
    }
  },
  data(){
    return{
      isActive:null,
      param:Array,
      name:null,
    }
  }
};
</script>

<template>
  <div>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th class="col-1">id</th>
        <th class="col-6">名称</th>
        <th class="col-2"></th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in items" :key="item.id">
        <td>{{item.id}}</td>
        <td>
          {{item.name}}
          <div v-show="isActive==item.id">
            <input type="text" v-model="name"/>
            <input type="button" value="更新" @click="update(item)"/>
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
