 <template>

     <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title"> Product Create</h5>


<form class="form mt-3" role="form" method="POST" >


    <div class="card-body">


        <label for="" class="title mt-5">Product Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Product Name">


    </div>
    <div >
        <button type="submit" class="ml-4 btn btn-info"> Save</button>


    </div>
</form>
              </div>
                </div>

    </template>



<script>
import store from '../../store';
import * as actions from "../../store/action-types";
export default {

mounted(){
    //Get Categories
    store.dispatch(actions.GET_CATEGORIES)
}


}

</script>
