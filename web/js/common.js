/**
 * Created by werwolf4 on 12.09.2016.
 */
!function(e){function t(t){var n=e(this),i=null,o=[],u=null,r=null,c=e.extend({rowSelector:"> li",submenuSelector:"*",submenuDirection:"right",tolerance:75,enter:e.noop,exit:e.noop,activate:e.noop,deactivate:e.noop,exitMenu:e.noop},t),l=2,f=100,a=function(e){o.push({x:e.pageX,y:e.pageY}),o.length>l&&o.shift()},s=function(){r&&clearTimeout(r),c.exitMenu(this)&&(i&&c.deactivate(i),i=null)},h=function(){r&&clearTimeout(r),c.enter(this),v(this)},m=function(){c.exit(this)},x=function(){y(this)},y=function(e){e!=i&&(i&&c.deactivate(i),c.activate(e),i=e)},v=function(e){var t=p();t?r=setTimeout(function(){v(e)},t):y(e)},p=function(){function t(e,t){return(t.y-e.y)/(t.x-e.x)}if(!i||!e(i).is(c.submenuSelector))return 0;var r=n.offset(),l={x:r.left,y:r.top-c.tolerance},a={x:r.left+n.outerWidth(),y:l.y},s={x:r.left,y:r.top+n.outerHeight()+c.tolerance},h={x:r.left+n.outerWidth(),y:s.y},m=o[o.length-1],x=o[0];if(!m)return 0;if(x||(x=m),x.x<r.left||x.x>h.x||x.y<r.top||x.y>h.y)return 0;if(u&&m.x==u.x&&m.y==u.y)return 0;var y=a,v=h;"left"==c.submenuDirection?(y=s,v=l):"below"==c.submenuDirection?(y=h,v=s):"above"==c.submenuDirection&&(y=l,v=a);var p=t(m,y),b=t(m,v),d=t(x,y),g=t(x,v);return d>p&&b>g?(u=m,f):(u=null,0)};n.mouseleave(s).find(c.rowSelector).mouseenter(h).mouseleave(m).click(x),e(document).mousemove(a)}e.fn.menuAim=function(e){return this.each(function(){t.call(this,e)}),this}}(jQuery);


function toogleMap() {
    if ($('body').hasClass('map-open')) {
        $('body').removeClass('map-open');
        $('#footer-map .map-content').height(100);
    } else {
        $('body').addClass('map-open');
        $('#footer-map .map-content').height($(window).innerHeight() + 15);
        $('html, body').animate({ scrollTop: $('#footer-map').offset().top}, 250);
    }
}

function getURLVar(key) {
    var value = [];

    var query = String(document.location).split('?');

    if (query[1]) {
        var part = query[1].split('&');

        for (i = 0; i < part.length; i++) {
            var data = part[i].split('=');

            if (data[0] && data[1]) {
                value[data[0]] = data[1];
            }
        }

        if (value[key]) {
            return value[key];
        } else {
            return '';
        }
    } else {
        var query = String(document.location.pathname).split('/');
        if (query[query.length - 1] == 'cart') value['route'] = 'checkout/cart';
        if (query[query.length - 1] == 'checkout') value['route'] = 'checkout/checkout';

        if (value[key]) {
            return value[key];
        } else {
            return '';
        }
    }
}

$(document).ready(function () {

    $('#menu #menu-list').menuAim({
        activate: activateSubmenu,
        deactivate: deactivateSubmenu,
        exitMenu: exitMenu
    });
    function activateSubmenu(row) {$(row).addClass('hover');}
    function deactivateSubmenu(row) {$(row).removeClass('hover');}
    function exitMenu(row) {return true;}


    $(".toggle-child").click(function() {
        $(this).toggleClass('open');
        $(this).parent().find('.child-box').slideToggle(200);
    });

    $(".toggle-child2").click(function() {
        $(this).toggleClass('open');
        $(this).parent().parent().find('.child2-box').slideToggle(200);
    });





});





$(document).ready(function() {
    $(".product-item h4").dotdotdot();
    $('#scroll-top-button').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 500);
    });

});

