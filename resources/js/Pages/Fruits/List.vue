<script>
import Layout from '@/Pages/Layout.vue'
import { useForm } from '@inertiajs/inertia-vue3';
import{ElButton,ElTable,ElTableColumn} from 'element-plus';

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
      this.price=item.price;
    },
    update(item){
      const form = useForm({
        id:item.id,
        name:this.name,
        price:this.price
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
      price:null,
    }
  }
};
</script>

<template>
  <div>
    <el-table :data="items" style="width: 100%">
      <el-table-column prop="id" label="id" width="80" />
      <el-table-column prop="name" label="名称" />
      <el-table-column prop="price" label="価格" width="100"
       header-align="center" align="right">
        <template #default="scope">
          <div v-if="scope.row.price" >
            {{scope.row.price.toLocaleString()}}
          </div>
        </template>
      </el-table-column>
      <el-table-column fixed="right" label="操作" width="120">
        <template #default="scope">
          <el-button link type="primary">編集</el-button>
          <el-button link type="primary"
            @click.prevent="destroy(items[scope.$index])">削除</el-button>
        </template>
      </el-table-column>
    </el-table>

  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th class="col-1 text-center">id</th>
        <th class="col-4">名称</th>
        <th class="col-1">価格</th>
        <th class="col-2"></th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in items" :key="item.id">
        <td class="text-center">{{item.id}}</td>
        <td>
          {{item.name}}
          <div v-show="isActive==item.id">
            <input type="text" v-model="name"/>
          </div>
        </td>
        <td class="text-end">
          <div v-if="item.price" >
            {{ item.price.toLocaleString() }}
          </div>
          <div v-show="isActive==item.id">
            <input type="text" v-model="price" class="text-end"/>
          </div>
        </td>
        <td>
          <div v-show="isActive!=item.id">
            <input type="button" value="削除" @click="destroy(item)"/>
            <input type="button" value="編集" @click="edit(item)"/>
          </div>
          <div v-show="isActive==item.id">
            <input type="button" value="更新" @click="update(item)"/>
            <input type="button" value="取消" @click="cancel()"/>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  <el-button round>element</el-button>
</div>
</template>
