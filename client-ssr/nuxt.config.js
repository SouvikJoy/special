import fs from 'fs';
import { resolve } from 'path';
import chalk from 'chalk';

const isDev = process.env.NODE_ENV !== 'production';

const resolvePath = path => resolve(__dirname, path);

export default {
  head: {
    title: 'Debugger Tech',
    titleTemplate: '%s - Debugger Tech',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  // Global CSS
  css: [
  ],

  // Plugins to run before rendering page
  plugins: [
  ],

  // Auto import components
  components: false,

  // Modules for dev and build
  buildModules: [
    '@nuxtjs/eslint-module',
    '@nuxtjs/tailwindcss',
    '@nuxtjs/style-resources',
    '@nuxtjs/router',
  ],

  // Modules
  modules: [
    '@nuxtjs/axios',
    '@nuxtjs/pwa',
    '@nuxtjs/svg',
  ],

  // Axios module configuration
  axios: {},

  // PWA module configuration
  pwa: {
    manifest: {
      lang: 'en-US'
    }
  },

  // Build Configuration
  build: {
  },

  routerModule: {
    fileName: 'index.js',
    path: 'src/router'
  },

  /*
   * Server config
   */
  server: {
    host: 'nuxt.local.debugger.tech',
    port: 3000,
    https: isDev
      ? {
        key: fs.readFileSync(resolvePath('server.key')),
        cert: fs.readFileSync(resolvePath('server.crt'))
      }
      : undefined
  },

  /*
   ** Nuxt Source directory
   */
  srcDir: 'src/',
  dir: {
    app: resolvePath('./src/app/'),
    static: resolvePath('public/')
  },

  globalName: 'DEBUGGER',

  globals: {
    id: '__debugger',
    context: '__DEBUGGER__',
    pluginPrefix: '__DEBUGGER'
  },

  /*
   ** Customize the progress-bar color
   */
  loading: { color: '#41B883', height: '5px', continuous: true },

  telemetry: false,

  cli: {
    badgeMessages: [
      `${chalk.bold('URL')}: ${chalk.underline.yellow('https://nuxt.local.debugger.tech:3000')}`,
      '',
      `${chalk.bold('Developer')}: ${chalk.bold.cyanBright('Debugger Tech')}`
    ]
  },

  vue: {
    config: {
      // performance: isDev,
      devtools: isDev
    }
  },
};
