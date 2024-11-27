import { usePage } from "@inertiajs/vue3";

export function usePermission () {
    const hasRole = (role) => usePage().props.auth.roles.includes(role);
    const hasPermission = (permission) => usePage().props.auth.permissions.includes(permission);
    return { hasRole, hasPermission };
}