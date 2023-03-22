<template>
    <Link href="/admin/tags/create">Nuevo</Link>
    <div
    v-for="tag in tags"
    :key="tag.id"
    class="flex items-center gap-10"
    >
        <span>{{ tag.name }}</span>
        <Link :href="`/admin/tags/edit/${tag.id}`">Editar</Link>
        <button @click="deleteTag(tag.id)">Borrar</button>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import AdminLayout from '../../../Layouts/AdminLayout.vue';

export default{
    props:["tags"],
    components:{
        Link,
        AdminLayout
    },
    methods:{
        deleteTag(id){
           // TODO VALIDATION
           
           this.$inertia.delete(`/admin/tags/${id}`);
        }
    }
}
</script>