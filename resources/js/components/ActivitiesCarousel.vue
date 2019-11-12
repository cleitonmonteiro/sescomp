<template>
    <Carousel>
        <Slide v-for="item in activitiesJson" :key="item.id">
            

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        {{item.id}}
                    </div>
                    <div class="row">
                        {{item.name}}
                    </div>
                    <div class="row">
                        {{item.hours}}
                    </div>
                    <div>
                        <a :href="readNews(item.id)" type="submit">teste</a>
                    </div>
                </div>
            </div>

        </Slide>
    </Carousel>
</template>

<script>
    import {Carousel, Slide} from 'vue-carousel';

export default {
    props:['activities'],
    components: {
        Carousel,
        Slide
    },

    data: function() {
            return{
                activitiesJson: {},
            } 
        },
    mounted(){
        this.activitiesJson = JSON.parse(this.activities);
    },
    methods: {
        readNews(id){
            return '/sub/activities' + '/' + id;
        }
    }


}

</script>

<style>

</style>