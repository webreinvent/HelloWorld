let routes= [];
let routes_list= [];

import List from '../pages/articles/List.vue'
import Form from '../pages/articles/Form.vue'
import Item from '../pages/articles/Item.vue'
import Filters from '../pages/articles/Filters.vue'

routes_list = {

    path: '/articles',
    name: 'articles.index',
    component: List,
    props: true,
    children:[
        {
            path: 'form/:id?',
            name: 'articles.form',
            component: Form,
            props: true,
        },
        {
            path: 'view/:id?',
            name: 'articles.view',
            component: Item,
            props: true,
        },
        {
            path: 'filters',
            name: 'articles.filters',
            component: Filters,
            props: true,
        },
    ]
};

routes.push(routes_list);

export default routes;

