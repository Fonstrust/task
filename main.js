let flexShadows = document.getElementsByClassName('flex-item-shadow');
let flexCount = flexShadows.length;

flexShadows[2].nextElementSibling.classList.add['hide'];
        flexShadows[2].parentElement.children[3].classList.remove['hide'];

for (let i = 0; i < flexCount; i++) {
    flexShadows[i].addEventListener('mouseenter', onHover);
    flexShadows[i].addEventListener('mouseleave', outOf);
    flexShadows[i].addEventListener('click', select);
    flexShadows[i].nextElementSibling.children[0].children[0].addEventListener('click', select);
    
    if (flexShadows[i].dataset.disable == 1) {
        flexShadows[i].classList.remove('default-shadow');
        flexShadows[i].classList.add('disabled-shadow');
        flexShadows[i].children[0].classList.add('disabled-mask-shadow');
        flexShadows[i].children[1].children[6].classList.remove('default-color');
        flexShadows[i].children[1].children[6].classList.add('disabled-color');
        flexShadows[i].nextElementSibling.classList.add('hide');     flexShadows[i].nextElementSibling.nextElementSibling.nextElementSibling.classList.remove('hide');
    }
}
        

function onHover() {
    if (this.classList.contains('default-shadow')) {
        this.classList.remove('default-shadow');
        this.classList.add('default-hover-shadow');
        this.children[1].children[6].classList.remove('default-color');
        this.children[1].children[6].classList.add('default-hover-color');
        this.nextElementSibling.children[0].children[0].classList.remove('default-text');
        this.nextElementSibling.children[0].children[0].classList.add('default-hover-text');         
    } else if (this.classList.contains('selected-shadow') && this.classList.contains('flag')) {
        this.classList.remove('selected-shadow');
        this.classList.add('selected-hover-shadow');
        this.children[1].children[6].classList.remove('selected-color');
        this.children[1].children[6].classList.add('selected-hover-color');
        this.children[1].children[0].classList.add('selected-hover-text');
        this.children[1].children[0].innerHTML = 'Котэ не одобряет?';
    }    
    
}

function outOf() {
    if (this.classList.contains('default-hover-shadow')) {
        this.classList.remove('default-hover-shadow');
        this.classList.add('default-shadow');
        this.children[1].children[6].classList.remove('default-hover-color');
        this.children[1].children[6].classList.add('default-color');
        this.nextElementSibling.children[0].children[0].classList.remove('default-hover-text');
        this.nextElementSibling.children[0].children[0].classList.add('default-text');
    } else if (this.classList.contains('selected-hover-shadow')) {
        this.classList.remove('selected-hover-shadow');
        this.classList.add('selected-shadow');
        this.children[1].children[6].classList.remove('selected-hover-color');
        this.children[1].children[6].classList.add('selected-color');
        this.children[1].children[0].classList.remove('selected-hover-text');
        this.children[1].children[0].innerHTML = 'Сказачное заморское яство';
    } else if (this.classList.contains('selected-shadow')) {
        this.classList.add('flag');
    }
}

function select() {
    if (this.classList.contains('default-text')){
        let shadow = this.parentElement.parentElement.previousElementSibling;
        shadow.classList.remove('default-hover-shadow');
        shadow.classList.add('selected-shadow');
        shadow.children[1].children[6].classList.remove('default-hover-color');
        shadow.children[1].children[6].classList.add('selected-color');
        shadow.nextElementSibling.nextElementSibling.classList.remove('hide');
        shadow.nextElementSibling.classList.add('hide');       
    } else if (!this.classList.contains('selected-shadow') && !this.classList.contains('disabled-shadow') && !this.classList.contains('selected-hover-shadow')) {
        this.classList.remove('default-hover-shadow');
        this.classList.add('selected-shadow');
        this.children[1].children[6].classList.remove('default-hover-color');
        this.children[1].children[6].classList.add('selected-color');
        this.nextElementSibling.nextElementSibling.classList.remove('hide');
        this.nextElementSibling.classList.add('hide');
    } else if (this.classList.contains('selected-shadow') || this.classList.contains('selected-hover-shadow')) {
        this.classList.remove('selected-shadow');
        this.classList.remove('selected-hover-shadow');
        this.classList.remove('flag');
        this.classList.add('default-hover-shadow');
        this.children[1].children[6].classList.remove('selected-color');
        this.children[1].children[6].classList.remove('selected-hover-color');
        this.children[1].children[6].classList.add('default-hover-color');
        this.nextElementSibling.children[0].children[0].classList.add('default-hover-text');
        this.nextElementSibling.nextElementSibling.classList.add('hide');
        this.nextElementSibling.classList.remove('hide');
        this.children[1].children[0].classList.remove('selected-hover-text');
        this.children[1].children[0].innerHTML = 'Сказачное заморское яство';
    }
}
