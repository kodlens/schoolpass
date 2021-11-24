<template>
    <section>

        <div class="columns">
            <div class="column is-8 is-offset-2">
                <div class="panel p-5">
                    
                    <div class="columns">
                        <div class="column">
                            <b-field label="Username">
                                <b-input type="text"></b-input>
                            </b-field>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column">
                            <b-field label="Password">
                                <b-input type="password" password-reveal></b-input>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Re-type Password">
                                <b-input type="password" password-reveal></b-input>
                            </b-field>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column">
                            <b-field label="Email">
                                <b-input type="email"></b-input>
                            </b-field>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
        
        
    </section>
</template>