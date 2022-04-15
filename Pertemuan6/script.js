function insert(num) {
    document.form.hasil.value = document.form.hasil.value+num;
}
  
function equal() {
    const total = document.form.hasil.value;
    if(total) {
        document.form.hasil.value = eval(total);
    }
}

function clear() {
    document.form.hasil.value = 0;
}

function back() {
    const total = document.form.hasil.value;
    document.form.hasil.value = total.substring(0, total.length - 1);
}