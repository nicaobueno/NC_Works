function name() {
    var btn = document.createElement("button");
    btn.innerHTML = 'button';
    var ver = document.getElementById('vermais')
    ver.appendChild(btn);
    var btnver = document.getElementById('bnt_vermais')
    btnver.insertBefore(btn, null);
}
