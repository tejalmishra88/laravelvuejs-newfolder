<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4>all todo task</h4><span class="pull-right">
                        <a class="btn btn-success btn-xs" data-toggle="modal" href="#addmodal">+</a>
                    </span></div>
                     <div class="card-body">
                       worker list</div>
                       <table><thead>
                       <tr>
                           <th>id</th>|<th>name</th>|<th>age</th>|<th>height</th>
                          </tr></thead>
                          <tbody>
                              </tbody>
                          </table>
                     <ul class="list-group">
                            <li class="list-group-item"  v-for= "t in tasks"><th>id</th>{{ t.id }} - <th>name</th>{{ t.name }}
                             - <th>age</th>{{t.age}} - <th>height</th>{{t.height}}
                                <br><span class="pull-right"><a data-toggle="modal" href="#editmodal" class="btn btn-success" @click="getrecordbyid(t)">edit</a> | 
                                <button @click="delRecord(t.id)" class="btn btn-primary">delete</button> | 
                                <a class="btn btn-danger" data-toggle="modal" href="#viewmodal" @click="getRecord(t.id)">preview</a></span> </li>
                        </ul>
                          </tbody>
                          </table>
                    <div class="card-footer text-right"><small>company xyz</small></div>
                </div>
            </div>
        </div>
         <div id ="modal">
             <addtask @recordadded="refreshRecord"></addtask>
              <edittask :rec="editRec" @recordUpdated="refreshRecord"></edittask>
                <viewtask :viewRec="editRec"></viewtask>
         </div>
    </div>
</template>

<script type="text/javascript">
Vue.component('addtask', require('./addmodalcomponent.vue'));
Vue.component('edittask', require('./editmodalcomponent.vue'));
Vue.component('viewtask', require('./viewmodalcomponent.vue'));
    export default 
    {  data()
         { return{  tasks:{},   records:{},
                   editRec:{}, errors:[],
                   search:'',
                 }
         },
         methods:
          {    refreshRecord(datafromadd)
               { console.log('taskcomponent--refrerecord=',datafromadd);
                 this.tasks= datafromadd;
                },
               delRecord(id) 
                {  const reply = confirm("Are You sure, you want to delete this record ?");
                   if(reply)
                   {   axios.post('http://127.0.0.1:8000/tasks5/',{x:id})
                            .then(( response) => {console.log('taskcomponent.vue--delrecord response=',response.data)
                                                 
                                                   this.tasks = response.data;
                                                 }
                                )
                            .catch( error => this.errors = error.response.data.errors)
                   }   
                },
               getrecordbyid(t)
                {  console.log('edit clicked in taskcompoenent, t=',t);
                   this.editRec =t;
                }
           },
        created() 
           {     axios.get('http://127.0.0.1:8000/jio1')
                     .then((response) => {this.tasks = response.data;
                                          console.log('/taskcomponent.vue--response-created', response);
                                         }
                          )
                    .catch((error) => console.log(error));
                console.log('task Component created.')
           },
    }
</script>
<style type="text/css" scoped>
h2{ color:green;}
</style>


