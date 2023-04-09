<template>
    <el-row>
        <el-col :span="4">
            <el-menu>
                <el-menu-item @click="getIndex()">
                    一覧
                </el-menu-item>
                <el-menu-item @click="getAdd()">
                    登録
                </el-menu-item>
            </el-menu>
        </el-col>
        <el-col :span="15">
            <slot />
        </el-col>
    </el-row>
    
</template>

<script>
export default {
  methods:{
    getIndex(){
        this.$inertia.get('/fruits/list');
    },
    getAdd(){
        this.$inertia.get('/fruits/add');
    },
  }
}
</script>