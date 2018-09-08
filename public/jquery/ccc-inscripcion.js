const config = {
    errorBagName: 'errors', // change if property conflicts.
    delay: 1000,
    // locale: 'es',
    messages: null,
    strict: true
};

Vue.use(VeeValidate, config);
