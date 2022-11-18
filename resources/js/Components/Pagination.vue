<script setup>

defineProps({
    data: Object
})
</script>

<template>
    <div class="py-2 mt-2 flex justify-center">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px">
                <li v-if="data.links.prev">
                    <a :href="data.links.prev"
                        class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a
                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white rounded-sm">{{
                                data.meta.current_page
                        }}</a>
                </li>
                <li v-if="data.links.next">
                    <a :href="data.links.next"
                        class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>