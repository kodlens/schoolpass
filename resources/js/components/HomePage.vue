<template>
    <div>

        <section>
        

            <b-carousel
                :arrow="arrow"
                :repeat="arrowBoth"
                :arrow-hover="arrowHover"
                :icon-pack="iconPack"
                :icon-prev="iconPrev"
                :icon-next="iconNext"
                :icon-size="iconSize">
                <b-carousel-item v-for="(carousel, i) in carousels" :key="i">
                    <section :class="`hero is-medium is-${carousel.color}`">     
                        <!-- <img :src="carousel.imgSrc" /> 
                        <div class="hero-body has-text-centered">     
                            <h1 class="title">{{carousel.title}}</h1>
                             
                        </div> -->
                        <a class="image">
                            <img :src="carousel.imgSrc" /> 
                        </a>
                    </section>
                </b-carousel-item>
            </b-carousel>
        </section>

        <section>
            <div class="columns">
                <div class="column is-4 is-offset-4">
                    <div class="time-container">
                        <b-field label="SELECT DATE">
                            <b-datetimepicker
                                placeholder="Type or select a date..."
                                icon="calendar-today"
                                :locale="locale"
                                editable>
                            </b-datetimepicker>
                        </b-field>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>


<script>
export default {
    data() {
        return {
            arrow: true,
            arrowBoth: false,
            arrowHover: false,
            iconPack: 'mdi',
            iconPrev: 'arrow-left',
            iconNext: 'arrow-right',
            iconSize: '',
            carousels: [
                { imgSrc: '/img/banner_1.jpg'},
                { imgSrc: '/img/banner_2.jpg'   },
                { imgSrc: '/img/banner_3.jpg'   },
            ],

            locale: undefined ,
            
        }
    }
}
</script>


<style scoped>
    .time-container{
        padding: 30px 15px 30px 15px;
    }
</style>