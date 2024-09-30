<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import {Link} from '@inertiajs/vue3';
import Footer from "@/Components/Footer.vue";
</script>

<template>
    <div class="flex flex-col items-center justify-center p-4">
        <div
            class="relative w-full max-w-2xl px-6 py-4 lg:max-w-4xl bg-gray-50 text-black/80 rounded-xl border border-gray-300">

            <header>
                <div class="flex items-center justify-between font-extrabold">
                    <Link :href="route('home')">Home</Link>
                    <Link :href="route('impressum')">Impressum</Link>
                    <Link :href="route('datenschutz')">Datenschutz</Link>
                </div>
            </header>
            <main class="mt-8">
                <div class="p-1 lg:p-8 w-full space-y-2">
                    <div class="flex items-center justify-center mb-8">
                        <ApplicationLogo class="w-3/4 lg:w-1/4"/>
                    </div>
                    <div>
                        <slot/>
                    </div>
                </div>
            </main>
            <Footer/>
        </div>
    </div>
</template>
