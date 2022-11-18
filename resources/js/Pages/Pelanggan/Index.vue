<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import MainTable from '@/Components/MainTable.vue';
import FlashMessage from '@/Components/FlashMessage.vue';

defineProps({
    pelanggans: Object
})

</script>

<template>

    <Head title="Pelanggan" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Pelanggan
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <FlashMessage />
                <div class="flex justify-end m-2 p-2">
                    <Link :href="route('pelanggans.create')"
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">
                    New Pelanggan
                    </Link>
                </div>


                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <MainTable>
                            <template #table-header>
                                <th scope="col" class="py-3 px-6">
                                    ID
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Phone
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Address
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                </th>
                            </template>
                            <tr v-for="pelanggan in pelanggans.data" :key="pelanggan.id"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ pelanggan.id }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ pelanggan.name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ pelanggan.phone }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ pelanggan.address }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ pelanggan.status }}
                                </td>
                                <td class="py-4 px-6">
                                    <Link :href="route('pelanggans.edit', pelanggan.id)"
                                        class="font-medium text-blue-500 hover:text-blue-700 mr-2">Edit</Link>
                                    <Link :href="route('pelanggans.destroy', pelanggan.id)" method="delete" as="button"
                                        type="button" class="font-medium text-red-500 hover:text-red-700 mr-2">Delete
                                    </Link>
                                </td>
                            </tr>
                        </MainTable>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>