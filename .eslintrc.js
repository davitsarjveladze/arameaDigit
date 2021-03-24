module.exports = {
  env: {
    browser: true,
    commonjs: true,
    es6: true,
    jest: true
  },
  extends: [
    'plugin:vue/essential',
    'plugin:vue/recommended',
    'standard'
  ],
  ignorePatterns: 'webpack.config.js',
  globals: {
    Atomics: 'readonly',
    SharedArrayBuffer: 'readonly',
    axios: false,
    $: false,
    Vue: false,
    mount: false,
    shallowMount: false,
    shallowMountView: false,
    enableAutoDestroy: false,
    createComponentMocks: false,
    createModuleStore: false
  },
  parserOptions: {
    ecmaVersion: 2018
  },
  plugins: [
    'vue'
  ],
  rules: {
    "indent": ["off"],
    "vue/html-indent": ["off"],
    "vue/html-self-closing": ["off"]
  }
}
