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
                       <img :src="carousel.imgSrc" /> 
                        <div class="hero-body has-text-centered">     
                            <h1 class="title">{{carousel.title}}</h1>
                             
                        </div>
                    </section>
                </b-carousel-item>
            </b-carousel>
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
                {  imgSrc:'/img/images1.jpg'},
                { imgSrc:'/img/images2.jpg'   },
                { imgSrc:'/img/images3.jpg' },
                { imgSrc:'/img/images4.jpg' }
            ]
        }
    }
}
</script>