$('#secondary .widget_nav_menu ul li.menu-item-has-children > a').on('click', function (event) {
        var theClass = 'open-li',
            $this = $(this).parent('li'),
            $container = $this.parent();
        //$('#secondary .widget_nav_menu .' + theClass).removeClass(theClass);
        if (!$this.hasClass(theClass)) {
            $container.find('.' + theClass).removeClass(theClass);
            $this.addClass(theClass);
        } else {
            $this.removeClass(theClass);
        }
        return false;
    });

    $('#secondary .widget_nav_menu .current-menu-ancestor').addClass('open-li');
    $('#secondary .widget_nav_menu .current-menu-item.menu-item-has-children').addClass('open-li');
