<template>
    <AdminLayout>
        <template #title>
            <title>Nuevo Tag</title>
        </template>
        <template #content>
            <Link href="/admin/tags">Volver al listado</Link>
                
            <form @submit.prevent="crearTag">
                <div>
                    <label>Nombre</label>
                    <input 
                    type="text"
                    v-model="tag.name"
                    />
                    <div>{{ $page.props.errors.name }}</div>
                </div>
                <button type="submit">Crear Tag</button>
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
    data(){
        return{
            tag:{
                name: ""
            }
        }
    },
    methods:{
        crearTag(){
            // TODO VALIDACION

            this.$inertia.post('/admin/tags', this.tag);
        }
    }

}
</script>