<script setup>
import {Head, Link} from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({});

</script>

<template>
    <Head title="Welcome"/>
    <GuestLayout>
        <div class="space-y-2 text-center">
            <div>
                <Link :href="route('start')"
                      class="w-1/2 inline-flex items-center px-4 py-2 bg-amber-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-amber-700 focus:bg-amber-700 active:bg-amber-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                      type="button">
                    Ich will jetzt quizzen !!!
                </Link>
            </div>
            <div>
                <Link :href="route('login')"
                      class="w-1/2 inline-flex items-center px-4 py-2 bg-amber-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-amber-700 focus:bg-amber-700 active:bg-amber-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                      type="button">
                    Ich will eine weitere Quizfrage beitragen
                </Link>
            </div>
        </div>
    </GuestLayout>
</template>
