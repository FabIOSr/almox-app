import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import * as bootstrap from 'bootstrap';

import './bootstrap';

import { createApp } from 'vue';

const app = createApp({});
app.use(jQuery);


import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

app.mount('#app');

window.addEventListener('close-modal', (event) => {
    $('.close').trigger('click');
    console.log('close');
});

// document.addEventListener('DOMContentLoaded', ()=>{
//     Livewire.on('close-modal', (id)=> {
//         // $('#'+id).modal('hide');
//         $('.close').trigger('click');
//         console.log('trigged');
//     });
// });
