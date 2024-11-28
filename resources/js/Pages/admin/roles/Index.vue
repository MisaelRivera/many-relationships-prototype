<script setup>
    import { Link } from '@inertiajs/vue3';
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import IndexTitle from '@/Components/Shared/IndexTitle.vue';
    const props = defineProps({
        roles: Object
    });
</script>
<template>
    <AdminLayout>
        <div class="w-8/12 mx-auto">
            <div class="w-8/12 mx-auto">
                <IndexTitle 
                    title="Roles"
                    :add-link="route('roles.create')"
                    :own-link="route('roles.index')"/>
                <table class="border bg-white w-full">
                    <thead>
                        <tr>
                            <th class="border py-2 px-3">Nombre</th>
                            <th class="border py-2 px-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(role, index) in roles.data" :key="index">
                            <td class="border py-2 px-3">{{ role.name }}</td>
                            <td class="border py-2 px-3">
                                <Link :href="route('roles.show', { role: role.id })">
                                    <i class="fas fa-eye text-blue-500 text-sm"></i>
                                </Link>
                                <Link :href="route('roles.edit', { role: role.id })">
                                    <i class="fas fa-edit text-white bg-blue-500 p-[3px] rounded-full text-[0.615rem] ml-3"></i>
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AdminLayout>
</template>