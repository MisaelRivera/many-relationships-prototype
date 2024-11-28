<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import CreateTitle from '@/Components/Shared/CreateTitle.vue';
</script>
<template>
    <AdminLayout>
        <div class="w-8/12 mx-auto">
           <CreateTitle 
                title="Crear rol"
                :back-link="route('roles.index')"
                :own-link="route('roles.create')"/>
        </div>
    </AdminLayout>
</template>