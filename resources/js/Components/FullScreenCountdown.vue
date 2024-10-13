<script setup>
import {onMounted, ref} from 'vue';

const props = defineProps({
    seconds: {
        type: Number,
        required: true
    }
});

const countdown = ref(props.seconds);

onMounted(() => {
    const interval = setInterval(() => {
        if (countdown.value > 0) {
            countdown.value--;
        } else {
            clearInterval(interval);
        }
    }, 1000);
});

</script>

<template>
    <div v-if="countdown > 0"
         class="fixed inset-0 flex items-center justify-center bg-amber-950">
        <div class="text-white text-2xl lg:text-6xl font-bold text-center">
            <p>Jetzt geht's los !!!</p>
            <p>in <br><br></p>
            <p class="text-8xl">{{ countdown }}</p>
        </div>
    </div>
</template>

<style scoped>

</style>
