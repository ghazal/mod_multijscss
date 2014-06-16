window.addEvent('domready', function(){
    var l = 50;
    document.getElements('.text-container').each(function(el){
        var str = el.innerHTML;
        if(str.length>l){
            str = str.substring(0, l-3);
            str += '...';
            el.innerHTML = str.toString();
        }
    });
});