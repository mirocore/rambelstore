<template>
    <AdminLayout>
        <template #title>
            <title>Nuevo Producto</title>
        </template>
        <template #tituloh1>
            Crear Producto Nuevo
        </template>
        <template #content>

        
            <Link href="/admin/products" class="text-gray-600  hover-text-gray-800 mb-5 inline-flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>
            Volver al listado
            </Link>


            <form @submit.prevent="createProduct" class="bg-white shadow p-5 flex flex-col gap-3">
    
                <!-- NOMBRE -->
                <div>
                    <label for="name">Nombre</label>
                    <input 
                        type="text"
                        v-model="product.name"
                        id="name"
                        placeholder="Nombre del producto"
                        class="w-full py-1"
                    />
                    <div v-if="$page.props.errors.name" class="text-red-800 bg-red-300 w-full py-2 text-xs mt-1 block px-2">{{ $page.props.errors.name }}</div>
                </div>
    
                <!-- DESCRIPCION -->
                <div>
                    <label for="description">Descripción</label>
                    <textarea v-model="product.description" id="description" placeholder="Descripción del producto" 
                        class="w-full py-1"></textarea>
                </div>
    
                <!-- PRECIO Y PROMO -->
                <div class="md:grid md:grid-cols-2 md:gap-5">
                    <!-- PRECIO -->
                    <div>
                        <label for="price">Precio</label>
                        <input 
                            type="number"
                            id="price"
                            v-model="product.price"
                            class="w-full py-1"
                        />
                        <div v-if="$page.props.errors.price" class="text-red-800 bg-red-300 w-full py-2 text-xs mt-1 block px-2">{{ $page.props.errors.price }}</div>
                    </div>

                    <!-- PRECIO PROMO -->
                    <div>
                        <label for="promo">Promo</label>
                        <input 
                            type="number"
                            id="promo"
                            v-model="product.promo"
                            class="w-full py-1"
                        />
                    </div>
                </div>
                
                <!-- ESTADO - DESTACADO - CATEGORÍA -->
                <div CLASS="md:grid md:grid-cols-3 md:gap-5">
                    <!-- ESTADO -->
                    <div>
                        <label for="state">Estado</label>
                        <select
                            id="state"
                            v-model="product.state"
                            class="block w-full"
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
                            class="block w-full"
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
                            class="block w-full"
                        >
                            <option value="">Seleccionar Categoría</option>
                            <option v-for="category in categories" :value="category.id" :key="category.id">{{ category.name }}</option>
                        </select>
                        <div v-if="$page.props.errors.id_category" class="text-red-800 bg-red-300 w-full py-2 text-xs mt-1 block px-2">{{ $page.props.errors.id_category }}</div>
                    </div>
                </div>
    
                <!-- IMAGENES -->
    
                <!-- SUBMIT -->
                <button type="submit" class="bg-indigo-800 hover:bg-indigo-900 transition-all text-white py-2 uppercase">Crear producto</button>
            </form>


        </template>
    </AdminLayout>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import AdminLayout from '../../../Layouts/AdminLayout.vue';


export default {
   props:["categories"],
   components:{
        Link,
        AdminLayout
   },
   data(){
        return{
            product : {
                name: "",
                description: "",
                price: "",
                promo: "",
                state: 1,
                important: 0,
                id_category: ""
            }
        }
    },
    methods: {
        createProduct(){
            // TODO VALIDATION

            // ENVIAR REGISTRO
            this.$inertia.post("/admin/products", this.product);
        }
    }
}
</script>