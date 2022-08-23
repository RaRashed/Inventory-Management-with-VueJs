
<template>

     <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title"> Product Create</h5>


<form class="form mt-3" role="form" method="POST" >

<div class="card-body">
       <div class="form-group">
       <label for="">Category</label>
       <select class="form-control" v-model="form.category_id">
       <option v-for="(item,index) in categories" :key="index" :value="item.id">{{item.name}}</option>
       </select>
       <Select2 v-model="form.category_id" :options="categories" :settings="{placeholder : 'select category'}"></Select2>
       </div>

    </div>
    <div >
        <button type="submit" class="ml-4 btn btn-info"> Save</button>


    </div>
</form>
              </div>
                </div>

    </template>



<script>

import store from '../../store'
import * as actions from "../../store/action-types";
import { mapGetters } from 'vuex'
import Select2 from 'vue3-select2-component';

export default {
       components: {Select2},

    data(){
        return {
            form:{
                category_id : 0
            }
        }

    },
computed:{
    ...mapGetters({
        'categories':'getCategories'
    })

},
mounted(){
    //Get Categories
    store.dispatch(actions.GET_CATEGORIES)
}


}

</script>
