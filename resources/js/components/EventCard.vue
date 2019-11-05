<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card eventcard">
                    <div class="card-header">{{title}}</div>
                    <div class="card-body">{{description}}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['title', 'description'],
        mounted() {
            
        },
    }
</script>

<style>
    .eventcard{
        background-color: #74BFFF; 
    }
</style>