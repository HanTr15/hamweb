function copyText(copytexta) {
    var copyText = document.getElementById(copytexta);
    copyText.select();
    copyText.classList.toggle("copied");
    document.execCommand("copy");
  }