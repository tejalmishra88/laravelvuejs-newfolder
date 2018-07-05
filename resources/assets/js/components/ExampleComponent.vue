<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>panel heading</h2> </div>

                    <div class="card-body">
                     hell0, {{ name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('example Component mounted.')},
            data(){
                return{ name:" tejal" }
                  }

    }
</script>
<style type="text/css" scoped>
h2{ color:green;}
</style>