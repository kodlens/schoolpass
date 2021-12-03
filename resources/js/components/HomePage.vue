<template>
    <div>

        <section class="hero is-fullheight">
            <!-- Hero head: will stick at the top -->
            <div class="hero-head">
                <b-navbar>
                    <template #brand>
                        <img class ="logo"
                             src="/img/logo.png">
                    </template>


                    <template #start>
                        <b-navbar-item href="/">
                            Home
                        </b-navbar-item>
                        <b-navbar-item href="#">
                            About
                        </b-navbar-item>
                        <b-navbar-item href="#">
                            Contact
                        </b-navbar-item>

                    </template>

                    <template #end>
                        <b-navbar-item tag="div">
                            <div class="buttons">
                                <a class="button is-primary" href="/sign-up">
                                    <strong>Sign up</strong>
                                </a>
                                <a class="button is-light">
                                    Log in
                                </a>
                            </div>
                        </b-navbar-item>
                    </template>
                </b-navbar>
            </div>

            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
                <div class="container has-text-centered">
                    <p class="title">
                        GOV. ALFONSO D. TAN COLLEGE
                    </p>
                    <p class="subtitle">
                        SCHOOL PASS
                    </p>
                </div>
            </div>

            <!-- Hero footer: will stick at the bottom -->
            <div class="hero-foot">
<!--                <nav class="tabs is-boxed is-fullwidth">
                    <div class="container">
                        <ul>
                            <li class="is-active"><a>Overview</a></li>
                            <li><a>Modifiers</a></li>
                            <li><a>Grid</a></li>
                            <li><a>Elements</a></li>
                            <li><a>Components</a></li>
                            <li><a>Layout</a></li>
                        </ul>
                    </div>
                </nav>-->
            </div>
        </section>

        <section>
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <div class="time-container">

                        <div class="reserve-control p-2">
                            <b-field label="SELECT DATE" grouped  expanded class="is-centered" label-position="on-border">
                                <b-datetimepicker rounded expanded
                                      placeholder="Type or select a date..."
                                      icon="calendar-today"
                                      :locale="locale"
                                      editable>
                                </b-datetimepicker>
                                <p class="control">
                                    <b-button class="button is-primary is-rounded">APPOINT NOW</b-button>
                                </p>
                            </b-field>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <section>
            <div class="mission-section">
                <div class="mission-wrapper">
                    <div class="mission-title">
                        <h2>
                            <span>&#8220;</span>
                            MISSION
                            <span>&#8220;</span>
                        </h2>
                    </div>
                    <div>
                        <p style="text-align: justify;">
                            To provide opportunities for continuing education for faculty and staff,
                            providing upgraded facilities for quality and research-based instruction to students towards community engagement and linkages to industry.
                        </p>
                    </div>
                </div>

                <div class="mission-img">
                    <img src="/img/gadtc.png" />
                </div>
            </div> <!-- mission section -->
        </section>

        <section>
            <div class="vision-section">
                <div class="vision-img">
                    <img src="/img/facilities.jpg">
                </div>
                <div class="vision-wrapper">
                    <div class="vision-title">
                        <h2>
                            <span>&#8220;</span>
                            VISION
                            <span>&#8220;</span>
                        </h2>
                    </div>
                    <div>
                        <p>
                            To provide opportunities for continuing education for faculty and staff,
                            providing upgraded facilities for quality and research-based instruction to students towards community engagement and linkages to industry.
                        </p>
                    </div>
                </div>

            </div>

        </section>



    </div> <!--root div-->
</template>

<script>
export default {
    data(){
        return{
            locale: undefined,
        }
    }
}
</script>

<style scoped>
    .navbar{
        height: 80px;
    }
    .navbar > .navbar-menu > .navbar-start > .navbar-item{
        color: white;
        font-weight: bold;
        transition: 0.5s;
    }
    .navbar > .navbar-menu > .navbar-start > .navbar-item:hover{
        background-color: transparent;
        border-bottom: 3px solid blue;
    }
    .navbar > .navbar-menu > .navbar-start > .navbar-item > .navbar-link:hover{
        border-bottom: 3px solid blue;
    }


    .hero{
        background-image: url("/img/bg-hero.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .hero-body > .container > .title{
        color: white;
        font-size: 3em;
    }
    .hero-body > .container > .subtitle{
        color: white;
        font-size: 2em;
    }

    .time-container{
        position: relative;
        top: -50px;
        z-index: 100;
        padding: 15px;
        background: white;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

    }

    .reserve-control{
        margin: auto;
    }


    .mission-title{
        font-size: 1.5em;
    }
    .mission-wrapper{
        max-width: 640px;
        font-size: 1.5em;
        margin: auto;
    }
    .mission-section{
        display: flex;
        justify-content: center;
    }
    .mission-img{
        margin: auto;
    }
    .mission-section > div{
        margin: 15px;
    }


    .vision-section{
        margin-top: 50px;
        display: flex;
        justify-content: center;
    }
    .vision-title{
        font-size: 1.5em;
    }
    .vision-wrapper{
        max-width: 640px;
        font-size: 1.5em;
        margin: auto;
    }
    .vision-img{
        margin: auto;
    }
    .vision-section > div{
        margin: 15px;
    }

    @media only screen and (max-width: 940px) {
        .vision-section{
            flex-direction: column;
            align-items: center;
        }

        .mission-section{
            flex-direction: column;
            align-items: center;
        }

    }


</style>
