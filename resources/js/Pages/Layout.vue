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

<script setup>
import { Inertia } from '@inertiajs/inertia'
const getIndex=()=>Inertia.visit('/fruits/list', {method: 'get'});
const getAdd=()=>Inertia.visit('/fruits/add', {method: 'get'});
</script>