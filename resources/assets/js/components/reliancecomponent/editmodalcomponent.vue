<template>
    <div class="modal fade" id="editmodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" @click="clearmodal" data-dismiss="modal" aria-hidden="true">&times;
                          </button>
                        <h4 class="modal-title">Add New Record!</h4>
                    </div>
                    <div class="modal-body">
                        <p class="alert alert-success" v-if="success.length > 0">{{ success}}</p>
                        <label for="name">Edit task</label>
                        <textarea name="name" id="name" class="form-control" v-model="rec.name"></textarea>
                         <textarea name="age" id="age" class="form-control" v-model="rec.age"></textarea>
                        <ul v-if="errors.name" class="list-unstyled">
                            <li v-for="err of errors.name" class="alert alert-danger">{{ err }}</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" @click="clearmodal" data-dismiss="modal">
                                    Close</button>
                        <button type="button" class="btn btn-primary" @click="updateRecord">Update Changes</button>
                    </div>
                </div>
            </div>
        </div>
</template>
<script type="text/javascript">
export default
  {
      props:['rec'],
       data() 
        {  return  {    success: '',  errors: [],    }
         },
        methods:
         {      updateRecord() 
                    {  console.log('edit modal--t from taskcomponent-this.rec',this.rec);
                       console.log('edit-id',this.rec.id);
                        console.log('edit-name',this.rec.name);
                        console.log('edit-age',this.rec.age);
                         axios.post('http://127.0.0.1:8000/editapi2/',{'x':this.rec.id, 'y':this.rec.name,'z':this.rec.age})
                            .then ( (response) => {
                                                   console.log('editmodal.vue--updaterec--response.data=',response.data)
                                                 
                                                     this.$emit('recordUpdated', response.data);
                                                     this.success = "Task Updated Successfully...";

                                              })
                            .catch ( error=> this.errors =error.response.data.errors)
            },
            clearmodal() {
                    this.error = [];
                    console.log('this.error=', this.error);
                    this.success = '';
                }

        }
        }
</script>
<style type="text/css"scoped>
    
</style>


