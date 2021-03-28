const partners = document.querySelectorAll('.partners1, .partners2, .partners3');
console.log(partners)

partners.forEach( element => {
  element.addEventListener('click', e =>{
    console.log(e)
    const popUp = document.createElement('div');
    // popUp.setAttribute(
    //   "style", "font-size: 100px; font-style: italic; color:red;");
    element.style.content = 'sd';
    element.style.position = 'absolute';
    element.style.top = '0';
    element.style.left = '0';
    element.style.width = '500px';
    element.style.height = '500px';
    element.style.backgrounColor = 'red';
    // .setAttribute("styte", `
    //   content: '';
    //   position: absolute;
    //   top: 0;
    //   left: 0;
    //   width: 500px;
    //   height: 500px;
    //   color: red;
    // `)
    element.insertBefore = popUp;
})
})