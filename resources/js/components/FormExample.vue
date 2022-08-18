<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard </div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <h1>Enque estas pensando ahora</h1>
                            <label for="thought">Ahora estoy pensando en:</label>
                            <input type="text" class="form-control" name="thought">
                            
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Enviar pensamiento
                        </button>

                    </form>
                    
                </div>
            </div>
            <br>
            <br>

            <div class="panel panel-default">
                <br>
                <br>
                <div class="panel-heading">publicado el 16/08/2022</div>
                <div class="panel-body">
                    <p>
                        ehbrfkeaurfbaeurfbceurbceurcbhasukercfaekucrfbakeurcfbeakrhfbcekrbckear cekrhv e
                    </p>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-default">
                        Editar

                    </button>
                    <button class="btn btn-danger">
                        Eliminar

                    </button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
