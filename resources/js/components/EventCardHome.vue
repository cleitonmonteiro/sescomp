<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{eventJson.name}}</div>

                    <div class="card-body">
                        {{eventJson.description}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['event'],
        data: function() {
            return{
                eventJson: {},
            } 
        },

        mounted() {
            this.eventJson = JSON.parse(this.event);
        }
    }
</script>
