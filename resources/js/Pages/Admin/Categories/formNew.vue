<template>
    <AdminLayout>
        <template #title>
            <title>Editar Categoría</title>
        </template>
        <template #content>
            <Link href="/admin/categories">Volver al listado</Link> 
            <form @submit.prevent="createCategory">
                <div>
                    <label>Nombre</label>
                    <input 
                        type="text"
                        v-model="category.name"
                    />
                    {{ $page.props.errors.name }}
                </div>
                <button type="submit">Crear Categoria</button>
            </form>
        </template>
    </AdminLayout>
</template>

<script>
import AdminLayout from '../../../Layouts/AdminLayout.vue';
import { Link } from '@inertiajs/vue3';
export default{
    data(){
        return{
            category : {
                name: ''
            }
        }
    },
    methods:{
        createCategory(){
            // TODO VALIDACION

            this.$inertia.post('/admin/categories', this.category)
        }
    },
    components: {
        AdminLayout,
        Link
    }
}
</script>