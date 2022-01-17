<template>
    <div>

        <section class="hero is-fullheight">
            <!-- Hero head: will stick at the top -->
            <div class="hero-head">
                <b-navbar>
                    <template #brand>
                        <img class ="logo"
                             src="/img/logogadtc.png">
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
                                <a class="button is-light" @click="isModalActive = true">
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
                    <p class="title animate__animated animate__backInLeft">
                        GOV. ALFONSO D. TAN COLLEGE
                    </p>
                    <p class="subtitle animate__animated animate__backInRight ">
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
                            <h1 class="title is-4 mb-4">APPOINT NOW</h1>
                            <b-field label="SELECT DATE" grouped  expanded class="is-centered" label-position="on-border">
                                <b-datetimepicker rounded expanded
                                      placeholder="Type or select a date..."
                                      icon="calendar-today"
                                      :locale="locale"
                                      editable>
                                </b-datetimepicker>
                            </b-field>
                            <b-field label="APPOINTMENT" expanded label-position="on-border">
                                <b-select v-model="appointment_type" expanded rounded>
                                    <option v-for="(item, index) in appointmentTypes" :key="index" :value="item.appointment_type_id">{{ item.appointment_type }}</option>
                                </b-select>
                            </b-field>
                            <div class="buttons is-right">
                                <b-button class="button is-primary is-rounded">APPOINT NOW</b-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section">
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

        <section class="section">
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

        <section>
            <div style="background-color: #1d6530; padding: 30px; margin: 20px 0 20px 0; text-align: center;">
                <div class="title" style="color: white;">
                    COVID-19 SAFETY TIPS
                </div>
                <div class="subtitle" style="color: white;">
                    Help prevent the prevent the spread of respiratory disease like COVID-19
                </div>
            </div>
            <div class="columns">
                <div class="column is-10 is-offset-1">

                    <div class="columns">

                        <div class="column">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3 class="title">WEAR FACEMASK</h3>
                                    <p> Everyone must wear mask </p>
                                    <img src="/img/mask.png" />
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3 class="title">WASH YOUR HANDS</h3>
                                    <p>Wash your hands frequently with soap and water</p>
                                    <img src="/img/hands.png" />
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3>DON'T TOUCH</h3>
                                    <p> Do not touch your eyes with dirty hands</p>
                                    <img src="/img/touch.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column is-4">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3>COVER A COUGH OR SNEEZE</h3>
                                    <p>use tissue when cough/ sneeze</p>
                                    <img src="/img/tissue.png">
                                </div>
                            </div>
                        </div>

                        <div class="column is-4">
                            <div class="panel">
                                <div class="panel-body">
                                    <h3 class="title">KEEP YOUR DISTANCE</h3>
                                    <p>Avoid close contact with poeple wwho are sick.</p>
                                    <img src="/img/dist.png" >
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section>
            <div class="footer" style="margin-top: 30px; background-color: #5a9669; color:white;">
                <div class = "columns">
                    <div class="column">
                        <div class="footertwo-logo-wrapper">
                            <img class="footer-logo" src="/img/gadtclogo.png">
                        </div>
                    </div>

                    <div class = "column">
                        <div class="p-5">
                            <div class="footer-component-title">
                               Quick Links
                            </div>
                            <div>
                              Home
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="p-5">
                            <div class="footer-component-title">
                                 Address
                            </div>
                             <div>
                                Juan Luna St.
                                Maloro, Tangub City
                                Misamis Occidental
                                Philippines
                            </div>
                        </div>
                    </div>
                     <div class="column">
                        <div class="p-5">
                            <div class="footer-component-title">
                                 Address
                            </div>
                             <div>
                                Juan Luna St.
                                Maloro, Tangub City
                                Misamis Occidental
                                Philippines
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--modal-->
        <b-modal v-model="isModalActive" has-modal-card
                 trap-focus width="640" aria-role="dialog" aria-modal>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Login</p>
                    <button type="button" class="delete"
                            @click="isModalActive = false"/>
                </header>

                <section class="modal-card-body">
                    <div>
                        <form @submit.prevent="submit">
                            <b-field label="Username"
                                 label-position="on-border"
                                 :type="errors.username ? 'is-danger' : ''"
                                 :message="errors.username ? errors.username[0] : ''">
                            <b-input type="text" v-model="fields.username" placeholder="Username" expanded auto-focus></b-input>
                            </b-field>

                            <b-field label="Password" label-position="on-border"
                                    :type="errors.password ? 'is-danger' : ''"
                                    :message="errors.password ? errors.password[0] : ''">
                                <b-input type="password" v-model="fields.password" password-reveal placeholder="Password" expanded auto-focus></b-input>
                            </b-field>

                            <footer class="modal-card-foot">
                                <button
                                    class="button is-success"
                                    label="LOGIN"
                                    type="is-success">LOGIN</button>

                                <b-button
                                    label="Close"
                                    @click="isModalActive=false"></b-button>
                            </footer>
                        </form>
                    </div>
                </section>

            </div>
        </b-modal>

    </div> <!--root div-->
</template>

<script>
export default {
    data(){
        return{
            locale: undefined,
            isModalActive: false,
            fields: {},
            errors: {},

            appointment_type: '',

            appointmentTypes: [],
        }
    },

    methods: {
        submit: function(){

            axios.post('/login', this.fields).then(res=>{
                window.location = '/dashboard'
            }).catch(err => {
                if(err.response.status === 422){
                    this.errors = err.response.data.errors;
                }
            });
        },

        loadAppointmentType(){
            axios.get('/get-open-appointment-types')
            .then(res=>{
                this.appointmentTypes = res.data;
            });
        }
    },

    mounted() {
        this.loadAppointmentType();
    }
}
</script>

<style scoped>
    .logo{
        height: 150px;
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
        top: -100px;
        z-index: 1;
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

    @media only screen and (max-width: 1024px) {
        .vision-section{
            flex-direction: column;
            align-items: center;
        }

        .mission-section{
            flex-direction: column;
            align-items: center;
        }

    }


    .mask{
        border-radius: 50%;
         width:200px;
    }

    .hand{
        border-radius: 50%;
        width:200px;

    }

    .touch{
        border-radius: 50%;
        width:200px;
    }
    .tissue{
        border-radius: 50%;
        width:200px;
    }
     .dist{
        border-radius: 50%;
        width:200px;
    }

    .footertwo{
        background-color: whitesmoke;
        color: black;
        width: 100%;
        margin: auto;
    }
    .footertwo-logo{
        width: 100px;
        margin: auto;
    }
    .footertwo-logo-wrapper{
        display: flex;
        height: 100px;
         width: 100px;
        justify-content: center;
        align-items: center;
        margin: auto;
    }.flex-container {
  display: flex;

}
.flex-container > div {

  margin: 10px;
  padding: 10px;
  font-size: 20px;
}

</style>
