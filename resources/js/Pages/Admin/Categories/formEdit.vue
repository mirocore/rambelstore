<template>
    <AdminLayout>
        <template #title>
            <title>Editar Categoría</title>
        </template>
        <template #content>
            <Link href="/admin/categories">Volver al listado</Link>
            <form @submit.prevent="editCategory">
                <div>
                    <label>Nombre</label>
                    <input 
                        type="text"
                        v-model="category.name"
                    />
                {{ $page.props.errors.name }}
                </div>
                <button type="submit">Editar Categoria</button>
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