<template>
    <AdminLayout>
        <template #title>
            <title>Nuevo Tag</title>
        </template>
        <template #tituloh1>
            Crear Tag Nuevo
        </template>
        <template #content>
            <Link href="/admin/tags" class="text-gray-600  hover-text-gray-800 mb-5 inline-flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>
            Volver al listado</Link>

           
                
            <form @submit.prevent="crearTag" class="bg-white shadow p-5 flex flex-col gap-3">
                <div>
                    <label for="name" class="text-xs block mb-1">Nombre</label>
                    <input 
                        type="text"
                        id="name"
                        placeholder="Nombre del tag"
                        v-model="tag.name"
                        class="w-full py-1"
                    />
                    <span v-if="$page.props.errors.name" class="text-red-800 bg-red-300 w-full py-2 text-xs mt-1 block px-2">{{ $page.props.errors.name }}</span>
                </div>
                <button type="submit" class="bg-indigo-800 hover:bg-indigo-900 transition-all text-white py-2 uppercase">Crear Tag</button>
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