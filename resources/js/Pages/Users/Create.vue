<script setup>
import { Head, useForm } from "@inertiajs/vue3";
import Layout from "@/Layouts/Layout.vue";

const form = useForm({
    name: null,
    email: null,
    password: null,
    position: null,
    status: null,
});

function submit() {
    form.post("/users");
}

defineOptions({
    layout: Layout,
});
</script>

<template>
    <Head>
        <title>Create User</title>
        <meta name="description" content="This is the Create User page" />
    </Head>

    <div class="container">
        <form @submit.prevent="submit" class="max-w-sm mx-auto">
            <div class="mb-5">
                <label
                    for="name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Name</label
                >
                <input
                    v-model="form.name"
                    type="text"
                    id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Rui Fernandes"
                />
                <div v-if="form.errors.name" class="text-red-500">
                    {{ form.errors.name }}
                </div>
            </div>
            <div class="mb-5">
                <label
                    for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Email</label
                >
                <input
                    v-model="form.email"
                    type="email"
                    id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="rui@gmail.com"
                />
                <div v-if="form.errors.email" class="text-red-500">
                    {{ form.errors.email }}
                </div>
            </div>
            <div class="mb-5">
                <label
                    for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Password</label
                >
                <input
                    v-model="form.password"
                    type="password"
                    id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />

                <div v-if="form.errors.password" class="text-red-500">
                    {{ form.errors.password }}
                </div>
            </div>
            <div class="mb-5">
                <label
                    for="position"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Position</label
                >
                <input
                    v-model="form.position"
                    type="text"
                    id="position"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Web Developer"
                />
                <div v-if="form.errors.position" class="text-red-500">
                    {{ form.errors.position }}
                </div>
            </div>
            <div class="mb-5">
                <label
                    for="status"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >Status</label
                >
                <select
                    v-model="form.status"
                    id="status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                    <option>active</option>
                    <option>inactive</option>
                </select>
                <div v-if="form.errors.status" class="text-red-500">
                    {{ form.errors.status }}
                </div>
            </div>
            <button
                :disabled="form.processing"
                type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
                Submit
            </button>
        </form>
    </div>
</template>

<style scoped></style>
