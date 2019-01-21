# COMM468.2019
Files for Advanced Web Development

<h1>Notes: Flexbox and Grid Layout</h1>

//reset for CSS<br/>
*{<br/>
    margin:0;<br/>
    padding:0;<br/>
    background-color:#fff;<br/>
}

//flexbox:<br/>

.container {<br/>
    display: flex; <br/>
    flex-direction: row | row-reverse | column | column-reverse;<br/>
    flex-wrap: nowrap | wrap | wrap-reverse;<br/>
    justify-content: [see https://css-tricks.com/snippets/css/a-guide-to-flexbox/]<br/>
     align-items: [see https://css-tricks.com/snippets/css/a-guide-to-flexbox/]<br/>
}

//grid layout:<br/>
#container{<br/>
display: grid;<br/>
    grid-template-columns: repeat(3, 1fr);<br/>
    grid-template-rows: repeat(7, 100px);<br/>
    /* grid-template-rows: 100px 100px 100px 100px 100px 100px 100px;<br/>
    grid-auto-rows: 100px; */<br/>
}<br/>

header{<br/>
     grid-row: 1/2;<br/>
     grid-column: 1/4;<br/>
    background-color: #f00;<br/>
}<br/>

nav{<br/>
    grid-row: 2/3;<br/>
    grid-column: 1/4;<br/>
     background-color: #0f0;<br/>
}<br/>

<h1>CSS</h1>

Google Fonts

https://www.w3schools.com/css/default.asp
<br/>
color:<br/>
font-family:<br/>
background-color:<br/>
background image positioning: https://www.w3schools.com/css/css_background.asp <br/>
margin:<br/>
padding:<br/>
border-radius: four numbers, from top-left<br/>
<br/>
Sibling Combinator<br/>
h2 + p (<p> right after the <h2>-and on the same level)<br/>
h2 ~ p  (all <p> after an <h2>--and on the same level)<br/>
ul > li -- <br/>
    https://codepen.io/jeremy-sarachan/pen/YBKmPK<br/>
<br/>
Variables<br/>
    See this example: https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_variables <br/>
    
 Text Units</br/>
 Pixels, ems, and rems: https://codepen.io/jeremy-sarachan/pen/aXoexb<br/>
 
 
