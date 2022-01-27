// File#: _1_alert
// Usage: codyhouse.co/license
(function() {
    var alertClose = document.getElementsByClassName('js-alert__close-btn');
    if( alertClose.length > 0 ) {
      for( var i = 0; i < alertClose.length; i++) {
        (function(i){initAlertEvent(alertClose[i]);})(i);
      }
    };
  }());

  function initAlertEvent(element) {
    element.addEventListener('click', function(event){
      event.preventDefault();
      Util.removeClass(element.closest('.js-alert'), 'alert--is-visible');
    });
  };


  // File#: _1_tooltip
// Usage: codyhouse.co/license
(function() {
    var Tooltip = function(element) {
      this.element = element;
      this.tooltip = false;
      this.tooltipIntervalId = false;
      this.tooltipContent = this.element.getAttribute('title');
      this.tooltipPosition = (this.element.getAttribute('data-tooltip-position')) ? this.element.getAttribute('data-tooltip-position') : 'top';
      this.tooltipClasses = (this.element.getAttribute('data-tooltip-class')) ? this.element.getAttribute('data-tooltip-class') : false;
      this.tooltipId = 'js-tooltip-element'; // id of the tooltip element -> trigger will have the same aria-describedby attr
      // there are cases where you only need the aria-label -> SR do not need to read the tooltip content (e.g., footnotes)
      this.tooltipDescription = (this.element.getAttribute('data-tooltip-describedby') && this.element.getAttribute('data-tooltip-describedby') == 'false') ? false : true;

      this.tooltipDelay = 300; // show tooltip after a delay (in ms)
      this.tooltipDelta = 10; // distance beetwen tooltip and trigger element (in px)
      this.tooltipTriggerHover = false;
      // tooltp sticky option
      this.tooltipSticky = (this.tooltipClasses && this.tooltipClasses.indexOf('tooltip--sticky') > -1);
      this.tooltipHover = false;
      if(this.tooltipSticky) {
        this.tooltipHoverInterval = false;
      }
      resetTooltipContent(this);
      initTooltip(this);
    };

    function resetTooltipContent(tooltip) {
      var htmlContent = tooltip.element.getAttribute('data-tooltip-title');
      if(htmlContent) {
        tooltip.tooltipContent = htmlContent;
      }
    };

    function initTooltip(tooltipObj) {
      // reset trigger element
      tooltipObj.element.removeAttribute('title');
      tooltipObj.element.setAttribute('tabindex', '0');
      // add event listeners
      tooltipObj.element.addEventListener('mouseenter', handleEvent.bind(tooltipObj));
      tooltipObj.element.addEventListener('focus', handleEvent.bind(tooltipObj));
    };

    function removeTooltipEvents(tooltipObj) {
      // remove event listeners
      tooltipObj.element.removeEventListener('mouseleave',  handleEvent.bind(tooltipObj));
      tooltipObj.element.removeEventListener('blur',  handleEvent.bind(tooltipObj));
    };

    function handleEvent(event) {
      // handle events
      switch(event.type) {
        case 'mouseenter':
        case 'focus':
          showTooltip(this, event);
          break;
        case 'mouseleave':
        case 'blur':
          checkTooltip(this);
          break;
      }
    };

    function showTooltip(tooltipObj, event) {
      // tooltip has already been triggered
      if(tooltipObj.tooltipIntervalId) return;
      tooltipObj.tooltipTriggerHover = true;
      // listen to close events
      tooltipObj.element.addEventListener('mouseleave', handleEvent.bind(tooltipObj));
      tooltipObj.element.addEventListener('blur', handleEvent.bind(tooltipObj));
      // show tooltip with a delay
      tooltipObj.tooltipIntervalId = setTimeout(function(){
        createTooltip(tooltipObj);
      }, tooltipObj.tooltipDelay);
    };

    function createTooltip(tooltipObj) {
      tooltipObj.tooltip = document.getElementById(tooltipObj.tooltipId);

      if( !tooltipObj.tooltip ) { // tooltip element does not yet exist
        tooltipObj.tooltip = document.createElement('div');
        document.body.appendChild(tooltipObj.tooltip);
      }

      // reset tooltip content/position
      Util.setAttributes(tooltipObj.tooltip, {'id': tooltipObj.tooltipId, 'class': 'tooltip tooltip--is-hidden js-tooltip', 'role': 'tooltip'});
      tooltipObj.tooltip.innerHTML = tooltipObj.tooltipContent;
      if(tooltipObj.tooltipDescription) tooltipObj.element.setAttribute('aria-describedby', tooltipObj.tooltipId);
      if(tooltipObj.tooltipClasses) Util.addClass(tooltipObj.tooltip, tooltipObj.tooltipClasses);
      if(tooltipObj.tooltipSticky) Util.addClass(tooltipObj.tooltip, 'tooltip--sticky');
      placeTooltip(tooltipObj);
      Util.removeClass(tooltipObj.tooltip, 'tooltip--is-hidden');

      // if tooltip is sticky, listen to mouse events
      if(!tooltipObj.tooltipSticky) return;
      tooltipObj.tooltip.addEventListener('mouseenter', function cb(){
        tooltipObj.tooltipHover = true;
        if(tooltipObj.tooltipHoverInterval) {
          clearInterval(tooltipObj.tooltipHoverInterval);
          tooltipObj.tooltipHoverInterval = false;
        }
        tooltipObj.tooltip.removeEventListener('mouseenter', cb);
        tooltipLeaveEvent(tooltipObj);
      });
    };

    function tooltipLeaveEvent(tooltipObj) {
      tooltipObj.tooltip.addEventListener('mouseleave', function cb(){
        tooltipObj.tooltipHover = false;
        tooltipObj.tooltip.removeEventListener('mouseleave', cb);
        hideTooltip(tooltipObj);
      });
    };

    function placeTooltip(tooltipObj) {
      // set top and left position of the tooltip according to the data-tooltip-position attr of the trigger
      var dimention = [tooltipObj.tooltip.offsetHeight, tooltipObj.tooltip.offsetWidth],
        positionTrigger = tooltipObj.element.getBoundingClientRect(),
        position = [],
        scrollY = window.scrollY || window.pageYOffset;

      position['top'] = [ (positionTrigger.top - dimention[0] - tooltipObj.tooltipDelta + scrollY), (positionTrigger.right/2 + positionTrigger.left/2 - dimention[1]/2)];
      position['bottom'] = [ (positionTrigger.bottom + tooltipObj.tooltipDelta + scrollY), (positionTrigger.right/2 + positionTrigger.left/2 - dimention[1]/2)];
      position['left'] = [(positionTrigger.top/2 + positionTrigger.bottom/2 - dimention[0]/2 + scrollY), positionTrigger.left - dimention[1] - tooltipObj.tooltipDelta];
      position['right'] = [(positionTrigger.top/2 + positionTrigger.bottom/2 - dimention[0]/2 + scrollY), positionTrigger.right + tooltipObj.tooltipDelta];

      var direction = tooltipObj.tooltipPosition;
      if( direction == 'top' && position['top'][0] < scrollY) direction = 'bottom';
      else if( direction == 'bottom' && position['bottom'][0] + tooltipObj.tooltipDelta + dimention[0] > scrollY + window.innerHeight) direction = 'top';
      else if( direction == 'left' && position['left'][1] < 0 )  direction = 'right';
      else if( direction == 'right' && position['right'][1] + dimention[1] > window.innerWidth ) direction = 'left';

      if(direction == 'top' || direction == 'bottom') {
        if(position[direction][1] < 0 ) position[direction][1] = 0;
        if(position[direction][1] + dimention[1] > window.innerWidth ) position[direction][1] = window.innerWidth - dimention[1];
      }
      tooltipObj.tooltip.style.top = position[direction][0]+'px';
      tooltipObj.tooltip.style.left = position[direction][1]+'px';
      Util.addClass(tooltipObj.tooltip, 'tooltip--'+direction);
    };

    function checkTooltip(tooltipObj) {
      tooltipObj.tooltipTriggerHover = false;
      if(!tooltipObj.tooltipSticky) hideTooltip(tooltipObj);
      else {
        if(tooltipObj.tooltipHover) return;
        if(tooltipObj.tooltipHoverInterval) return;
        tooltipObj.tooltipHoverInterval = setTimeout(function(){
          hideTooltip(tooltipObj);
          tooltipObj.tooltipHoverInterval = false;
        }, 300);
      }
    };

    function hideTooltip(tooltipObj) {
      if(tooltipObj.tooltipHover || tooltipObj.tooltipTriggerHover) return;
      clearInterval(tooltipObj.tooltipIntervalId);
      if(tooltipObj.tooltipHoverInterval) {
        clearInterval(tooltipObj.tooltipHoverInterval);
        tooltipObj.tooltipHoverInterval = false;
      }
      tooltipObj.tooltipIntervalId = false;
      if(!tooltipObj.tooltip) return;
      // hide tooltip
      removeTooltip(tooltipObj);
      // remove events
      removeTooltipEvents(tooltipObj);
    };

    function removeTooltip(tooltipObj) {
      if(tooltipObj.tooltipContent == tooltipObj.tooltip.innerHTML) {
        Util.addClass(tooltipObj.tooltip, 'tooltip--is-hidden');
      }
      if(tooltipObj.tooltipDescription) tooltipObj.element.removeAttribute('aria-describedby');
    };

    window.Tooltip = Tooltip;

    //initialize the Tooltip objects
    var tooltips = document.getElementsByClassName('js-tooltip-trigger');
    if( tooltips.length > 0 ) {
      for( var i = 0; i < tooltips.length; i++) {
        (function(i){new Tooltip(tooltips[i]);})(i);
      }
    }
  }());

  // File#: _1_tabs
