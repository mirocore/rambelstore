<template>
    <form @submit.prevent="editCategory">
        <div>
            <label>Nombre</label>
            <input 
                type="text"
                v-model="category.name"
            />
        {{ $page.props.errors.name }}
        </div>
        <button type="submit">Editar Categoria</button>
    </form>
</template>

<script>
export default{
    props: ['category'],
    methods:{
        editCategory(){
            // TODO VALIDACION

            this.$inertia.put(`/admin/categories/${this.category.id}`, this.category)
        }
    }
}
</script>