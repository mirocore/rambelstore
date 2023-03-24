<template>
    <div class="bg-slate-200 h-screen flex justify-center items-center">
        <div class="bg-white shadow p-5">
            <h2 class="text-xs">Login</h2>
            <form @submit.prevent="doLogin" class="flex flex-col gap-2 mt-3">
                <div>
                    <label 
                        class="text-xs block text-gray-500"
                        for="email"
                    >
                        Email</label>
                    <input
                        class="border border-gray-900" 
                        type="text"
                        id="email"
                        v-model="data.email"
                        placeholder="Ingrese su email"
                    />
                </div>
                <div>
                    <label class="text-xs block text-gray-500">Password</label>
                    <input
                        class="border border-gray-900" 
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
export default{
    data(){
        return{
            data: {
                user: "",
                password: ""
            }
        }
    },
    methods:{
        doLogin(){
            this.$inertia.post("/login", this.data)
        }
    }
}
</script>