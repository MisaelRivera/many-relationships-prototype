<script setup>
    import { Link } from '@inertiajs/vue3';
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    const props = defineProps({
        permissions: Object
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
                    <tr v-for="(permission, index) in permissions.data" :key="index">
                        <td class="border py-2 px-3">{{ permission.name }}</td>
                        <td class="border py-2 px-3">
                            <Link :href="route('permissions.show', { permission: permission.id })">
                                <i class="fas fa-eye text-blue-500 text-sm"></i>
                            </Link>
                            <Link :href="route('permissions.edit', { permission: permission.id })">
                                <i class="fas fa-edit text-white bg-blue-500 p-[3px] rounded-full text-[0.615rem] ml-3"></i>
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AdminLayout>
</template>