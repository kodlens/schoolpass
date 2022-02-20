 <template>
    <div>
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

        <hr>
        <div class="section">
            <h1 class="title is-4 has-text-centered">ORDINANCES</h1>
            <div class="columns mt-5 is-centered" v-for="(item, index) in data" :key="index">
                <div class="column is-6">
                    <img :src="`/storage/ordinances/${item.ordinance_img_path}`" />
                </div>
            </div>
        </div>
     </div>
 </template>

 <script>
export default {
    data(){
        return {
            data: [],

        }
    },
    methods: {
        loadData(){
            axios.get('/get-open-ordinances').then(res=>{
                this.data = res.data
            })
        }
    },
    mounted() {
        this.loadData();
    }
}
 </script

 <style scoped>
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
  .flex-container {
  display: flex;

}
.flex-container > div {

  margin: 10px;
  padding: 10px;
  font-size: 20px;
}

 </style>
