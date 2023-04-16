
<script setup>
import { Head, useForm } from '@inertiajs/vue3';
defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />
    <el-form :model="form" >
        <el-form-item label="Email">
            <el-input v-model="form.email" autocomplete="username" />
        </el-form-item>
        <el-form-item label="Password">
            <el-input v-model="form.password" type="password" autocomplete="off" />
        </el-form-item>
        <el-button type="submit" @click.prevent="submit()">Log in</el-button>
    </el-form>
</template>
