var strGET = window.location.search.replace('?', '');
console.log(strGET.split('?')[0]);
if (strGET.length > 0) {
    var sp = strGET.split('?');
    var id = sp[0];
    var list = sp[1].split('^');
    console.log(list);
    var fl_add_job = false;
    list.forEach(el => {
        var key_val = el.split("|");
        console.log(key_val);
        if (key_val[1] !== '') {
            fl_add_job = true;
            try {
                document.getElementsByName(key_val[0])[0].value = key_val[1].replaceAll('%20', " ");
            } catch (error) {
                console.log(error);
                console.log(key_val[0] + " " + key_val[1]);
            }
        }
    })

    if (fl_add_job) {
        var myModal = new bootstrap.Modal(document.getElementById(id), {
            keyboard: false
        });
        myModal.toggle();
    }
}