<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    links: Array,
});
</script>

<template>
    <div v-if="links.length > 3">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px text-sm">
                <template v-for="(link, key) in links">
                    <li>
                        <div
                            v-if="link.url === null"
                            :key="key"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                            v-html="link.label"
                        />
                        <Link
                            v-else
                            :key="`link-${key}`"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                            :class="{
                                'flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white':
                                    link.active,
                            }"
                            :href="link.url"
                            v-html="link.label"
                        >
                        </Link>
                    </li>
                </template>
            </ul>
        </nav>
    </div>
</template>
