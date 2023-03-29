<template>
    <AdminLayout>
        <template #title>
            <title>Productos</title>
        </template>

        <template #tituloh1>
            Listado de Productos
        </template>
        <template #content>

            <div class="mb-5 flex justify-end items-center">
                <Link href="/admin/products/create" class="text-xs font-bold uppercase bg-green-500 text-white hover:bg-green-800 transition-all py-2 px-3 inline-block">Producto nuevo</Link>
            </div>

            <div>
                <ProductItem
                    v-for="product in products"
                    :key="product.id"
                    :product="product"
                />
            </div>
        </template>
        
    </AdminLayout>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import ProductItem from '../../../Components/Otros/ProductItem.vue';
import AdminLayout from '../../../Layouts/AdminLayout.vue';


export default{
    props: ['products'],
    components: {
        Link,
        AdminLayout,
        ProductItem
    },
}
</script>
