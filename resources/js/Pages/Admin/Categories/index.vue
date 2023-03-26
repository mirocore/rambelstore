<template>
    <AdminLayout>
    
    <template #title>
        <title>Categorías</title>
    </template>

    <template #tituloh1>
            Listado de categorías
        </template>

    <template #content>
        <div class="mb-5 flex justify-end items-center">
                <Link href="/admin/categories/create" class="text-xs font-bold uppercase bg-green-500 text-white hover:bg-green-800 transition-all py-2 px-3 inline-block">Nueva Categoría</Link>
        </div>
        <div class="bg-white">
            <CategoryItem
                    v-for="category in categories"
                    :key="category.id"
                    :category="category"
                >
            </CategoryItem>
        </div>
        
    </template>

    </AdminLayout>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import CategoryItem from '../../../Components/Otros/CategoryItem.vue';
import AdminLayout from '../../../Layouts/AdminLayout.vue';

export default{
    props: ['categories'],
    components: {
        Link,
        AdminLayout,
        CategoryItem
    },
    methods: {
        deleteCat(id){
            // TODO CONFIRM

            this.$inertia.delete(`/admin/categories/${id}`);
        }
    }
}
</script>