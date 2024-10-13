<script setup>
import {Head} from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";
import FullScreenCountdown from "@/Components/FullScreenCountdown.vue";
</script>

<template>
    <Head title="Start"/>
    <GuestLayout>
        <FullScreenCountdown :seconds="5"/>
        <h1 class="text-2xl mb-8">Start</h1>
        <p class="mb-2">Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder wünscht,
            nur, weil er
            Schmerz ist, es sei denn, es kommt zu zufälligen Umständen, in denen Mühen und Schmerz
            ihm große Freude bereiten können.</p>
    </GuestLayout>
</template>
