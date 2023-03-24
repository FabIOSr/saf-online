<template>
    <div>
        <div class="card-body">
            <h5 class="card-title text-primary">Home Page</h5>
            <p class="mb-4">
                Bem vindo <span class="fw-bold">82%</span> á sua pagina inicial
            </p>

            <a href="javascript:void()" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modal-default">View Badges</a>
        </div>

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Default Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>One fine body&hellip;</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click="closeModal">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        closeModal(){
            $('#modal-default').modal('hide');
        }
    },
    mounted() {
        //console.log($('#modal-default').modal().hide())
    },
}
</script>