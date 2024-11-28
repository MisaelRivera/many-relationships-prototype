<script setup>
    const props = defineProps({
        role: Object
    });
</script>
<template>
    <h1>Showing role {{ role.name }}</h1>
</template>