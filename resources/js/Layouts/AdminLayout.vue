<template>
    <Head>
        <slot name="title"></slot>
    </Head>

    <div class="md:grid grid-cols-12 h-screen">
        <Sidebar/>

        <div class="col-span-12 md:col-span-10  overflow-y-auto p-5">
            <slot name="content"></slot>
        </div>
    </div>
</template>

<script>
import { Head } from '@inertiajs/vue3';
import Sidebar from '../Components/Otros/Sidebar.vue';


export default{
    components: {
        Head,
        Sidebar
    }
}
</script>