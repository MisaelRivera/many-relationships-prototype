<script setup>
    import { Link } from '@inertiajs/vue3';
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    const props = defineProps({
        users: Object
    });
</script>
<template>
    <AdminLayout>
        <div class="w-8/12 mx-auto">
            <table class="border bg-white w-8/12 mx-auto">
                <thead>
                    <tr>
                        <th class="border py-2 px-3">Nombre</th>
                        <th class="border py-2 px-3">Email</th>
                        <th class="border py-2 px-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(user, index) in users.data" :key="index">
                        <td class="border py-2 px-3">{{ user.name }}</td>
                        <td class="border py-2 px-3">{{ user.email }}</td>
                        <td class="border py-2 px-3">
                            <Link :href="route('users.show', { user: user.id })">
                                <i class="fas fa-eye text-blue-500 text-sm"></i>
                            </Link>
                            <Link :href="route('users.edit', { user: user.id })">
                                <i class="fas fa-edit text-white bg-blue-500 p-[3px] rounded-full text-[0.615rem] ml-3"></i>
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AdminLayout>
</template>