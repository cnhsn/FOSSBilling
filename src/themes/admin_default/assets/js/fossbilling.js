/*eslint no-unused-vars: ["error", { "varsIgnorePattern": "boxbilling" }]*/

var bb = {
  post: function (url, params, jsonp) {
    $.ajax({
      type: "POST",
      url: bb.restUrl(url),
      data: params,
      dataType: 'json',
      error: function (jqXHR, textStatus, e) {
        FOSSBilling.message(e, 'error');
      },
      success: function (data) {
        if (data.error) {
          FOSSBilling.message(data.error.message, 'error');
        } else {
          if (typeof jsonp === 'function') {
            return jsonp(data.result);
          } else if (window.hasOwnProperty('console')) {
            console.log(data.result);
          }
        }
      }
    });
  },
  get: function (url, params, jsonp) {
    $.ajax({
      type: "GET",
      url: bb.restUrl(url),
      data: params,
      dataType: 'json',
      error: function (jqXHR, textStatus, e) {
        FOSSBilling.message(e, 'error');
      },
      success: function (data) {
        if (data.error) {
          FOSSBilling.message(data.error.message, 'error');
        } else {
          if (typeof jsonp === 'function') {
            return jsonp(data.result);
          } else if (window.hasOwnProperty('console')) {
            console.log(data.result);
          }
        }
      }
    });
  },
  restUrl: function (url) {
    if (url.indexOf('http://') > -1 || url.indexOf('https://') > -1) {
      return url;
    }
    return $('meta[property="bb:url"]').attr("content") + 'index.php?_url=/api/' + url;
  },
  error: function (txt, code) {
    jAlert(txt, 'Error code: ' + code);
  },
  /**
   * @deprecated Will be removed after testing. Use FOSSBilling.message()
   */
  msg: function (txt, type) {
    FOSSBilling.message(txt, type);
  },
  redirect: function (url) {
    if (url === undefined) {
      this.reload();

    }
    window.location = url;
  },
  reload: function () {
    window.location.reload(true);
  },
  load: function (url, params) {
    var r = '';

    $.ajax({
      url: url,
      data: params,
      type: "GET",
      success: function (data) {
        r = data;
      },
      async: false
    });

    return r;
  },
  _afterComplete: function (obj, result) {
    var jsonp = obj.attr('data-api-jsonp');

    if (jsonp !== undefined && window.hasOwnProperty(jsonp)) {
      return window[jsonp](result);
    }

    if (obj.hasClass('bb-rm-tr')) {
      obj.closest('tr').addClass('highlight').fadeOut();

      return;
    }

    if (obj.attr('data-api-reload') !== undefined) {
      this.reload();

      return;
    }

    if (obj.attr('data-api-redirect') !== undefined) {
      return this.redirect(obj.attr('data-api-redirect'));
    }

    if (obj.attr('data-api-msg') !== undefined) {
      FOSSBilling.message(obj.attr('data-api-msg'), 'success');

      return;
    }

    if (result) {
      FOSSBilling.message('Form updated', 'success');

      return;
    }
  },
  apiForm: function () {
    $('form.api-form').bind('submit', function () {
      var obj = $(this);

      bb.post(obj.attr('action'), obj.serialize(), function (result) {
        return bb._afterComplete(obj, result);
      });

      return false;
    });
  },
  apiLink: function () {
    $("a.api-link").bind('click', function () {
      var obj = $(this);
      if (obj.attr('data-api-confirm') !== undefined) {
        // jConfirm(obj.attr('data-api-confirm'), 'Confirm your action', function (r) {
        //   if (r) bb.get(obj.attr('href'), {}, function (result) { return bb._afterComplete(obj, result); });
        // });
        if (confirm(obj.attr('data-api-confirm'))) {
          bb.get(obj.attr('href'), {}, function (result) {
            return bb._afterComplete(obj, result);
          });
        }
      } else if (obj.attr('data-api-prompt') !== undefined) {
        jPrompt(obj.attr('data-api-prompt-text'), obj.attr('data-api-prompt-default'), obj.attr('data-api-prompt-title'), function (r) {
          if (r) {
            var p = {};
            var name = obj.attr('data-api-prompt-key');
            p[name] = r;
            bb.get(obj.attr('href'), p, function (result) { return bb._afterComplete(obj, result); });
          }
        });
      } else {
        bb.get(obj.attr('href'), {}, function (result) { return bb._afterComplete(obj, result); });
      }
      return false;
    });
  },
  menuAutoActive: function () {
    var matches = $('ul#menu li a').filter(function () {
      return document.location.href == this.href;
    });
    matches.parents('li').addClass('active');
  },
  cookieCreate: function (name, value, days) {
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
  },
  cookieRead: function (name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  },
  insertToTextarea: function (areaId, text) {
    var txtarea = document.getElementById(areaId);
    var scrollPos = txtarea.scrollTop;
    var strPos = 0;
    var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ?
      "ff" : (document.selection ? "ie" : false));
    if (br == "ie") {
      txtarea.focus();
      var range = document.selection.createRange();
      range.moveStart('character', -txtarea.value.length);
      strPos = range.text.length;
    }
    else if (br == "ff") strPos = txtarea.selectionStart;

    var front = (txtarea.value).substring(0, strPos);
    var back = (txtarea.value).substring(strPos, txtarea.value.length);
    txtarea.value = front + text + back;
    strPos = strPos + text.length;
    if (br == "ie") {
      txtarea.focus();
      var range = document.selection.createRange();
      range.moveStart('character', -txtarea.value.length);
      range.moveStart('character', strPos);
      range.moveEnd('character', 0);
      range.select();
    }
    else if (br == "ff") {
      txtarea.selectionStart = strPos;
      txtarea.selectionEnd = strPos;
      txtarea.focus();
    }
    txtarea.scrollTop = scrollPos;
    if ('undefined' !== typeof CKEDITOR) {
      CKEDITOR.instances[areaId].insertText(text);
    }

    return false
  }
}

