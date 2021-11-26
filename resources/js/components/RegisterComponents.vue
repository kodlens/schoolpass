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

                    <div class="columns">
                        <div class="column">
                            <b-field label="Last Name">
                                <b-input type="text"></b-input>
                            </b-field>
                        </div>
                    </div>
                    
                     <div class="columns">
                        <div class="column">
                            <b-field label="First Name">
                                <b-input type="text"></b-input>
                            </b-field>
                        </div>
                    </div>

                     <div class="columns">
                        <div class="column">
                            <b-field label="Middle Name">
                                <b-input type="text"></b-input>
                            </b-field>
                        </div>
                    </div>

                     <div class="columns">
                        <div class="column">
                            <b-field label="Province">
                                <b-input type="text"></b-input>
                            </b-field>
                        </div>
                    </div>

                     <div class="columns">
                        <div class="column">
                            <b-field label="City/Municipality">
                                <b-input type="text"></b-input>
                            </b-field>
                        </div>
                    </div>

                     <div class="columns">
                        <div class="column">
                            <b-field label="House #. Street, Barangay">
                                <b-input type="text"></b-input>
                            </b-field>
                        </div>
                    </div>

                       <b-field>
            <b-select placeholder="Sex" icon="account">
                <option value="1">Male</option>
                <option value="2">female</option>
            </b-select>
            
        </b-field>
         <b-button @click="Register">Register</b-button>




                </div>
            </div>
        </div>
        
        
    </section>
</template> 
