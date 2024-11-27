<script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    const props = defineProps({
        roles: Object
    });
</script>
<template>
    <AdminLayout>
        <div class="w-8/12 mx-auto">
            <table class="border bg-white w-8/12 mx-auto">
                <thead>
                    <tr>
                        <th class="border py-2 px-3">Nombre</th>
                        <th class="border py-2 px-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(role, index) in roles.data" :key="index">
                        <td class="border py-2 px-3">{{ role.name }}</td>
                        <td class="border py-2 px-3">{{ role.name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AdminLayout>
</template>