//===== Tabs =====//
$.fn.simpleTabs = function () {

  //Default Action
  $(this).find(".tab_content").hide(); //Hide all content
  $(this).find("ul.tabs li:first").addClass("activeTab").show(); //Activate first tab
  $(this).find(".tab_content:first").show(); //Show first tab content

  //On Click Event
  $("ul.tabs li").click(function () {
    $(this).parent().parent().find("ul.tabs li").removeClass("activeTab"); //Remove any "active" class
    $(this).addClass("activeTab"); //Add "active" class to selected tab
    $(this).parent().parent().find(".tab_content").hide(); //Hide all tab content
    var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
    $(activeTab).show(); //Fade in the active content
    //document.location.hash = activeTab;
    return false;
  });

  // select active tab
  if ($(document.location.hash).length) {
    $('a[href="' + document.location.hash + '"]').parent().click();
    $(window).scrollTo(window.location.href.indexOf('#'))
  }

};//end function

const FOSSBilling = {
  message: (message, type = 'info') => {
    switch (type) {
      case 'error':
        color = 'danger';
        break;
      case 'warning':
        color = 'warning';
        break;
      default:
        color = 'primary';
    }

    const container = document.createElement('div');
    container.classList.add('position-fixed', 'bottom-0', 'end-0', 'p-3');
    container.style.zIndex = 1070;

    const element = document.createElement('div');
    element.setAttribute('id', 'liveToast');
    element.classList.add('toast');
    element.setAttribute('role', 'alert');
    element.setAttribute('aria-live', 'assertive');
    element.setAttribute('aria-atomic', 'true');

    element.innerHTML = `
            <div class="toast-header">
                <span class="p-2 border border-light bg-${color} rounded-circle me-2"></span>
                <strong class="me-auto">System message</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">${message}</div>
        `;

    element.addEventListener('hidden.bs.toast', () => {
      container.remove();
    });

    const toast = new bootstrap.Toast(element);

    container.appendChild(element);

    document.querySelector('body').appendChild(container);

    toast.show();
  }
};

// Fallback for modules that still use the old "boxbilling" object. It will display deprecation warnings in the console and will be removed entirely in the future.
const boxbilling = {
  message: (message, type = 'info') => {
    console.warn('The "boxbilling" object is deprecated and will be removed in a future release. Use FOSSBilling.message() instead.');
    FOSSBilling.message(message, type);
  }
}

$(function () {

  //===== Global ajax methods =====//
  $('.loading').ajaxStart(function () {
    $(this).show();
  }).ajaxStop(function () {
    $(this).hide();
  });

  //===== Api forms and links =====//
  if ($("form.api-form").length) { bb.apiForm(); }
  if ($("a.api-link").length) { bb.apiLink(); }
  //if($("ul#menu").length){bb.menuAutoActive();}

  // Initialize backToTop
  FOSSBilling.backToTop();

  //===== Datepickers =====//
  $(".datepicker").datepicker({
    defaultDate: +7,
    autoSize: true,
    //appendText: '(yyyy-mm-dd)',
    dateFormat: 'yy-mm-dd'
  });

  //===== Form elements styling =====//
  // $(".mainForm select, .mainForm input:checkbox, .mainForm input:radio, .mainForm input:file").uniform();
  $(".mainForm input:checkbox, .mainForm input:radio, .mainForm input:file").uniform();

  $("div.simpleTabs").simpleTabs();


  $(document).delegate('div.msg span.close', 'click', function () {
    $(this).parent().slideUp(70);
    return false;
  });

  //===== Information boxes =====//
  $(".hideit").click(function () {
    $(this).fadeOut(400);
  });

  $("select.js-language-selector").bind('change', function () {
    bb.cookieCreate('BBLANG', $(this).val(), 7);
    bb.reload();
    
    return false;
  }).val(bb.cookieRead('BBLANG'));
});