<template>
    <div>
        <Link href="/admin/products">Volver al listado</Link>
        <h1>Editar producto</h1>
        <form @submit.prevent="editProduct">

            <!-- NOMBRE -->
            <div>
                <label for="name">Nombre</label>
                <input 
                    type="text"
                    v-model="product.name"
                    id="name"
                    placeholder="Nombre del producto"
                />
                <div>{{ $page.props.errors.name }}</div>
            </div>

            <!-- DESCRIPCION -->
            <div>
                <label for="description">Descripción</label>
                <textarea v-model="product.description" id="description" placeholder="Descripción del producto"></textarea>
            </div>

            <!-- PRECIO -->
            <div>
                <label for="price">Precio</label>
                <input 
                    type="number"
                    id="price"
                    v-model="product.price"
                />
                <div>{{ $page.props.errors.price }}</div>
            </div>

            <!-- PRECIO PROMO -->
            <div>
                <label for="promo">Promo</label>
                <input 
                    type="number"
                    id="promo"
                    v-model="product.promo"
                />
            </div>

            <!-- ESTADO -->
            <div>
                <label for="state">Estado</label>
                <select
                    id="state"
                    v-model="product.state"
                >
                    <option value="1">Mostrar</option>
                    <option value="0">Ocultar</option>
                </select>
            </div>

            <!-- DESTACADO -->
            <div>
                <label for="important">Destacado</label>
                <select
                    id="important"
                    v-model="product.important"
                >
                    <option value="1">Destacado</option>
                    <option value="0">Sin destacar</option>
                </select>
            </div>

            <!-- CATEGORIA -->
            <div>
                <label for="id_category">Categoría</label>
                <select
                    id="id_category"
                    v-model="product.id_category"
                >
                    <option value="">Seleccionar Categoría</option>
                    <option v-for="category in categories" :value="category.id" :key="category.id">{{ category.name }}</option>
                </select>
                <div>{{ $page.props.errors.id_category }}</div>
            </div>

            <!-- SUBMIT -->
            <button type="submit">Editar producto</button>
        </form>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";


export default {
   props:["categories", "product"],
   components:{
        Link
   },
    methods: {
        editProduct(){
            // TODO VALIDATION

            // ENVIAR REGISTRO
            this.$inertia.put(`/admin/products/${this.product.id}`, this.product);
        }
    }
}
</script>