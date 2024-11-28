<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    const props = defineProps({
        role: Object
    });
</script>
<template>
    <AdminLayout>
        <h1>Edit {{ role.name }}</h1>
    </AdminLayout>
</template>