$(document).ready(function(){
    var arr = document.cookie.split(';');
    if (Array.isArray(arr) && arr[0] != '') {
        for (i = 0; i < arr.length; i++) {
            tmp = arr[i].split('=');
            makar(tmp[1]);
        }
    }
})

function aske() {
    var name = prompt("YOU ARE MONKEY?");
    if (name != '') {
        makar(name);
    }
}

function makar(name) {
    if (name != '') {
        $('#ft_list').prepend($('<div>' + name + '</div>').click(digrola));
        PARA_RARA_AEWDX(name);
    }
}

function digrola() {
    if (confirm("DELETE OR NO DELETE?")) {
       this.remove();
       delCookies(this.innerHTML);
    }
}

function PARA_RARA_AEWDX(name) {
    document.cookie = name + "=" + name + ";";
}

function delCookies(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
