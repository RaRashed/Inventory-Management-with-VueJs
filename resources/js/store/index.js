import { createStore } from 'vuex';

import categories from './modules/categories';
import brands from './modules/brands';

export default createStore({
  modules: {
    categories,
    brands

  }
});
