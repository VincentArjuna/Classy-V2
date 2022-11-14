<script setup>
import { onMounted, ref } from 'vue';

defineProps(['modelValue']);

defineEmits(['update:modelValue']);

const input = ref(null);
</script>

<template>
    <textarea rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300"
        :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input"
        placeholder="Your message...">
    </textarea>
</template>