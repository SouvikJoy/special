import Vue from 'vue';
import Router from 'vue-router';
import { scrollBehavior } from '~~/utils';

import Index from '~/pages/Index';

Vue.use(Router);

const routes = [
  {
    path: '/',
    name: 'index',
    component: Index
  }
];

export function createRouter () {
  return new Router({
    mode: 'history',
    linkActiveClass: 'portal-link-active',
    linkExactActiveClass: 'portal-link-exact-active',
    routes,
    scrollBehavior
  });
}

