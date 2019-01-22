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
 <h2>Sibling Combinator</h2>
h2 + p <br/>
h2 ~ p <br/>
ul > li -- <br/>
    https://codepen.io/jeremy-sarachan/pen/YBKmPK<br/>
<br/>
 <h2>Variables </h2>
    See this example: https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_variables <br/>
  <br/>  
 <h2>Text Units< </h2>
 Pixels, ems, and rems: https://codepen.io/jeremy-sarachan/pen/aXoexb<br/>
 <br/>
    <h2>Transitions</h2> https://css-tricks.com/almanac/properties/t/transition/<br/>
 See this example: https://codepen.io/jeremy-sarachan/pen/MLWggR<br/>
 Types of timing changes: https://www.w3schools.com/cssref/css3_pr_transition-timing-function.asp<br/>
 <br/>
    <h2>Gradients</h2>
    https://cssgradient.io/<br/>
    https://codepen.io/jeremy-sarachan/pen/NoWKRO<br/>
    
 Media Queries:<br/>
 Resizing Text: uses em/rems and set the html{font-size: X%}<br/>
 Resizing Images: You can set the width to 100% and height to auto OR background-size: cover or background-size:contain;<br/>
 Resizing images: https://codepen.io/jeremy-sarachan/pen/KJKpWY
 NOT DONE: Resizing background image: https://codepen.io/jeremy-sarachan/pen/YBzXpQ
 
 
 
 
