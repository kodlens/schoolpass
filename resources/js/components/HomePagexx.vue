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
                            <p class="control">
                                <b-button class="button is-primary">APPOINT NOW</b-button>
                            </p>
                        </b-field>
                    </div>
                </div>
            </div>

        </section>


            <section>

                <div class="columns">
                    <div class="column">
                        <h2>MISSION</h2>
                        <p>
                            To provide opportunities for continuing education for faculty and staff,
                            providing upgraded facilities for quality and research-based instruction to students towards community engagement and linkages to industry.
                        </p>
                    </div>
                    <div class="column">
                        <img src="/img/gadtc.png">
                    </div>

                </div>



                <h2>VISION</h2>
                <p>GADTC is integral to Tangub
						City’s becoming a center for learning and eco-cultural tourism by producing God-centered citizens committed to be <b>THE LIGHT OF THE WORLD.</b></p>

                        <img src="/img/facilities.jpg">
            </section>

            <section>

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
                { imgSrc: '/img/banner_4.jpg'   },
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
