<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';
import { Head, useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: '',
    phone: '',
    birth_date: '',
    id_type: 'KTP',
    id_number: '',
    email: '',
});

const submit = () => {
    console.log(form);
    form.post(route('pelanggans.store'));
};
</script>

<template>

    <Head title="New Pelanggan" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New Pelanggan
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
                        <InputLabel for="phone" value="Phone" />
                        <TextInput id="phone" type="text" class="mt-1 block w-full" v-model="form.phone"
                            autocomplete="phone" />
                        <InputError class="mt-2" :message="form.errors.phone" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="birth_date" value="Birth Date" />
                        <TextInput id="birth_date" type="text" class="mt-1 block w-full" v-model="form.birth_date"
                            autocomplete="birth_date" />
                        <InputError class="mt-2" :message="form.errors.birth_date" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="id_type" value="ID Type" />
                        <select id="id_type" v-model="form.id_type"
                            class="text-sm rounded-lg block w-full p-2.5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="KTP">KTP</option>
                            <option value="SIM">SIM</option>
                            <option value="PASSPORT">PASSPORT</option>
                        </select>
                        <InputError class="mt-2" :message="form.errors.id_type" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="id_number" value="ID Number" />
                        <TextInput id="id_number" type="text" class="mt-1 block w-full" v-model="form.id_number"
                            autocomplete="id_numbere" />
                        <InputError class="mt-2" :message="form.errors.id_number" />
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