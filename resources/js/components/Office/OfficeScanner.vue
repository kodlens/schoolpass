<template>
    <div>

        <div class="section">
            <div class="columns is-centered">
                <div class="column is-6">
                    <div class="camera">
                        <qrcode-stream :camera="camera" @decode="onDecode" @init="onInit">
                            <div v-if="validationSuccess" class="validation-success">
                                Scanned successfully.
                            </div>

                            <div v-if="validationFailure" class="validation-failure">
                                Not Allowed.
                            </div>

                            <div v-if="validationPending" class="validation-pending">
                                Processing...
                            </div>
                        </qrcode-stream>
                    </div>

                    <p class="decode-result">QR Code: <b>{{ result }}</b></p>

                    <div class="buttons mt-1 is-centered">
                        <b-button @click="turnCameraOn" label="TURN ON"></b-button>
                        <b-button @click="turnCameraOff" label="TURN OFF"></b-button>

                    </div>

                    <div class="select-container">
                        <div class="select-input">
                            <b-field label="Action">
                                <b-select v-model="currentUser.remark">
                                    <option :value="tempRemark">{{ tempRemark }}</option>
                                    <option value="DONE">DONE</option>
                                </b-select>
                            </b-field>
                        </div>

                    </div>

                </div><!--col-->
            </div><!--close div -->

        </div>
        <!--section -->


        <!--modal create-->
<!--        <b-modal v-model="isModalValidModal" has-modal-card-->
<!--                 trap-focus-->
<!--                 :width="640"-->
<!--                 aria-role="dialog"-->
<!--                 aria-label="Modal"-->
<!--                 aria-modal>-->


<!--            <div class="modal-card">-->
<!--                <form @submit.prevent="submit">-->
<!--                    <header class="modal-card-head">-->
<!--                        <p class="modal-card-title">SCANNED INFORMATION</p>-->
<!--                        <button-->
<!--                            type="button"-->
<!--                            class="delete"-->
<!--                            @click="isModalValidModal = false"/>-->
<!--                    </header>-->

<!--                    <section class="modal-card-body">-->

<!--                        <div class="">-->
<!--                            <div class="columns">-->
<!--                                <div class="column">-->
<!--                                    <div style="border: 1px solid #cbcbcb;">-->
<!--                                        <img :src="`/storage/imgs/${user.user.img_path}`" class="visitor-img"/>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="column">-->
<!--                                    <p><b>Name:</b> {{ user.user.lname }}, {{ user.user.fname }} {{ user.user.mname }}</p>-->
<!--                                    <p><b>Visit Schedule:</b> {{ user.appointment_date }}, {{ user.meridian }}</p>-->
<!--                                    <p><b>Relationship: </b> {{ user.inmate_relationship }}</p>-->
<!--                                    <p><b>Inmate to visit: </b> {{ user.inmate }}</p>-->

<!--                                    <div class="companion">-->
<!--                                        <h1 class="title is-6">COMPANION(S)</h1>-->
<!--                                        <ul>-->
<!--                                            <li v-for="(item, index) in user.companions" :key="index"> {{ item.fullname }} - {{ item.inmate_relationship }}</li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <div class="columns">-->
<!--                                <div class="column">-->
<!--                                    <b-field label="Frisk Item(s)">-->
<!--                                        <b-input v-model="fields.frisk_item" type="textarea"></b-input>-->
<!--                                    </b-field>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </section>-->
<!--                    <footer class="modal-card-foot">-->
<!--                        <b-button-->
<!--                            label="Close"-->
<!--                            @click="isModalValidModal=false"/>-->
<!--                        <button-->
<!--                            class="button is-success">SAVE</button>-->
<!--                    </footer>-->
<!--                </form>-->
<!--            </div>-->

<!--        </b-modal>-->
        <!--close modal-->


    </div><!--root-->

</template>



<script>
export default {
    data(){
        return{
            user: {
                user: {},

            },

            currentUser: {},
            tempRemark: '',

            isValid: undefined,
            camera: 'off',
            result: null,
            isProcessing: false,

            isModalValidModal: false,

            fields: {},
        }
    },
    methods: {
        onInit (promise) {
            promise
                .catch(console.error)
                .then(this.resetValidationState)
        },

        resetValidationState () {
            this.isValid = undefined
        },

        async onDecode (content) {
            //console.log(content);
            this.result = content;
            this.turnCameraOff();

            // pretend it's taking really long
            this.isProcessing = true;
            //await this.timeout(3000);
192
            axios.post('/validate-qr/' + content, {
                remark : this.currentUser.remark
            }).then(res=>{
                this.user = res.data;
                this.isProcessing = false;

                if(res.data === 1){
                    this.isValid = true;
                    //this.submitTrack();
                }else{
                    this.isProcessing = false;
                    this.isValid = false;
                }
            }).catch(err=>{
                this.isProcessing = false;
            })
            //this.isValid = content.startsWith('http') //this will return boolean value

            // some more delay, so users have time to read the message
            await this.timeout(2000);
            this.turnCameraOn()
        },

        turnCameraOn () {
            this.camera = 'auto';
        },

        turnCameraOff () {
            this.camera = 'off'
        },

        timeout (ms) {
            return new Promise(resolve => {
                window.setTimeout(resolve, ms)
            })
        },

        submitTrack: function(){
            this.fields.appointment_id = '';
            this.fields.office_id = '';
            this.fields.remark = '';

            axios.post('/save-submit-track', this.fields).then(res=>{
                if(res.data.status === 'saved'){
                    this.isModalValidModal = false;
                    this.$buefy.toast.open({
                        message: 'Frist item save successfully.',
                        type: 'is-success'
                    });

                    this.fields = {};
                }
            })
        },

        loadCurrentUser(){
            axios.get('/get-current-user').then(res=>{
                this.currentUser = res.data;
                this.tempRemark = res.data.remark;

            });
        },

    },

    mounted(){
        this.loadCurrentUser();
    },

    computed: {
        validationPending() {
            return this.isProcessing;
        },

        validationSuccess() {

            return this.isValid === true
        },

        validationFailure() {
            return this.isValid === false
        },
    },
}
</script>

<style scoped>
.validation-success,
.validation-failure,
.validation-pending {
    position: absolute;
    width: 100%;
    height: 100%;

    background-color: rgba(255, 255, 255, .8);
    text-align: center;
    font-weight: bold;
    font-size: 1.4rem;
    padding: 10px;

    display: flex;
    flex-flow: column nowrap;
    justify-content: center;
}
.validation-success {
    color: green;
}
.validation-failure {
    color: red;
}

.camera{
    margin: auto;
    width: 240px;
    height: 320px;
    border: 1px solid gray;
}

.decode-result{
    text-align: center;
}

.visitor-img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;

}

.companion{
    margin: 15px 0 10px 25px;
}

.select-container{
    margin: auto;
}
.debug{
    border: 1px solid red;
}

.select-container{
    display: flex;
    justify-content: center;
}


</style>
