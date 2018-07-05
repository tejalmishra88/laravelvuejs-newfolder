<template>
    <div class="modal fade" id="addmodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" @click="clearmodal" data-dismiss="modal" aria-hidden="true">&times;
                          </button>
                        <h4 class="modal-title">Add New Record!</h4>
                    </div>
                    <div class="modal-body">
                        <p class="alert alert-success" v-if="success.length > 0">{{ success}}</p>
                        <label for="name">add new task</label>
                        <textarea name="name" id="name" class="form-control" v-model="record"></textarea>
                        <ul v-if="errors.name" class="list-unstyled">
                            <li v-for="err of errors.name" class="alert alert-danger">{{ err }}</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" @click="clearmodal" data-dismiss="modal">
                                    Close</button>
                        <button type="button" class="btn btn-primary" @click="addRecord">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
</template>
<script type="text/javascript">
export default
  { data() 
        {  return  {    success: '',  errors: [],  record: '',    }
         },
        methods:
         {      addRecord() 
                    {     console.log('this.record=', this.record);
                           axios.post("http://127.0.0.1:8000/tasks2",   { 'name': this.record,}                                        
                     
                        )
                        .then(response=> {  
                             console.log('addmodalcomponent-response=',response);
                        console.log('addmodalcomponent-response.data=',response.data);
                            this.$emit('recordadded', response.data);
                            this.success = "Task Added Successfully...";
                           // this.record = '';
                          
                        })
                        .catch(error => this.errors = error.response.data.errors)
            },
            clearmodal() {
                    this.error = [];
                    console.log('this.error=', this.error);
                    this.record = '';
                    this.success = '';
                }

        }
        }
</script>
<style type="text/css"scoped>
    
</style>


