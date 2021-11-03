module.exports = {
  root: true,
  env: {
    browser: true,
    node: true
  },
  parserOptions: {
    parser: '@babel/eslint-parser',
    requireConfigFile: false,
    ecmaFeatures: {
      legacyDecorators: true
    }
  },
  extends: [
    '@nuxtjs',
    'plugin:nuxt/recommended',
    'prettier'
  ],
  plugins: [
  ],
  // your custom rules here
  rules: {
    'dot-notation': 'off',
    'import/namespace': 'off',
    'no-console': process.env.NODE_ENV === 'production' ? 'warn' : 'off',
    'no-debugger': process.env.NODE_ENV === 'production' ? 'error' : 'off',
    'no-tabs': 'off',
    'no-undef': 'off',
    'no-unused-vars': 'off',
    'no-extend-native': 'off',
    'no-mixed-spaces-and-tabs': 'off',
    semi: [2, 'always'],
    'prefer-promise-reject-errors': 'off',
    'vue/no-v-html': 'off',
    'vue/v-bind-style': 'off',
    'vue/no-use-v-if-with-v-for': 'off',
    'vue/no-unused-components': 'off',
    'vue/max-attributes-per-line': ['error', {
      singleline: {
        max: 3,
        allowFirstLine: true
      },
      multiline: {
        max: 1,
        allowFirstLine: false
      }
    }],
    'require-await': 'off'
  }
}
