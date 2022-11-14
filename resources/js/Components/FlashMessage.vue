<script setup>
</script>

<template>
    <div v-if="$page.props.flash.message"
        class="p-4 text-sm text-blue-700 bg-blue-100 dark:bg-blue-400 dark:text-blue-800 rounded-lg" role="alert">
        <div class="max-w-7xl mx-auto"> {{ $page.props.flash.message }}</div>
    </div>
</template>