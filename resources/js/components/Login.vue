<template>
    <div class="login-wrapper">
        <div class="login">
            <div class="panel">
                <div class="panel-heading">
                    SECURITY CHECK
                </div>

                <div class="panel-body">
                    <b-field label="Email" label-position="on-border">
                        <b-input type="text" v-model="fields.email" placeholder="Email" />
                    </b-field>

                    <b-field label="Password" label-position="on-border">
                        <b-input type="password" v-model="fields.password" password-reveal placeholder="Password" />
                    </b-field>

                    <div class="buttons">
                        <b-button type="is-success">LOGIN</b-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data(){
        return {
            fields: {
                email: '',
                password: '',
            },
        }
    },

    methods: {

    }
}
</script>


<style scope>
    .login-wrapper{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login{
        width: 500px;
    }

    .panel > .panel-body{
        padding: 20px;

    }




</style>