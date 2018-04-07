import Vue from 'vue'
import Router from 'vue-router'
import Movie from '@/components/movie/Movie'
// import Music from '@/components/music/Music'
import Book from '@/components/book/Book'
import Constellation from '@/components/constellation/Constellation'

import MovieDetail from '@/components/movie/MovieDetail'
import Newsong from '@/components/music/Newsong'


Vue.use(Router);

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Movie',
      component: Movie,
    },
    {
      path: '/book',
      name: 'Book',
      component: Book,
      beforeEnter(to, from, next){
        from.name === null ? next('/') : next();
      }
    }, {
      path: '/constellation',
      name: 'Constellation',
      component: Constellation,
      beforeEnter(to, from, next){
        from.name === null ? next('/') : next();
      }
    },{
      path: '/moviedetail/:movieId',
      name: 'MovieDetail',
      component: MovieDetail,
      beforeEnter(to, from, next){
        from.name === null ? next('/') : next();
      }
    }, {
      path: '/newsong',
      name: 'Newsong',
      component: Newsong,
      beforeEnter(to, from, next){
        from.name === null ? next('/') : next();
      }
    },

  ]
})
