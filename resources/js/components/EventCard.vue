<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{name}}</div>

                    <div class="card-body">
                        {{description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['name', 'description'],
        mounted() {
        }
    }
</script>
