<template>
    <div class="modal fade" id="viewmodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                          </button>
                        <h4 class="modal-title">show single task: {{ viewRec.id }}</h4>
                    </div>
                    <div class="modal-body">
                        <label for="name">view task</label>
                        <p id="name">{{ viewRec.name }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Close</button>
                    </div>
                </div>
            </div>
        </div>
</template>
<script type="text/javascript">
export default
  {
      props:['viewRec'],
        }
</script>
<style type="text/css"scoped>
    
</style>


