const TypeWriter = function(txtElement , words, wait=2000){
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.Index = 0;
    this.wait = parseInt(wait,10);
    this.type();
    this.isDeleting = false;
}


//type method
TypeWriter.prototype.type = function(){
    
    const current = this.Index % this.words.length;
    const fulltxt = this.words[current];
    
    if (this.isDeleting){
        //remove letter
        this.txt = fulltxt.substring(0 , this.txt.length - 1);
        
    }
    else{
        //add letter
        this.txt = fulltxt.substring(0 , this.txt.length + 1);
    }
    //insert text into element
    this.txtElement.innerHTML = '<span class="txt">' + this.txt + '</span>';
    
    let speed = 150;
    if(this.isDeleting){
           speed /= 2;
    }
    if(!this.isDeleting && this.txt === fulltxt){
        speed = this.wait;
        this.isDeleting = true;
    }
    else if(this.isDeleting && this.txt === ''){
        this.isDeleting = false;
        this.Index = this.Index + 1;
        speed = 300;
    }
    setTimeout(() => this.type(),speed)
    this.txtElement.innerHTML = '<span class="txt">' + this.txt + '</span>';
    
}
document.addEventListener('DOMContentLoaded',init);

function init(){
    const txtElement =  document.querySelector('.txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'))
    const wait = txtElement.getAttribute('data-wait');
    //init typewriter
    new TypeWriter(txtElement , words, wait);
}

    