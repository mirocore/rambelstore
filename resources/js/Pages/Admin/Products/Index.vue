<template>
    <h1>Productos</h1>

    <Link href="/admin/products/create">Nuevo</Link>
    
    <div>
        <div
        v-for="product in products"
        :key="product.id"
        >{{ product.name }}</div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default{
    props: ['products'],
    components: {
        Link
    }
}
</script>
