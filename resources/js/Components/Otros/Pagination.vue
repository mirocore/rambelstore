<template>
    <div class="flex justify-between items-center mt-3">
        <div>
            Página {{ products.current_page }} de {{ products.last_page }} | Resultados {{ products.to }} de {{ products.total }}
        </div>
        <nav>
            <ul class="flex gap-2 items-center m-0 p-0">
                <li>
                    <Link v-if="products.prev_page_url" :href="products.prev_page_url" class="text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </Link>
                </li>
                <li v-for="link in linksPaginador" :key="link.label">
                    <Link :class="link.active ? 'bg-indigo-500 text-white' : 'bg-white' " :href="link.url" class="border border-indigo-400 w-10 h-10 inline-flex justify-center items-center hover:bg-indigo-500 hover:text-white transition-all">{{ link.label }}</Link> 
                </li>
                <li>
                    <Link v-if="products.next_page_url" :href="products.next_page_url" class="text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </Link>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default{
    components:{
        Link
    },
    props: ['products'],
    computed:{
        linksPaginador(){
            let links = this.products.links;
            links.shift();
            links.pop();
            return links;
        }
    },
}
</script>