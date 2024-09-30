<script setup>
import {onMounted, ref} from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({focus: () => input.value.focus()});
</script>

<template>
    <input
        ref="input"
        v-model="model"
        class="border-gray-300 focus:border-amber-900 focus:ring-amber-900 rounded-md shadow-sm"
    />
</template>
