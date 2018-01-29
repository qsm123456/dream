import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'

import Text from '@/components/Text'

import Text1 from '@/components/Text1'

import Text2 from '@/components/Text2'

import Url from '@/components/Url'



Vue.use(Router);

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
        {
          path:'/text',
          name:'/text',
          component:Text,
          children:[
              {
                  path:'/text/text1',
                  name:'text1',
                  component:Text1,
              },
              {
                  path:'/text/text2',
                  name:'text2',
                  component:Text2,
              },
              {
                  path: '/url/:userId(\\d+)/:username',
                  name:'url',
                  component:Url,
              },
              {
                  path: '/home/:userId(\\d+)/:username',
                  redirect: '/testUrl/:userId(\\d+)/:username'
              },
          ]
      }
  ]
})
