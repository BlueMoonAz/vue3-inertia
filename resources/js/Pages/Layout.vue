<template>
    <el-container>
        <el-aside width="100px">
            <el-menu>
                <el-menu-item @click="getIndex()">
                    一覧
                </el-menu-item>
                <el-menu-item @click="getAdd()">
                    登録
                </el-menu-item>
            </el-menu>
        </el-aside>
        <el-main>
            <slot />
        </el-main>
    </el-container>
</template>

<script setup>
import { Inertia } from '@inertiajs/inertia'
const getIndex=()=>Inertia.visit('/fruits/list', {method: 'get'});
const getAdd=()=>Inertia.visit('/fruits/add', {method: 'get'});
</script>