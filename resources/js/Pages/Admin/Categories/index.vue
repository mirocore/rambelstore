<template>
    
    <p>Categorias</p>
    <Link href="/admin/categories/create">Nuevo</Link>
    <div
    v-for="cat in categories"
    :key="cat.id"
    class="flex gap-5"
    >
    <p>{{ cat.name }}</p>
    <Link :href="`/admin/categories/edit/${cat.id}`">Editar</Link>
    <button @click="deleteCat(cat.id)">Borrar</button>
</div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default{
    props: ['categories'],
    components: {
        Link
    },
    methods: {
        deleteCat(id){
            // TODO CONFIRM

            this.$inertia.delete(`/admin/categories/${id}`);
        }
    }
}
</script>