// Usage: codyhouse.co/license
(function() {
    var Tab = function(element) {
      this.element = element;
      this.tabList = this.element.getElementsByClassName('js-tabs__controls')[0];
      this.listItems = this.tabList.getElementsByTagName('li');
      this.triggers = this.tabList.getElementsByTagName('a');
      this.panelsList = this.element.getElementsByClassName('js-tabs__panels')[0];
      this.panels = Util.getChildrenByClassName(this.panelsList, 'js-tabs__panel');
      this.hideClass = 'is-hidden';
      this.customShowClass = this.element.getAttribute('data-show-panel-class') ? this.element.getAttribute('data-show-panel-class') : false;
      this.layout = this.element.getAttribute('data-tabs-layout') ? this.element.getAttribute('data-tabs-layout') : 'horizontal';
      // deep linking options
      this.deepLinkOn = this.element.getAttribute('data-deep-link') == 'on';
      // init tabs
      this.initTab();
    };

    Tab.prototype.initTab = function() {
      //set initial aria attributes
      this.tabList.setAttribute('role', 'tablist');
      for( var i = 0; i < this.triggers.length; i++) {
        var bool = (i == 0),
          panelId = this.panels[i].getAttribute('id');
        this.listItems[i].setAttribute('role', 'presentation');
        Util.setAttributes(this.triggers[i], {'role': 'tab', 'aria-selected': bool, 'aria-controls': panelId, 'id': 'tab-'+panelId});
        Util.addClass(this.triggers[i], 'js-tabs__trigger');
        Util.setAttributes(this.panels[i], {'role': 'tabpanel', 'aria-labelledby': 'tab-'+panelId});
        Util.toggleClass(this.panels[i], this.hideClass, !bool);

        if(!bool) this.triggers[i].setAttribute('tabindex', '-1');
      }

      //listen for Tab events
      this.initTabEvents();

      // check deep linking option
      this.initDeepLink();
    };

    Tab.prototype.initTabEvents = function() {
      var self = this;
      //click on a new tab -> select content
      this.tabList.addEventListener('click', function(event) {
        if( event.target.closest('.js-tabs__trigger') ) self.triggerTab(event.target.closest('.js-tabs__trigger'), event);
      });
      //arrow keys to navigate through tabs
      this.tabList.addEventListener('keydown', function(event) {
        ;
        if( !event.target.closest('.js-tabs__trigger') ) return;
        if( tabNavigateNext(event, self.layout) ) {
          event.preventDefault();
          self.selectNewTab('next');
        } else if( tabNavigatePrev(event, self.layout) ) {
          event.preventDefault();
          self.selectNewTab('prev');
        }
      });
    };

    Tab.prototype.selectNewTab = function(direction) {
      var selectedTab = this.tabList.querySelector('[aria-selected="true"]'),
        index = Util.getIndexInArray(this.triggers, selectedTab);
      index = (direction == 'next') ? index + 1 : index - 1;
      //make sure index is in the correct interval
      //-> from last element go to first using the right arrow, from first element go to last using the left arrow
      if(index < 0) index = this.listItems.length - 1;
      if(index >= this.listItems.length) index = 0;
      this.triggerTab(this.triggers[index]);
      this.triggers[index].focus();
    };

    Tab.prototype.triggerTab = function(tabTrigger, event) {
      var self = this;
      event && event.preventDefault();
      var index = Util.getIndexInArray(this.triggers, tabTrigger);
      //no need to do anything if tab was already selected
      if(this.triggers[index].getAttribute('aria-selected') == 'true') return;

      for( var i = 0; i < this.triggers.length; i++) {
        var bool = (i == index);
        Util.toggleClass(this.panels[i], this.hideClass, !bool);
        if(this.customShowClass) Util.toggleClass(this.panels[i], this.customShowClass, bool);
        this.triggers[i].setAttribute('aria-selected', bool);
        bool ? this.triggers[i].setAttribute('tabindex', '0') : this.triggers[i].setAttribute('tabindex', '-1');
      }

      // update url if deepLink is on
      if(this.deepLinkOn) {
        history.replaceState(null, '', '#'+tabTrigger.getAttribute('aria-controls'));
      }
    };

    Tab.prototype.initDeepLink = function() {
      if(!this.deepLinkOn) return;
      var hash = window.location.hash.substr(1);
      var self = this;
      if(!hash || hash == '') return;
      for(var i = 0; i < this.panels.length; i++) {
        if(this.panels[i].getAttribute('id') == hash) {
          this.triggerTab(this.triggers[i], false);
          setTimeout(function(){self.panels[i].scrollIntoView(true);});
          break;
        }
      };
    };

    function tabNavigateNext(event, layout) {
      if(layout == 'horizontal' && (event.keyCode && event.keyCode == 39 || event.key && event.key == 'ArrowRight')) {return true;}
      else if(layout == 'vertical' && (event.keyCode && event.keyCode == 40 || event.key && event.key == 'ArrowDown')) {return true;}
      else {return false;}
    };

    function tabNavigatePrev(event, layout) {
      if(layout == 'horizontal' && (event.keyCode && event.keyCode == 37 || event.key && event.key == 'ArrowLeft')) {return true;}
      else if(layout == 'vertical' && (event.keyCode && event.keyCode == 38 || event.key && event.key == 'ArrowUp')) {return true;}
      else {return false;}
    };

    //initialize the Tab objects
    var tabs = document.getElementsByClassName('js-tabs');
    if( tabs.length > 0 ) {
      for( var i = 0; i < tabs.length; i++) {
        (function(i){new Tab(tabs[i]);})(i);
      }
    }
  }());
