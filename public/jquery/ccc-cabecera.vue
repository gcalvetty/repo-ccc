<template>       
        <div class="panel-heading">{{titulo}} {{nombre}}</div>
</template>

<script>
    export default {
        props:['titulo','nombre'],
        ready() {
            console.log('Component ready.') 
        }
    }
</script>
