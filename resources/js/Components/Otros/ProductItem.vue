<template>
        <div class="md:grid md:grid-cols-12 bg-white border-y border-indigo-200">
            <div class="md:col-span-3 p-3">
                <span>{{ product.name }}</span>
            </div>
            <div class="md:col-span-3 p-3 capitalize">
                <span>{{ product.category.name }}</span>
            </div>
            <div class="md:col-span-3 p-3 capitalize">
                <span>${{ product.price }}</span>
            </div>
            <div class="md:col-span-3 md:flex md:justify-center md:items-center md:gap-3">
                <Link :href="'/admin/products/edit/' + product.id">Editar</Link>
                <button @click="deleteProduct(product.id)">Borrar</button>
            </div>
        </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default{
    props:["product"],
    methods:{
        deleteProduct(){
            // TODO CONFIRM
            let rta = confirm("Está seguro?");
            
            // ENVIO PETICION
            if(rta){
                this.$inertia.delete(`/admin/products/${this.product.id}`);
            }
        }
    },
    components:{
        Link
    }
}
</script>