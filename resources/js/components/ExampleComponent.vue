<template>
    <section >

        <navbar-component/>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Example Component</div>

                        <div class="card-body text-danger">
                            I'm an example component.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import navbarVue from './layouts/navbar.vue'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components : {
            "navbar-component" : navbarVue,
        }
    }
</script>
