<template>
    <b-navbar>
        <template #brand>
            <b-navbar-item>
                
            </b-navbar-item>
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
</template>