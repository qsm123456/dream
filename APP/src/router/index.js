import Vue from 'vue'
import Router from 'vue-router'
import Movie from '@/components/movie/Movie'
// import Music from '@/components/music/Music'
import Book from '@/components/book/Book'
import Ticket from '@/components/ticket/Ticket'

import MovieDetail from '@/components/movie/MovieDetail'
import Newsong from '@/components/music/Newsong'
import Ticket_s from '@/components/ticket/Ticket_s'

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
      path: '/ticket',
      name: 'Ticket',
      component: Ticket,
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
    {
      path: '/ticket_s',
      name: 'TicketS',
      component: Ticket_s,
      beforeEnter(to, from, next){
        from.name === null ? next('/') : next();
      }
    }
  ]
})
