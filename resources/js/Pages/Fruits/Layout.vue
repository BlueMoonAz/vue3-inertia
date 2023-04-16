<template>
    <el-container>
        <el-aside width="150px">
            <el-menu class="el-menu-vertical-demo">
                <el-sub-menu index="1">
                    <template #title>
                        <el-icon><location /></el-icon>
                        {{ $page.props.auth.user.name }}
                    </template>
                    <el-menu-item index="1-1">Dashboard</el-menu-item>
                    <el-menu-item index="1-2" @click="profile()">edit profile.</el-menu-item>
                    <el-menu-item index="1-3" @click="logout()">logout</el-menu-item>
                </el-sub-menu>
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
import {
  Document,
  Menu as IconMenu,
  Location,
  Setting,
} from '@element-plus/icons-vue'

const getIndex=()=>Inertia.visit('/fruits/list', {method: 'get'});
const getAdd=()=>Inertia.visit('/fruits/add', {method: 'get'});
const logout=()=>Inertia.visit(route('logout'), {method: 'post'});
const profile=()=>Inertia.visit(route('profile.edit'), {method: 'get'});
</script>