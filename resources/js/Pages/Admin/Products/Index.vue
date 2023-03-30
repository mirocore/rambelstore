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
                    v-for="product in products.data"
                    :key="product.id"
                    :product="product"
                />
            </div>
            <Pagination 
                :products="$page.props.products"
            />

        </template>
        
    </AdminLayout>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import AdminLayout from '../../../Layouts/AdminLayout.vue';
import Pagination from '../../../Components/Otros/Pagination.vue';
import ProductItem from '../../../Components/Otros/ProductItem.vue';


export default{
    props: ['products'],
    components: {
        Link,
        AdminLayout,
        ProductItem,
        Pagination
    },
    created(){
        console.log(this.$page.props)
    }
}
</script>
