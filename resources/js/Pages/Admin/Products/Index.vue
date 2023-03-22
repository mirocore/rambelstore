<template>
    <AdminLayout>
        <template #title>
            <title>Listado Productos</title>
        </template>
        <template #content>
            <h1>Productos</h1>

            <Link href="/admin/products/create">Nuevo</Link>

            <div>
                <div
                v-for="product in products"
                :key="product.id"
                >
                    <span>{{ product.name }}</span>
                    <Link :href="'/admin/products/edit/' + product.id">Editar</Link>
                    <button @click="deleteProduct(product.id)">Borrar</button>
                </div>
            </div>
        </template>
        
    </AdminLayout>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import AdminLayout from '../../../Layouts/AdminLayout.vue';


export default{
    props: ['products'],
    components: {
        Link,
        AdminLayout
    },
    methods:{
        deleteProduct(id){
            // TODO CONFIRM
            let rta = confirm("Está seguro?");
            
            // ENVIO PETICION
            if(rta){
                this.$inertia.delete(`/admin/products/${id}`);
            }
        }
    }
}
</script>
