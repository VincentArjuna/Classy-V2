<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';
import { Head, useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    pelanggan: Object,
    modifier: Object
})

const form = useForm({
    name: props.pelanggan?.name,
    phone: props.pelanggan?.phone,
    birth_date: props.pelanggan?.birth_date,
    address: props.pelanggan?.address,
    id_number: props.pelanggan?.id_number,
    id_type: props.pelanggan?.id_type,
    email: props.pelanggan?.email,
    status: props.pelanggan?.status,
    modifier: props.modifier?.name
});

const submit = () => {
    Inertia.post(`/pelanggans/${props.pelanggan.id}`, {
        _method: "put",
        name: form.name,
        phone: form.phone,
        birth_date: form.birth_date,
        address: form.address,
        id_number: form.id_number,
        id_type: form.id_type,
        email: form.email,
        status: form.status,
    });
};
</script>

<template>

    <Head title="Edit Pelanggan" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Pelanggan
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
                        <input id="birth_date" type="date"
                            class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            v-model="form.birth_date" autocomplete="birth_date" />
                        <InputError class="mt-2" :message="form.errors.birth_date" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="address" value="Address" />
                        <TextInput id="address" type="text" class="mt-1 block w-full" v-model="form.address"
                            autocomplete="address" />
                        <InputError class="mt-2" :message="form.errors.address" />
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
                    <div class="mt-2">
                        <InputLabel for="email" value="Email" />
                        <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email"
                            autocomplete="email" />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="status" value="Status" />
                        <select id="status" v-model="form.status"
                            class="text-sm rounded-lg block w-full p-2.5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option :value="1">Active</option>
                            <option :value="0">Non Active</option>
                        </select>
                    </div>
                    <div class="mt-2">
                        <InputLabel for="modified_by" value="Modified By" />
                        <TextInput id="modified_by" type="text" class="mt-1 block w-full" v-model="form.modifier"
                            autofocus autocomplete="modified_by" disabled />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing">
                            Update
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>