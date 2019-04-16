var containerEl = document.querySelector('#j-products');
var range = document.querySelector('#j-filter-price');
var targetSelector = '.mix';
var activeHash = '';
$(function() {
    $('.content-tags').on('click', '.j-tag-button', function(e) {
        e.preventDefault();
        let tag = $(this),
                tagName = $.trim(tag.text()),
                checkbox = $('#j-filter').find('[data-tag="' + tagName + '"]');
        let btn = $('#j-filter').find('button.size-control[data-tag="'+tagName+'"]');
        if (checkbox.is(':checked')) {
            checkbox.trigger('click');
        }
        if(btn.hasClass('active')){
            btn.trigger('click');
        }
        tag.detach();
    });
    $("button.size-control").on('click',function (e){
        let btn = $(this);
        btn.toggleClass('active');
    });
    $('#j-sorter').on('click', '.dropdown-item', function(e) {
        e.preventDefault();
        let t = $.trim($(e.target).text());
        $("#sorter").text(t);
    });
    $('.filter-header').on('click', function(e) {
        e.preventDefault();
        let target = $(this).next('.filter-body.collapse'),
                ic = $(this).children('i.fas');
        if (target.hasClass('show')) {
            target.collapse('hide');
            ic.removeClass('fa-chevron-down');
            ic.addClass('fa-chevron-up');
        } else {
            target.collapse('show');
            ic.removeClass('fa-chevron-up');
            ic.addClass('fa-chevron-down');
        }
    });
    $('.filter-toogler').on('click', function(e) {
        e.preventDefault();
        $('#j-filter').toggleClass('flip');
        if ($('#j-filter').hasClass('flip')) {
            $('body').css('overflow-x', 'auto');
        } else {
            $('body').css('overflow-x', 'hidden');
        }
    });
});
$(document).ready(function() {
    $('#j-filter-price').rangeslider();
    $('.custom-control-input').on('change', evt => {
        let name = $(evt.target).data('tag');
        if ($(evt.target).is(':checked') === false) {
            if (name !== undefined || name !== "") {
                $('.content-tags').find('.j-tag-button:contains(' + name + ')').detach();
            }
        }
    });
});


/**
 * Deserializes a hash segment (if present) into in an object.
 *
 * @return {object|null}
 */

function deserializeHash() {
    var hash = window.location.hash.replace(/^#/g, '');
    var obj = null;
    var groups = [];

    if (!hash)
        return obj;

    obj = {};
    groups = hash.split('&');

    groups.forEach(function(group) {
        var pair = group.split('=');
        var groupName = pair[0];

        obj[groupName] = pair[1].split(',');
    });

    return obj;
}

/**
 * Serializes a groupsState object into a string.
 *
 * @param   {object}    groupsState
 * @return  {string}
 */

function serializeGroupsState(groupsState) {
    var output = '';

    for (var key in groupsState) {
        var values = groupsState[key];

        if (!values.length)
            continue;

        output += key + '=';
        output += values.join(',');
        output += '&';
    }
    ;

    output = output.replace(/&$/g, '');

    return output;
}

/**
 * Constructs a `groupsState` hash object using the
 * `getFilterGroupSelectors()` API method.
 *
 * @return {object}
 */

/**
 * Updates the URL hash whenever the current filter changes.
 *
 * @param   {mixitup.State} state
 * @return  {void}
 */
function setHash(state) {
    let pre = $(".preloader");
    if (!pre.hasClass('invisible')) {
        pre.addClass('invisible');
    }
    var selector = state.activeFilter.selector;
    var groupsState = getGroupsState();
    for (let i in groupsState) {
        if (groupsState[i].length > 0) {
            checkTags(groupsState[i], i);
        }
    }
    setNumbers(state);
    var newHash = '#' + serializeGroupsState(groupsState);
    if (selector === targetSelector && window.location.hash) {
        activeHash = '';

        history.pushState(null, document.title, window.location.search);
    } else if (newHash !== window.location.hash && selector !== targetSelector) {
        activeHash = newHash;

        history.pushState(null, document.title, window.location.search + newHash);
    }
}
/**
 * Filters the mixer and updates the multifilter UI using a provided
 * groupsState object.
 *
 * @param  {object|null}    groupsState
 * @param  {boolean}        [animate]
 * @return {Promise}
 */

/**
 * Converts a selector (e.g. '.green') into a simple value (e.g. 'green').
 *
 * @param   {string} selector
 * @return  {string}
 */

function getValueFromSelector(selector) {
    return selector.replace(/^./, '');
}

/**
 * Converts a simple value (e.g. 'green') into a selector (e.g. '.green').
 * @param {string} value
 * @returns {String}
 */
function getSelectorFromValue(value) {
    return '.' + value;
}

var groupsState = deserializeHash();
var mixer = mixitup(containerEl, {
    multifilter: {
        enable: true
    },
    load: {
        sort: 'default:desc'
    },
    selectors: {
        control: '[data-mix-control]'
    },
    controls: {
        toggleLogic: 'and',
        toggleDefault: 'all'
    },
    callbacks: {
        onMixStart: preloadActive,
        onMixEnd: setHash
    }
});
function getRange() {
    return Number(range.value);
}
if (groupsState) {
    filterMixerByGroupsState(groupsState);
}
window.onhashchange = function() {
    var groupsState = deserializeHash();
    var hash = window.location.hash;

    if (hash === activeHash)
        return; // no change

    activeHash = hash;

    var groupsState = deserializeHash();
    filterMixerByGroupsState(groupsState, true);
    
};
function addTag(name, val, grp) {
    let btn = '<button class="btn btn-outline-dark j-tag-button mb-1" data-tag-group="' + grp + '" data-tag-target="' + val + '">' + name + '</button>';
    $('.content-tags').append(btn);
}
function checkTags(tagInfo, group) {
    if (typeof (tagInfo) !== "string") {
        for (let i in tagInfo)
            checkTags(tagInfo[i], group);
    } else {
        let tagFromInput = $('[data-filter-group="' + group + '"]').find('input[value=".' + tagInfo + '"]').data('tag');
        if ($('.content-tags').find('.j-tag-button:contains(' + tagFromInput + ')').length === 0 && tagFromInput !== undefined) {
            addTag(tagFromInput, tagInfo, group);
        } else {
            let tag = $('[data-filter-group="' + group + '"]').find('button.size-control[data-toggle=".'+ tagInfo +'"]').data('tag');
            if($('.content-tags').find('button[data-tag-target="'+tagInfo+'"]').length === 0){
                addTag(tag, tagInfo, group);
            }
        }
    }
}

function setNumbers(state){
    let num = state.show.length;
    if (num) {
        if (num > 0) {
            $(".summ").text("(" + num + ")");
        } else {
            $(".summ").text("");
        }
    } else if(num == 0 && state.hide.length > 0 ) {
        $(".summ").text("");
        $("#j-hide").text(state.hide.length);
        $("#j-filter-empty").removeClass('d-none');
    }
}

function handleRangeInputChange() {
    mixer.filter(mixer.getState().activeFilter);
}


function filterTestResult(testResult, target) {
    var size = Number(target.dom.el.getAttribute('data-price'));
    var r = getRange();
    if (size > r) {
        testResult = false;
    }
    return testResult;
}

mixitup.Mixer.registerFilter('testResultEvaluateHideShow', 'range', filterTestResult);
range.addEventListener('change', handleRangeInputChange);
