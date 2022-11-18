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
    parfum: Object,
    modifier: Object
})

const form = useForm({
    name: props.parfum?.name,
    description: props.parfum?.description,
    type: props.parfum?.type,
    status: props.parfum?.status,
    modifier: props.modifier?.name
});

const submit = () => {
    Inertia.post(`/parfums/${props.parfum.id}`, {
        _method: "put",
        name: form.name,
        description: form.description,
        type: form.type,
        status: form.status,
    });
};
</script>

<template>

    <Head title="Edit Parfum" />

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
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus
                            autocomplete="name" />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="description" value="Description" />
                        <TextArea id="description" v-model="form.description" autofocus autocomplete="description" />
                        <InputError class="mt-2" :message="form.errors.description" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="type" value="Type" />
                        <select id="type" v-model="form.type" class="text-sm rounded-lg block w-full p-2.5 ">
                            <option :value="Soft">Soft</option>
                            <option :value="Medium">Medium</option>
                            <option :value="Neutral">Neutral</option>
                            <option :value="Hard">Hard</option>
                        </select>
                        <InputError class="mt-2" :message="form.errors.type" />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="status" value="Status" />
                        <select id="status" v-model="form.status" class="text-sm rounded-lg block w-full p-2.5 ">
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