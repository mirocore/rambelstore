<template>
    <form @submit.prevent="createCategory">
        <div>
            <label>Nombre</label>
            <input 
                type="text"
                v-model="category.name"
            />
        </div>
        <button type="submit">Crear Categoria</button>
    </form>
</template>

<script>
export default{
    data(){
        return{
            category : {
                name: ''
            }
        }
    },
    methods:{
        createCategory(){
            // TODO VALIDACION

            this.$inertia.post('/admin/categories', this.category)
        }
    }
}
</script>