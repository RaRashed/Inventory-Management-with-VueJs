import { createStore } from 'vuex';
import { createApp } from 'vue'

import categories from './modules/categories';
import brands from './modules/brands';
import sizes from './modules/sizes';

export default createStore({
  modules: {
    categories,
    brands,
    sizes

  }
});


/*
import { createStore } from 'vuex'
const store = createStore({
    state:{
        token:localStorage.getItem('token') || 0

    },
    mutations:{

    },
    actions:{

    },
    getters:{

    }

})
export default store;
*/
