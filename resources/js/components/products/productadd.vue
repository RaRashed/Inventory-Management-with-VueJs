
<template>
<div class="row">
<div class="col-sm-6">
<div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title"> Product Create</h5>


<form class="mt-3" role="form" method="POST" >

<div class="card-body">
       <div class="form-group">
       <label for="">Category <span class="text-danger">*</span></label>

       <Select2 v-model="form.category_id" :options="categories" :settings="{placeholder : 'select category'}"></Select2>
       </div>

       <div class="form-group">
       <label for="">Brands<span class="text-danger">*</span></label>
       <!-- <select class="form-control" v-model="form.brand_id">
        <option v-for="(item,index) in brands" :key="index" :value="item.id">item.name }}</option>
       </select>
       -->

       <Select2 v-model="form.brand_id" :options="brands" :settings="{placeholder : 'Select Brand'}"></Select2>
       </div>


        <div class="form-group">
       <label for="">SKU <span class="text-danger">*</span></label>
       <input type="text" v-model="form.sku" class="form-control" placeholder="Enter SKU">

       </div>
        <div class="form-group">
       <label for="">Name <span class="text-danger">*</span></label>
       <input type="text" v-model="form.name" class="form-control" placeholder="Product Name">

       </div>
        <div class="form-group">
       <label for="">Image <span class="text-danger">*</span></label>
       <input type="file" class="form-control" placeholder="Product Image">

       </div>
        <div class="form-group">
       <label for="">Cost Price($) <span class="text-danger">*</span></label>
       <input type="text" v-model="form.cost_price" class="form-control" placeholder="product price">

       </div>
         <div class="form-group">
       <label for="">Retail Price($) <span class="text-danger">*</span></label>
       <input type="text" v-model="form.retail_price" class="form-control" placeholder="product retail price">

       </div>
         <div class="form-group">
       <label for="">Year <span class="text-danger">*</span></label>
       <input type="text" v-model="form.year" class="form-control" placeholder="product Year  (Ex: 2022)">

       </div>
          <div class="form-group">
       <label for="">Description <span class="text-danger">*</span></label>
       <input type="text" v-model="form.description" class="form-control" placeholder="product Description">

       </div>
         <div class="form-group">
       <label for="">Status <span class="text-danger">*</span></label>
       <select class="form-control" id="" v-model="form.status">
       <option value="1">Active</option>
       <option value="0">Inactive</option>
       </select>


       </div>


    </div>
    <div >
        <button type="submit" class="ml-4 btn btn-info"> Save</button>


    </div>
</form>
              </div>
                </div>

</div>
<div class="col-sm-6">
   <div class="card card-primary card-outline">
        <div class="card-body">
        <h5 class="card-title"> Product Size</h5>
        <br>
        <div class="row" v-for="(item,index) in form.items" :key="index">

    <div class="col-sm-4">
        <select class="form-control" v-model="form.size_id">

        <option v-for="(item,index) in sizes" :key="index" :value="item.id">{{ item.size }}</option>
       </select>
    </div>
    <div class="col-sm-3">
         <input type="text" class="form-control" v-model="item.location" placeholder="Location">
    </div>

     <div class="col-sm-3">
          <input type="number" class="form-control" v-model="item.quantity" placeholder="Quantity">
    </div>
     <div class="col-sm-2">
          <button type="button" class="btn-danger btn-sm"><i class="fa fa-trash"></i></button>
    </div>


        </div>
        <button type="button" class="btn btn-primary btn-sm mt-3"> <i class="fa fa-plus"></i>Add Item</button>

      </div>
   </div>
</div>

</div>



    </template>



<script>

import store from '../../store'
import * as actions from "../../store/action-types"
import { mapGetters } from 'vuex'
//import {useRouter} from 'vue-router'
//import {useStore} from 'vuex'
import Select2 from 'vue3-select2-component'

export default {



       components: {Select2},

    data(){
        return {
            form:{
                category_id : 0,
                brand_id : 0,
                sku:'',
                name:'',
                image:'',
                cost_price:0,
                retail_price:0,
                year:'',
                description:'',
                status:1,
                items:[{
                    size_id:null,
                    location:'',
                    quantity: 0

                }]
            }
        }


    },
computed:{
    ...mapGetters({
        'categories':'getCategories',
        'brands' : 'getBrands',
         'sizes' : 'getSizes'
    })

},
mounted(){
    //Get Categories
    store.dispatch(actions.GET_CATEGORIES),
    //Get Brands
    store.dispatch(actions.GET_BRANDS),
    //get sizes
      store.dispatch(actions.GET_SIZES)
}


}


</script>
