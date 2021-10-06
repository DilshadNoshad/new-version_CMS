var input = document.querySelectorAll('.input');

function func_one(){
    let addclass = this.parentNode.parentNode;
    addclass.classList.add('focus');
}
function func_two(){
    let addclass = this.parentNode.parentNode;
   if(this.value == ""){
    addclass.classList.remove('focus');
    }
}

input.forEach(input => {
    input.addEventListener('focus', func_one);
    input.addEventListener('blur', func_two);
});