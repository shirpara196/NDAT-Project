/* Lazy Loading S */
function LazyLoading() {
    function logElementEvent(eventName, element) {
        console.log(Date.now(), eventName, element.getAttribute("data-src"));
    }
    var callback_enter = function (element) {
    
    };
    var callback_exit = function (element) {
    
    };
    var callback_loading = function (element) {
    
    };
    var callback_loaded = function (element) {
    
    };
    var callback_error = function (element) {     
    element.src = site_url + "/assets/images/no-image.png";      
    };
    var callback_finish = function () {
    
    };
    var callback_cancel = function (element) {
    
    };
    var ll = new LazyLoad({
        threshold: 0,
        callback_enter: callback_enter,
        callback_exit: callback_exit,
        callback_cancel: callback_cancel,
        callback_loading: callback_loading,
        callback_loaded: callback_loaded,
        callback_error: callback_error,
        callback_finish: callback_finish
    });
}
LazyLoading();
/* Lazy Loading E */