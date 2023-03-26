<template>
    <AdminLayout>

        <template #title>
            <title>Tags</title>
        </template>

        <template #tituloh1>
            Listado de Tags
        </template>

        <template #content>
            <div class="mb-5 flex justify-end items-center">
                <Link href="/admin/tags/create" class="text-xs font-bold uppercase bg-green-500 text-white hover:bg-green-800 transition-all py-2 px-3 inline-block">Nuevo Tag</Link>
            </div>
            <div class="bg-white">
                <TagItem
                    v-for="tag in tags"
                    :key="tag.id"
                    :tag="tag"
                >
                </TagItem>
            </div>
        </template>


    </AdminLayout>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import TagItem from '../../../Components/Otros/TagItem.vue';
import AdminLayout from '../../../Layouts/AdminLayout.vue';


export default{
    props:["tags"],
    components:{
        Link,
        AdminLayout,
        TagItem
    },
}
</script>