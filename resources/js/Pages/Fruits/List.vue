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
      this.form.id=item.id;
      this.form.name=item.name;
      this.form.price=item.price;

      this.isVisible=true;
    },
    update(){
      const form = useForm({
        id:this.form.id,
        name:this.form.name,
        price:this.form.price,
      })

      this.isVisible=false;
      form.put(`/fruits/${form.id}/update`);

    },
  },
  data(){
    return{
      isVisible:false,
      form:{
        id:null,
        name:null,
        price:null,
      }
    }
  }
};
</script>

<template>
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
        <el-button link type="primary"
          @click.prevent="edit(items[scope.$index])">
          編集
        </el-button>
        <el-button link type="primary"
          @click.prevent="destroy(items[scope.$index])">
          削除
        </el-button>
      </template>
    </el-table-column>
  </el-table>

  <el-dialog v-model="isVisible" title="フルーツ編集">
    <el-form :model="form">
      <el-form-item label="id" :label-width="140">
        {{ form.id }}
      </el-form-item>
      <el-form-item label="名称" :label-width="140">
        <el-input v-model="form.name" autocomplete="off" />
      </el-form-item>
      <el-form-item label="価格" :label-width="140">
        <el-input v-model="form.price" autocomplete="off" />
      </el-form-item>
    </el-form>
    <template #footer>
      <span class="dialog-footer">
        <el-button @click="update()">更新</el-button>
        <el-button @click="isVisible = false">取消</el-button>
      </span>
    </template>
  </el-dialog>  
</template>
