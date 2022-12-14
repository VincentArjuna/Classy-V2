<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    outlet: Object,
    modifier: Object
})

const form = useForm({
    code: props.outlet?.code,
    name: props.outlet?.name,
    address: props.outlet?.address,
    telp_1: props.outlet?.telp_1,
    telp_2: props.outlet?.telp_2,
    fax: props.outlet?.fax,
    status: props.outlet?.status,
    modifier: props.modifier?.name
});

const submit = () => {
    Inertia.post(`/outlets/${props.outlet.id}`, {
        _method: "put",
        name: form.name,
        address: form.address,
        telp_1: form.telp_1,
        telp_2: form.telp_2,
        status: form.status,
        fax: form.fax,
    });
};
</script>

<template>

    <Head title="Edit Outlet" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Outlet
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="code" value="Code" />
                        <TextInput id="code" type="text" class="mt-1 block w-full" v-model="form.code" autofocus
                            autocomplete="code" disabled />
                    </div>
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
                    <div class="mt-2">
                        <InputLabel for="status" value="Status" />
                        <select id="status" v-model="form.status" class="text-sm rounded-lg block w-full p-2.5 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
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