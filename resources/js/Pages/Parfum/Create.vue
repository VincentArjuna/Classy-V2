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
    description: '',
    type: 'Soft',
});

const submit = () => {
    console.log(form);
    form.post(route('parfums.store'));
};
</script>

<template>

    <Head title="New Parfum" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New Parfum
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
                            <option value="Soft">Soft</option>
                            <option value="Medium">Medium</option>
                            <option value="Neutral">Neutral</option>
                            <option value="Hard">Hard</option>
                        </select>
                        <InputError class="mt-2" :message="form.errors.type" />
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