$(window).scroll(function(){
    if ($(window).scrollTop() > 200){
        $("#scroll-top-button").css({'display':'block'});
    } else {
        $("#scroll-top-button").css({'display':'none'});
    }
});

$(document).ready(function() {
    // Adding the clear Fix
    // cols1 = $('#column-right, #column-left, .category-column-left').length;

    // if (cols1 >= 2) {
    // $('#content .product-layout:nth-child(2n+2)').after('<div class="clearfix visible-md visible-lg"></div>');
    // } else if (cols1 == 1) {
    // $('#content .product-layout:nth-child(3n+3)').after('<div class="clearfix visible-md visible-lg"></div>');
    // } else {
    // $('#content .product-layout:nth-child(4n+4)').after('<div class="clearfix visible-md visible-lg"></div>');
    // }

    // Highlight any found errors
    $('.text-danger').each(function() {
        var element = $(this).parent().parent();

        if (element.hasClass('form-group')) {
            element.addClass('has-error');
        }
    });

    // Currency
    $('#currency .currency-select').on('click', function(e) {
        e.preventDefault();

        $('#currency input[name=\'code\']').val($(this).attr('href'));

        $('#currency').submit();
    });

    // Language
    $('#language a').on('click', function(e) {
        e.preventDefault();

        $('#language input[name=\'code\']').val($(this).attr('href'));

        $('#language').submit();
    });

    /* Search */
    $('#search input[name=\'search\']').parent().find('#search-button').on('click', function() {
        url = $('base').attr('href') + 'index.php?route=product/search';

        var value = $('header #search input[name=\'search\']').val();

        if (value) {
            url += '&search=' + encodeURIComponent(value) + '&sub_category=true&description=true';
        }

        var category_id = $('header #search input[name=\'category_id\']').prop('value');

        if (category_id > 0) {
            url += '&category_id=' + encodeURIComponent(category_id) + '&sub_category=true&description=true';
        }

        location = url;
    });

    $('#search input[name=\'search\']').on('keydown', function(e) {
        if (e.keyCode == 13) {
            $('header #search input[name=\'search\']').parent().find('#search-button').trigger('click');
        }
    });


    // Product List
    $('#list-view').click(function() {
        $('#content .product-layout > .clearfix').remove();

        $('#content .product-layout').attr('class', 'product-layout product-list col-xs-12');

        localStorage.setItem('display', 'list');
        $(this).addClass('active');
        $('#grid-view').removeClass('active');
    });

    // Product Grid
    $('#grid-view').click(function() {
        $('#content .product-layout > .clearfix').remove();

        // What a shame bootstrap does not take into account dynamically loaded columns
        col_left = $('#column-left').length;
        col_right = $('#column-right').length;
        col_cat = $('#category-column-left').length;

        if ((col_left == 1) && (col_right == 1) || (col_cat == 1) && (col_right == 1)) {
            $('#content .product-layout').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
        } else if ((col_left == 1) || (col_right == 1) || (col_cat == 1)) {
            $('#content .product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
        } else {
            $('#content .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-4 col-xs-12');
        }

        localStorage.setItem('display', 'grid');
        $(this).addClass('active');
        $('#list-view').removeClass('active');
    });

    if (localStorage.getItem('display') == 'list') {
        $('#list-view').trigger('click');
    } else {
        $('#grid-view').trigger('click');
    }


    // Checkout
    $(document).on('keydown', '#collapse-checkout-option input[name=\'email\'], #collapse-checkout-option input[name=\'password\']', function(e) {
        if (e.keyCode == 13) {
            $('#collapse-checkout-option #button-login').trigger('click');
        }
    });


    // tooltips on hover
    if(!('ontouchstart' in window)){
        $('[data-toggle=\'tooltip\']').tooltip({container: 'body', trigger: 'hover'});
        $('[data-toggle=\'popover\']').popover({container: 'body', trigger: 'hover'});
    }

    // Makes tooltips work on ajax generated content
    $(document).ajaxStop(function() {
        if(!('ontouchstart' in window)){
            $('[data-toggle=\'tooltip\']').tooltip({container: 'body', trigger: 'hover'});
            $('[data-toggle=\'popover\']').popover({container: 'body', trigger: 'hover'});
        }
    });
});

// Cart add remove functions
var cart = {
    'add': function(product_id, quantity) {
        $.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
            dataType: 'json',
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            success: function(json) {
                $('#cart > button').button('reset');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['success']) {
                    $('#modal-cart').modal('show');

                    setTimeout(function () {
                        $('#cart-total').html(json['total_new']);
                    }, 100);

                    $.ajax({
                        url: 'index.php?route=common/cart/info',
                        type: 'get',
                        dataType: 'html',
                        beforeSend: function() {
                            $('.cartMask').css({'display':'block'});
                        },
                        success: function(data){
                            $('#modal-cart .modal-body').html($(data).find('.modal-body').html());
                            $('#modal-cart .modal-body').prepend('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-info-circle"></i>&nbsp;&nbsp;' + json['success'] + '</div>');
                        }
                    });
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'update': function(key, quantity) {
        $.ajax({
            url: 'index.php?route=checkout/cart/edit',
            type: 'post',
            data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
            dataType: 'json',
            beforeSend: function() {
                $('#cart > button').button('loading');
                $('.cartMask').css({'display':'block'});
            },
            success: function(json) {
                $('#cart > button').button('reset');

                setTimeout(function () {
                    $('#cart-total').html(json['total_new']);
                }, 100);

                if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $.ajax({
                        url: 'index.php?route=common/cart/info',
                        type: 'get',
                        dataType: 'html',
                        success: function(data){
                            $('#modal-cart .modal-body').html($(data).find('.modal-body').html());
                        }
                    });
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'updatePopup': function(key, quantity) {
        $.ajax({
            url: 'index.php?route=checkout/cart/editPopup',
            type: 'post',
            data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
            dataType: 'json',
            beforeSend: function() {
                $('#cart > button').button('loading');
                $('.cartMask').css({'display':'block'});
            },
            success: function(json) {
                $('#cart > button').button('reset');

                setTimeout(function () {
                    $('#cart-total').html(json['total_new']);
                }, 100);

                if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $.ajax({
                        url: 'index.php?route=common/cart/info',
                        type: 'get',
                        dataType: 'html',
                        success: function(data){
                            $('#modal-cart .modal-body').html($(data).find('.modal-body').html());
                        }
                    });
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function(key) {
        $.ajax({
            url: 'index.php?route=checkout/cart/remove',
            type: 'post',
            data: 'key=' + key,
            dataType: 'json',
            beforeSend: function() {
                $('#cart > button').button('loading');
                $('.cartMask').css({'display':'block'});
            },
            success: function(json) {
                $('#cart > button').button('reset');

                setTimeout(function () {
                    $('#cart-total').html(json['total_new']);
                }, 100);

                if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $.ajax({
                        url: 'index.php?route=common/cart/info',
                        type: 'get',
                        dataType: 'html',
                        success: function(data){
                            $('#modal-cart .modal-body').html($(data).find('.modal-body').html());
                        }
                    });
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
}

var voucher = {
    'add': function() {

    },
    'remove': function(key) {
        $.ajax({
            url: 'index.php?route=checkout/cart/remove',
            type: 'post',
            data: 'key=' + key,
            dataType: 'json',
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            complete: function() {
                $('#cart > button').button('reset');
            },
            success: function(json) {
                setTimeout(function () {
                    $('#cart-total').html(json['total']);
                }, 100);

                if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
}

var wishlist = {
    'add': function(product_id) {
        $('#modal-wishlist').remove();
        $.ajax({
            url: 'index.php?route=account/wishlist/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            success: function(json) {
                html  = '<div id="modal-wishlist" class="modal fade">';
                html += '  <div class="modal-dialog">';
                html += '    <div class="modal-content">';
                if (json['success']) {
                    html += '      <div class="modal-body alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>';}
                if (json['redirect']) {
                    html += '      <div class="modal-body alert-info"><i class="fa fa-info-circle"></i> ' + json['info'] + '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>';}
                html += '    </div>';
                html += '  </div>';
                html += '</div>';

                $('body').append(html);

                $('#modal-wishlist').modal('show');

                $('#wishlist-total').html(json['total']);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function() {

    }
}

var compare = {
    'add': function(product_id) {
        $('#modal-compare').remove();
        $.ajax({
            url: 'index.php?route=product/compare/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            success: function(json) {
                html  = '<div id="modal-compare" class="modal fade">';
                html += '  <div class="modal-dialog">';
                html += '    <div class="modal-content">';
                html += '      <div class="modal-body alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>';
                html += '    </div>';
                html += '  </div>';
                html += '</div>';

                $('body').append(html);

                $('#modal-compare').modal('show');

                $('#compare-total').html(json['total']);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function() {

    }
}

/* Agree to Terms */
$(document).delegate('.agree', 'click', function(e) {
    e.preventDefault();

    $('#modal-agree').remove();

    var element = this;

    $.ajax({
        url: $(element).attr('href'),
        type: 'get',
        dataType: 'html',
        success: function(data) {
            html  = '<div id="modal-agree" class="modal fade">';
            html += '  <div class="modal-dialog">';
            html += '    <div class="modal-content">';
            html += '      <div class="modal-header">';
            html += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
            html += '        <h4 class="modal-title">' + $(element).text() + '</h4>';
            html += '      </div>';
            html += '      <div class="modal-body">' + data + '</div>';
            html += '    </div';
            html += '  </div>';
            html += '</div>';

            $('body').append(html);

            $('#modal-agree').modal('show');
        }
    });
});

// Autocomplete */
(function($) {
    $.fn.autocomplete = function(option) {
        return this.each(function() {
            this.timer = null;
            this.items = new Array();

            $.extend(this, option);

            $(this).attr('autocomplete', 'off');

            // Focus
            $(this).on('focus', function() {
                this.request();
            });

            // Blur
            $(this).on('blur', function() {
                setTimeout(function(object) {
                    object.hide();
                }, 200, this);
            });

            // Keydown
            $(this).on('keydown', function(event) {
                switch(event.keyCode) {
                    case 27: // escape
                        this.hide();
                        break;
                    default:
                        this.request();
                        break;
                }
            });

            // Click
            this.click = function(event) {
                event.preventDefault();

                value = $(event.target).parent().attr('data-value');

                if (value && this.items[value]) {
                    this.select(this.items[value]);
                }
            }

            // Show
            this.show = function() {
                var pos = $(this).position();

                $(this).siblings('ul.dropdown-menu').css({
                    top: pos.top + $(this).outerHeight(),
                    left: pos.left
                });

                $(this).siblings('ul.dropdown-menu').show();
            }

            // Hide
            this.hide = function() {
                $(this).siblings('ul.dropdown-menu').hide();
            }

            // Request
            this.request = function() {
                clearTimeout(this.timer);

                this.timer = setTimeout(function(object) {
                    object.source($(object).val(), $.proxy(object.response, object));
                }, 200, this);
            }

            // Response
            this.response = function(json) {
                html = '';

                if (json.length) {
                    for (i = 0; i < json.length; i++) {
                        this.items[json[i]['value']] = json[i];
                    }

                    for (i = 0; i < json.length; i++) {
                        if (!json[i]['category']) {
                            html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
                        }
                    }

                    // Get all the ones with a categories
                    var category = new Array();

                    for (i = 0; i < json.length; i++) {
                        if (json[i]['category']) {
                            if (!category[json[i]['category']]) {
                                category[json[i]['category']] = new Array();
                                category[json[i]['category']]['name'] = json[i]['category'];
                                category[json[i]['category']]['item'] = new Array();
                            }

                            category[json[i]['category']]['item'].push(json[i]);
                        }
                    }

                    for (i in category) {
                        html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';

                        for (j = 0; j < category[i]['item'].length; j++) {
                            html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
                        }
                    }
                }

                if (html) {
                    this.show();
                } else {
                    this.hide();
                }

                $(this).siblings('ul.dropdown-menu').html(html);
            }

            $(this).after('<ul class="dropdown-menu"></ul>');
            $(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));

        });
    }
})(window.jQuery);

// ;(function( $, window, document, undefined )
// {
// $.fn.doubleTapToGo = function( params )
// {
// if( !( 'ontouchstart' in window ) &&
// !navigator.msMaxTouchPoints &&
// !navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

// this.each( function()
// {
// var curItem = false;

// $( this ).on( 'click', function( e )
// {
// var item = $( this );
// if( item[ 0 ] != curItem[ 0 ] )
// {
// e.preventDefault();
// curItem = item;
// }
// });

// $( document ).on( 'click touchstart MSPointerDown', function( e )
// {
// var resetItem = true,
// parents	  = $( e.target ).parents();

// for( var i = 0; i < parents.length; i++ )
// if( parents[ i ] == curItem[ 0 ] )
// resetItem = false;

// if( resetItem )
// curItem = false;
// });
// });
// return this;
// };
// })( jQuery, window, document );





var qview = function(product_id) {
    $('#modal-qview').remove();

    html  = '<div id="modal-qview" class="modal fade">';
    html += '  <div class="modal-dialog modal-lg">';
    html += '    <div class="modal-content">';
    html += '      <div class="modal-load-mask"><div><div><i class="fa fa-circle-o-notch fa-spin fa-2x fa-fw"></i></div></div></div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    $('body').append(html);

    $('#modal-qview').modal('show');

    $.ajax({
        url: 'index.php?route=extension/module/xds_qview&product_id=' + product_id,
        type: 'get',
        dataType: 'html',
        success: function(data) {
            $('#modal-qview .modal-load-mask').remove();
            $('#modal-qview .modal-content').prepend(data);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            $('#modal-qview .modal-load-mask .fa').remove();
            $('#modal-qview .modal-load-mask > div > div').prepend('<p>Connection error!</p><button class="btn btn-default btn-xs" data-dismiss="modal"><i class="fa fa-times"></i> close</button>');
        }
    });
}

var fastorder = function (product_id) {
    $('#modal-fastorder').remove();

    html  = '<div id="modal-fastorder" class="modal fade">';
    html += '  <div class="modal-dialog modal">';
    html += '    <div class="modal-content">';
    html += '      <div class="modal-load-mask"><div><div><i class="fa fa-circle-o-notch fa-spin fa-2x fa-fw"></i></div></div></div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    $('body').append(html);

    $('#modal-fastorder').modal('show');

    $.ajax({
        url: 'index.php?route=extension/module/xds_fastorder&product_id=' + product_id,
        type: 'get',
        dataType: 'html',
        success: function(data) {
            $('#modal-fastorder .modal-load-mask').remove();
            $('#modal-fastorder .modal-content').prepend(data);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            $('#modal-fastorder .modal-load-mask .fa').remove();
            $('#modal-fastorder .modal-load-mask > div > div').prepend('<p>Connection error!</p><button class="btn btn-default btn-xs" data-dismiss="modal"><i class="fa fa-times"></i> close</button>');
        }
    });


}

var callback = function() {
    $('#modal-callback').remove();

    html  = '<div id="modal-callback" class="modal fade">';
    html += '  <div class="modal-dialog modal-sm">';
    html += '    <div class="modal-content">';
    html += '      <div class="modal-load-mask"><div><div><i class="fa fa-circle-o-notch fa-spin fa-2x fa-fw"></i></div></div></div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    $('body').append(html);

    $('#modal-callback').modal('show');

    $.ajax({
        url: 'index.php?route=extension/module/xds_callback',
        type: 'get',
        dataType: 'html',
        success: function(data) {
            $('#modal-callback .modal-load-mask').remove();
            $('#modal-callback .modal-content').prepend(data);



        },
        error: function(xhr, ajaxOptions, thrownError) {
            $('#modal-callback .modal-load-mask .fa').remove();
            $('#modal-callback .modal-load-mask > div > div').prepend('<p>Connection error!</p><button class="btn btn-default btn-xs" data-dismiss="modal"><i class="fa fa-times"></i> close</button>');
        }
    });
}

































!function(t,e){function n(t,e,n){var r=t.children(),o=!1;t.empty();for(var i=0,d=r.length;d>i;i++){var l=r.eq(i);if(t.append(l),n&&t.append(n),a(t,e)){l.remove(),o=!0;break}n&&n.detach()}return o}function r(e,n,i,d,l){var s=!1,c="a table, thead, tbody, tfoot, tr, col, colgroup, object, embed, param, ol, ul, dl, blockquote, select, optgroup, option, textarea, script, style",u="script, .dotdotdot-keep";return e.contents().detach().each(function(){var f=this,h=t(f);if("undefined"==typeof f||3==f.nodeType&&0==t.trim(f.data).length)return!0;if(h.is(u))e.append(h);else{if(s)return!0;e.append(h),!l||h.is(d.after)||h.find(d.after).length||e[e.is(c)?"after":"append"](l),a(i,d)&&(s=3==f.nodeType?o(h,n,i,d,l):r(h,n,i,d,l),s||(h.detach(),s=!0)),s||l&&l.detach()}}),s}function o(e,n,r,o,d){var c=e[0];if(!c)return!1;var f=s(c),h=-1!==f.indexOf(" ")?" ":"гЂЂ",p="letter"==o.wrap?"":h,g=f.split(p),v=-1,w=-1,b=0,y=g.length-1;for(o.fallbackToLetter&&0==b&&0==y&&(p="",g=f.split(p),y=g.length-1);y>=b&&(0!=b||0!=y);){var m=Math.floor((b+y)/2);if(m==w)break;w=m,l(c,g.slice(0,w+1).join(p)+o.ellipsis),a(r,o)?(y=w,o.fallbackToLetter&&0==b&&0==y&&(p="",g=g[0].split(p),v=-1,w=-1,b=0,y=g.length-1)):(v=w,b=w)}if(-1==v||1==g.length&&0==g[0].length){var x=e.parent();e.detach();var T=d&&d.closest(x).length?d.length:0;x.contents().length>T?c=u(x.contents().eq(-1-T),n):(c=u(x,n,!0),T||x.detach()),c&&(f=i(s(c),o),l(c,f),T&&d&&t(c).parent().append(d))}else f=i(g.slice(0,v+1).join(p),o),l(c,f);return!0}function a(t,e){return t.innerHeight()>e.maxHeight}function i(e,n){for(;t.inArray(e.slice(-1),n.lastCharacter.remove)>-1;)e=e.slice(0,-1);return t.inArray(e.slice(-1),n.lastCharacter.noEllipsis)<0&&(e+=n.ellipsis),e}function d(t){return{width:t.innerWidth(),height:t.innerHeight()}}function l(t,e){t.innerText?t.innerText=e:t.nodeValue?t.nodeValue=e:t.textContent&&(t.textContent=e)}function s(t){return t.innerText?t.innerText:t.nodeValue?t.nodeValue:t.textContent?t.textContent:""}function c(t){do t=t.previousSibling;while(t&&1!==t.nodeType&&3!==t.nodeType);return t}function u(e,n,r){var o,a=e&&e[0];if(a){if(!r){if(3===a.nodeType)return a;if(t.trim(e.text()))return u(e.contents().last(),n)}for(o=c(a);!o;){if(e=e.parent(),e.is(n)||!e.length)return!1;o=c(e[0])}if(o)return u(t(o),n)}return!1}function f(e,n){return e?"string"==typeof e?(e=t(e,n),e.length?e:!1):e.jquery?e:!1:!1}function h(t){for(var e=t.innerHeight(),n=["paddingTop","paddingBottom"],r=0,o=n.length;o>r;r++){var a=parseInt(t.css(n[r]),10);isNaN(a)&&(a=0),e-=a}return e}if(!t.fn.dotdotdot){t.fn.dotdotdot=function(e){if(0==this.length)return t.fn.dotdotdot.debug('No element found for "'+this.selector+'".'),this;if(this.length>1)return this.each(function(){t(this).dotdotdot(e)});var o=this;o.data("dotdotdot")&&o.trigger("destroy.dot"),o.data("dotdotdot-style",o.attr("style")||""),o.css("word-wrap","break-word"),"nowrap"===o.css("white-space")&&o.css("white-space","normal"),o.bind_events=function(){return o.bind("update.dot",function(e,d){e.preventDefault(),e.stopPropagation(),l.maxHeight="number"==typeof l.height?l.height:h(o),l.maxHeight+=l.tolerance,"undefined"!=typeof d&&(("string"==typeof d||d instanceof HTMLElement)&&(d=t("<div />").append(d).contents()),d instanceof t&&(i=d)),g=o.wrapInner('<div class="dotdotdot" />').children(),g.contents().detach().end().append(i.clone(!0)).find("br").replaceWith("  <br />  ").end().css({height:"auto",width:"auto",border:"none",padding:0,margin:0});var c=!1,u=!1;return s.afterElement&&(c=s.afterElement.clone(!0),c.show(),s.afterElement.detach()),a(g,l)&&(u="children"==l.wrap?n(g,l,c):r(g,o,g,l,c)),g.replaceWith(g.contents()),g=null,t.isFunction(l.callback)&&l.callback.call(o[0],u,i),s.isTruncated=u,u}).bind("isTruncated.dot",function(t,e){return t.preventDefault(),t.stopPropagation(),"function"==typeof e&&e.call(o[0],s.isTruncated),s.isTruncated}).bind("originalContent.dot",function(t,e){return t.preventDefault(),t.stopPropagation(),"function"==typeof e&&e.call(o[0],i),i}).bind("destroy.dot",function(t){t.preventDefault(),t.stopPropagation(),o.unwatch().unbind_events().contents().detach().end().append(i).attr("style",o.data("dotdotdot-style")||"").data("dotdotdot",!1)}),o},o.unbind_events=function(){return o.unbind(".dot"),o},o.watch=function(){if(o.unwatch(),"window"==l.watch){var e=t(window),n=e.width(),r=e.height();e.bind("resize.dot"+s.dotId,function(){n==e.width()&&r==e.height()&&l.windowResizeFix||(n=e.width(),r=e.height(),u&&clearInterval(u),u=setTimeout(function(){o.trigger("update.dot")},100))})}else c=d(o),u=setInterval(function(){if(o.is(":visible")){var t=d(o);(c.width!=t.width||c.height!=t.height)&&(o.trigger("update.dot"),c=t)}},500);return o},o.unwatch=function(){return t(window).unbind("resize.dot"+s.dotId),u&&clearInterval(u),o};var i=o.contents(),l=t.extend(!0,{},t.fn.dotdotdot.defaults,e),s={},c={},u=null,g=null;return l.lastCharacter.remove instanceof Array||(l.lastCharacter.remove=t.fn.dotdotdot.defaultArrays.lastCharacter.remove),l.lastCharacter.noEllipsis instanceof Array||(l.lastCharacter.noEllipsis=t.fn.dotdotdot.defaultArrays.lastCharacter.noEllipsis),s.afterElement=f(l.after,o),s.isTruncated=!1,s.dotId=p++,o.data("dotdotdot",!0).bind_events().trigger("update.dot"),l.watch&&o.watch(),o},t.fn.dotdotdot.defaults={ellipsis:"... ",wrap:"word",fallbackToLetter:!0,lastCharacter:{},tolerance:0,callback:null,after:null,height:null,watch:!1,windowResizeFix:!0},t.fn.dotdotdot.defaultArrays={lastCharacter:{remove:[" ","гЂЂ",",",";",".","!","?"],noEllipsis:[]}},t.fn.dotdotdot.debug=function(){};var p=1,g=t.fn.html;t.fn.html=function(n){return n!=e&&!t.isFunction(n)&&this.data("dotdotdot")?this.trigger("update",[n]):g.apply(this,arguments)};var v=t.fn.text;t.fn.text=function(n){return n!=e&&!t.isFunction(n)&&this.data("dotdotdot")?(n=t("<div />").text(n).html(),this.trigger("update",[n])):v.apply(this,arguments)}}}(jQuery);

function adddotdotdot($element) {$(".custom-block h4, .custom-block p, .box-product .product-item .name, .cmswidget .description").dotdotdot();}
$(window).load(adddotdotdot);
$(window).resize(adddotdotdot);