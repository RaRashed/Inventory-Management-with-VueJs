
<template>

<form @submit.prevent="submitForm" role="form" method="POST" >
<div class="row">
<div class="col-sm-6">
<div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title"> Product Create</h5>




<div class="card-body mt-3">
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
       <input @change="selectImage" type="file" class="form-control" placeholder="Product Image">

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
    <div class="form-group" >
        <button type="submit" class="ml-4 btn btn-info"> Save</button>


    </div>

              </div>
                </div>

</div>
<div class="col-sm-6">
   <div class="card card-primary card-outline">
        <div class="card-body">
        <h5 class="card-title"> Product Size</h5>
        <br>
        <div class="row mb-1" v-for="(item,index) in form.items" :key="index">

    <div class="col-sm-4">
        <select class="form-control" v-model="item.size_id">

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
          <button @click="deleteItem(index)" type="button" class="btn-danger btn-sm"><i class="fa fa-trash"></i></button>
    </div>


        </div>
        <button @click="addItem" type="button" class="btn btn-primary btn-sm mt-3"> <i class="fa fa-plus"></i>Add Item</button>

      </div>
   </div>
</div>

</div>
</form>



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
},
methods:{
    selectImage(e){
        this.form.image = e.target.files[0]

    },
    addItem(){
        let item ={
              size_id:null,
                    location:'',
                    quantity: 0

        }
        this.form.items.push(item)
    },
    deleteItem(index){
    this.form.items.splice(index,1)
},
submitForm(){
    let data = new FormData();
    data.append('category_id',this.form.category_id)
     data.append('brand_id',this.form.brand_id)
      data.append('sku',this.form.sku)
       data.append('name',this.form.name)
        data.append('image',this.form.image)
         data.append('cost_price',this.form.cost_price)
          data.append('retail_price',this.form.retail_price)
    data.append('year',this.form.year)
     data.append('description',this.form.description)
     data.append('status',this.form.status)
     data.append('items',this.form.items)


    store.dispatch(actions.ADD_PRODUCT,this.form)
}
}



}


</script>
