<template>
    <AdminLayout>
        <template #title>
            <title>Editar Tag</title>
        </template>
        <template #content>
            <Link href="/admin/tags">Volver al listado</Link>
            
            <form @submit.prevent="editTag">
                <div>
                    <label>Nombre</label>
                    <input 
                    type="text"
                    v-model="tag.name"
                    />
                </div>
                <button type="submit">Edit Tag</button>
                <div>{{ $page.props.errors.name }}</div>
            </form>
        </template>

    </AdminLayout>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import AdminLayout from '../../../Layouts/AdminLayout.vue';


export default{
    components:{
        Link,
        AdminLayout
    },
    props:['tag'],
    methods:{
        editTag(){
            // TODO VALIDACION

            this.$inertia.put(`/admin/tags/${this.tag.id}`, this.tag);
        }
    }

}
</script>