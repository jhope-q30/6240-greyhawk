(function(){

    $has_class = function(el, className){
        if(el.classList){
            return el.classList.contains(className);
        }else{
            return new RegExp('(^| )' + className + '( |$)', 'gi').test(el.className);
        }
        return false;
    }

    $add_class = function(el, className){
        if(el.classList){
            el.classList.add(className);
        }else{
            el.className += ' ' + className;
        }
    }

    $remove_class = function(el, className){
        if (el.classList){
            el.classList.remove(className);
        }else{
            el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
        }
    }

    $forEachItem = function(array, callback, scope){
        for(var i = 0; i < array.length; i++){
            callback.call(scope, i, array[i]);
        }
    }

    /* init */

    $anis = document.querySelectorAll( ".gh-animate" );

    /* scroll */

    window.addEventListener('scroll', function(){

        var $scrollTop = window.pageYOffset || document.documentElement.scrollTop, /* update scroll position */
            $threshold = Number( window.innerHeight - Number( window.innerHeight/20 ) );

        $forEachItem( $anis, function(index, value) {

            if( ( value.offsetTop - $threshold ) <= $scrollTop ){

                if( !$has_class( value, 'active' ) ){

                    $add_class( value, 'active' );

                }

            }

        });

    });

})(window);