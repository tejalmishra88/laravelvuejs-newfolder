<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">sample component </div>

                    <div class="card-body">
                       sample body
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('sample Component mounted.')
        }
    }
</script>
<style type="text/css" scoped>
h2{ color:green;}
</style>
