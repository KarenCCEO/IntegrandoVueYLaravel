<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <form-example></form-example>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FormExample from './FormExample.vue';
    export default {
        components:{FormExample},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
