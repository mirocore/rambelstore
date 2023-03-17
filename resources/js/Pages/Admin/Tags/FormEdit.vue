<template>
    <Link href="/admin/tags">Volver al listado</Link>
    
    <form @submit.prevent="editTag">
        <div>
            <label>Nombre</label>
            <input 
                type="text"
                v-model="tag.name"
            />
        </div>
        <button type="submit">Edit Tag</button>
    </form>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default{
    components:{
        Link,
    },
    props:['tag'],
    methods:{
        editTag(){
            // TODO VALIDACION

            this.$inertia.put(`/admin/tags/${this.tag.id}`, this.tag);
        }
    }

}
</script>