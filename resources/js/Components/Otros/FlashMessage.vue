<template>
        <div :class="estiloAviso" class="mb-2 py-3 px-2 shadow flex gap-2 items-center">
            
            <svg v-if="estilo == 'Success'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-inherit">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            
            <svg v-if="estilo == 'Error'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-inherit">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            
            <svg v-if="estilo == 'Warning'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-inherit">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>
            
            <svg v-if="estilo == 'Info'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-inherit">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>
            <span class="text-xs">
                <slot></slot>
            </span>
        </div>
</template>

<script>
export default{
    props:{
        estilo: {
            type: String,
            default: "Info"
        }
    },
    computed:{
        estiloAviso(){
            switch(this.estilo){
                case "Success":
                    return "bg-green-500 text-white";
                break;
                case "Warning":
                    return "bg-orange-500 text-white";
                break;
                case "Error":
                    return "bg-red-500 text-white";
                break;
                case "Info":
                    return "bg-blue-500 text-white"
                break;
                default:
                    return "bg-blue-500 text-white"
            }
        }
    }
}
</script>

