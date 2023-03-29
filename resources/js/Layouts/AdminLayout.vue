<template>
    <Head>
        <slot name="title"></slot>
    </Head>

    <div class="md:grid grid-cols-12">
        <Sidebar/>

        <div class="col-span-12 md:col-span-10  bg-indigo-100">
            <div class="bg-slate-600 text-white p-3 flex justify-end items-center gap-2 cursor-pointer header-content">
                <div v-if="$page.props.auth.user" class="text-xs flex items-center gap-2">Ramiro Belcore
                    <Dropdown>
                        <template #trigger>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M3 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 5.25zm0 4.5A.75.75 0 013.75 9h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 9.75zm0 4.5a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75zm0 4.5a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </template>
                        <template #content>
                            <ul class="text-slate-900 text-xs">
                                <li class="p-2">Ver perfil</li>
                                <li class="p-2" @click="cerrarSesion">Cerrar sesión</li>
                            </ul>
                        </template>
                    </Dropdown>
                </div>
                <div v-else>
                    <Link href="/admin/login" class="bg-blue-600 text-xs py-1 px-3 hover:bg-blue-800 transition-all">Login</Link>
                </div>
            </div>

            <div class="p-5 overflow-y-auto espacio-contenido">
                <Transition>
                    <div v-if="$page.props.flash.message">
                        <FlashMessage
                            :estilo="$page.props.flash.message.estilo">{{ $page.props.flash.message.text }}</FlashMessage>
                    </div>
                </Transition>
                
                <h1 class="text-2xl font-bold mt-5 text-slate-500 border-b border-gray-200 pb-2">
                    <slot name="tituloh1"></slot>
                </h1>

                <slot name="content">
                </slot>
            </div>
        </div>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/vue3';
import Sidebar from '../Components/Otros/Sidebar.vue';
import Dropdown from '@/Components/Dropdown.vue';
import FlashMessage from '@/Components/Otros/FlashMessage.vue';


export default{
    components: {
        Head,
        Sidebar,
        Dropdown,
        Link,
        FlashMessage
    },
    methods: {
        cerrarSesion(){
            // TODO CONFIRM

            this.$inertia.post("/logout");
        }
    }
}
</script>

<style scoped>

.header-content{
    height:50px;
}

.espacio-contenido{
    height: calc(100vh - 50px);
}

.v-enter-active,
.v-leave-active {
  transition: all .5s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
  right:-3rem
}
</style>