import * as actions from '../../action-types'
//import * as mutations from '../../mutation-types'
import Axios from 'axios'

export default {
    [actions.ADD_PRODUCT]({commit},payload){
        Axios.post('/products',payload)
        .then(res=>{
           //if(res.data.success ==true){
            //commit(mutations.SET_SIZES,res.data.data)
           //}
        })
        .catch(err=>{
            //console.log(err.response)
        })

    }
}
