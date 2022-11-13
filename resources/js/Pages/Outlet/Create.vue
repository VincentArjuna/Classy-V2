<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: '',
    address: '',
    telp_1: '',
    telp_2: '',
    fax: '',
});

const submit = () => {
    form.post(route('outlets.store'));
};
</script>

<template>

    <Head title="New Outlet" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New Outlet
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus
                            autocomplete="name" />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="address" value="Address" />
                        <TextInput id="address" type="text" class="mt-1 block w-full" v-model="form.address" autofocus
                            autocomplete="address" />
                        <InputError class="mt-2" :message="form.errors.address" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="telp_1" value="Telephone 1" />
                        <TextInput id="telp_1" type="text" class="mt-1 block w-full" v-model="form.telp_1" autofocus
                            autocomplete="telp_1" />
                        <InputError class="mt-2" :message="form.errors.telp_1" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="telp_2" value="Telephone 2" />
                        <TextInput id="telp_2" type="text" class="mt-1 block w-full" v-model="form.telp_2" autofocus
                            autocomplete="telp_2" />
                        <InputError class="mt-2" :message="form.errors.telp_2" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="fax" value="Fax" />
                        <TextInput id="fax" type="text" class="mt-1 block w-full" v-model="form.fax" autofocus
                            autocomplete="fax" />
                        <InputError class="mt-2" :message="form.errors.fax" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing">
                            Store
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>