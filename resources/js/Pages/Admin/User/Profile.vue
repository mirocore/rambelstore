<template>
    <AdminLayout>
        <template #title>
            <title>Perfil</title>
        </template>

        <template #tituloh1>
            Datos de usuario
        </template>

        <template #content>

            <div class="bg-white grid grid-cols-2 p-5 mt-2 gap-5">
                <div class="col-span-2">
                    <div>
                        <label for="name">Nombre</label>
                        <input 
                            type="text"
                            class="w-full border-gray-300 text-gray-500"
                            v-model="user.name"
                        />
                    </div>
                </div>

                <div class="col-span-1">
                    <div>
                        <label for="name">Email</label>
                        <input 
                            type="email"
                            class="w-full border-gray-300 text-gray-500"
                            v-model="user.email"
                        />
                    </div>
                </div>

                <div class="col-span-1">
                    <div>
                        <label for="name">Password</label>
                        <input 
                            type="password"
                            class="w-full border-gray-300 text-gray-500"
                        />
                    </div>
                </div>

                <div class="col-span-2 flex justify-end">
                    <button class="bg-blue-800 text-white hover:bg-blue-900 px-5 py-2 transition-all">Editar datos</button>
                </div>
                
            </div>
        </template>
    </AdminLayout>
</template>

<script>
import AdminLayout from '../../../Layouts/AdminLayout.vue'


export default{
  components:{
    AdminLayout
  },
  props:['user']  
}
</script>
    