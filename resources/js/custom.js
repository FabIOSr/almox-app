import $ from 'jquery';
window.$ = window.jQuery = $;

document.addEventListener('DOMContentLoaded', ()=>{
    Livewire.on('close-modal', (id)=> {
        // $('#'+id).modal('hide');
        $('.close').trigger('click');
        console.log('trigged');
    });
});


