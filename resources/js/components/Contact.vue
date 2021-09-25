<template>
    <div class="card-body">
        <div class="wrap">
            <div class="datos border-r">
                    Nombre: {{datos_json.name}} <br> Email: {{datos_json.email}}  <br> Tel: {{datos_json.phone}}
            </div>
            <div class="datos">
                    Recibido:  {{datos_json.created_at}} <br> Respondido:   <br> Ref:
            </div>
            <div class="msg">
                Mensaje: <br> {{datos_json.msg}}
            </div>
            <div class="actions">

                <h3 class="inline"><i class="bi bi-reply"></i></h3>
                <h4 class="inline" @click="deleteMsg(datos_json.id)" style="cursor:pointer"><i class="bi bi-trash"></i></h4>
            </div>
        </div>
    </div>
</template>

<script>
import Config from './../Config'
import axios from 'axios';
export default {
    props:['datos'],
    data(){
        return{

            datos_json:null
        }
    },
    created() {
        this.datos_json = JSON.parse(this.datos)
    },
    mounted() {
        // console.log(this.datos)
    },
    methods: {
        deleteMsg(id){
            axios.delete(`${Config.APP_URL}/v1/contact/${id}`)
                .then(res => {
                    if (res.data.status == true) {
                        window.location.reload();
                    }
                })
        }
    },
}
</script>

<style scoped>

</style>
