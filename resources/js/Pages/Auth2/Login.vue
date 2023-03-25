<template>
    <div class="bg-slate-200 h-screen flex justify-center items-center">
        <div class="bg-white shadow p-10">
            <Transition>
                <div v-if="errorEmpty">
                    <FlashMessage estilo="Warning">Por favor ingrese todos los datos</FlashMessage>
                </div>
            </Transition>
            <Transition>
                <div v-if="$page.props.flash.message">
                    <FlashMessage
                    :estilo="$page.props.flash.message.estilo">{{ $page.props.flash.message.text }}</FlashMessage>
                </div>
            </Transition>
            <h2 class="text-s font-bold">Login</h2>
            <form @submit.prevent="doLogin" class="flex flex-col gap-2 mt-3">
                <div>
                    <label 
                        class="text-xs block text-gray-500"
                        for="email"
                    >
                        Email</label>
                    <input
                        class="border border-gray-900 w-full" 
                        type="text"
                        id="email"
                        v-model="data.email"
                        placeholder="Ingrese su email"
                    />
                </div>
                <div>
                    <label class="text-xs block text-gray-500">Password</label>
                    <input
                        class="border border-gray-900 w-full" 
                        type="password"
                        id="password"
                        v-model="data.password"
                        placeholder="Ingrese su contraseña"
                    />
                </div>
                <button class="w-full bg-blue-600 hover:bg-blue-800 transition-all text-white text-xs uppercase py-2">Ingresar</button>
            </form>
        </div>
    </div>
</template>

<script>
import FlashMessage from '../../Components/Otros/FlashMessage.vue';


export default{
    data(){
        return{
            errorEmpty: false,
            data: {
                email: "",
                password: ""
            },
        }
    },
    methods:{
        doLogin(){

            if(this.data.user === "" || this.data.password === ""){
                this.errorEmpty = true;
            }else{
                this.errorEmpty = false;
                this.$inertia.post("/login", this.data)
            }

        }
    },
    components:{
        FlashMessage
    }
}
</script>

<style scoped>
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