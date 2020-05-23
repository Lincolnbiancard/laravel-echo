<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mensagens</div>

                    <div class="card-body">
                        Vou listar mensagens aqui.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            Echo.channel('message-received')
                .listen('SendMessage', (e) => {
                    console.log(e);
                });
        }
    }
</script>
