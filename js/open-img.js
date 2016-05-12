document.getElementById('imgInp').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
        files = tgt.files;

    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById('img-usuario').src = fr.result;
            document.getElementById('img-user1').src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }
}

document.getElementById('imgWall').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
        files = tgt.files;

    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById('img-wallpaper').src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }
}
