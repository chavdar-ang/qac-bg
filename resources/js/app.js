// require('./bootstrap');

document.addEventListener('DOMContentLoaded', function() {
    (function() {
    
        var hamburger = {
            navToggle: document.querySelector('.nav-toggle'),
            nav: document.querySelector('.nav-mobile'),
    
            doToggle: function(e) {
                e.preventDefault();
                this.nav.classList.toggle('expanded');
            }
        };
    
        hamburger.navToggle.addEventListener('click', function(e) {
            hamburger.doToggle(e);
        });
    }());
 }, false);