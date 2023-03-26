<template>
    <AdminLayout>

        <template #title>
            <title>Editar Categoría</title>
        </template>

        <template #tituloh1>
            Editar categoría
        </template>

        <template #content>
            <Link href="/admin/categories" class="text-gray-600  hover-text-gray-800 mb-5 inline-flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>
            Volver al listado</Link>

            <form @submit.prevent="editCategory" class="bg-white shadow p-5 flex flex-col gap-3">
                <div>
                    <label for="name" class="text-xs block mb-1">Nombre</label>
                    <input 
                        type="text"
                        v-model="category.name"
                        id="name"
                        placeholder="Nombre de la categoría"
                        class="w-full py-1"
                    />
                    <span v-if="$page.props.errors.name" class="text-red-800 bg-red-300 w-full py-2 text-xs mt-1 block px-2">{{ $page.props.errors.name }}</span>
                </div>
                <button type="submit" class="bg-indigo-800 hover:bg-indigo-900 transition-all text-white py-2 uppercase">Editar Categoria</button>
            </form>
        </template>
    </AdminLayout>
</template>

<script>
import AdminLayout from '../../../Layouts/AdminLayout.vue';
import { Link } from '@inertiajs/vue3';
export default{
    props: ['category'],
    methods:{
        editCategory(){
            // TODO VALIDACION

            this.$inertia.put(`/admin/categories/${this.category.id}`, this.category)
        }
    },
    components: {
        AdminLayout,
        Link
    }
}
</script>