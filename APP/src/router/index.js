import Vue from 'vue'
import Router from 'vue-router'
import Movie from '@/components/movie/Movie'
import Music from '@/components/music/Music'
import Book from '@/components/book/Book'
import Photo from '@/components/photo/Photo'

import MovieDetail from '@/components/movie/MovieDetail'
import Newsong from '@/components/music/Newsong'
import PhotoDetail from '@/components/photo/PhotoDetail'

Vue.use(Router);

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Movie',
      component: Movie
    },
    {
      path: '/music',
      name: 'Music',
      component: Music,
      beforeEnter(to, from, next){
        from.name === null ? next('/') : next();
      }
    }, {
      path: '/book',
      name: 'Book',
      component: Book,
      beforeEnter(to, from, next){
        from.name === null ? next('/') : next();
      }
    }, {
      path: '/photo',
      name: 'Photo',
      component: Photo,
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
      path: '/newsong/:musicId',
      name: 'Newsong',
      component: Newsong,
      beforeEnter(to, from, next){
        from.name === null ? next('/music') : next();
      }
    }, {
      path: '/photodetail/:photoId',
      name: 'PhotoDetail',
      component: PhotoDetail
    },

  ]
})
