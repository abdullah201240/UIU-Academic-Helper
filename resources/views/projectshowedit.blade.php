@extends('layout')
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script defer src="./index.js"></script>
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
</head>
<body>
    <div class="container">
        <form id="form" action="" method="get">
            <h1>Project Information Edit Form</h1>
            <div class="input-control">
                <label for="pt">Project Title: </label>
                <input type="text" id="pt" name="pt" placeholder="Enter project title" type="text" required>
                <div class="error"></div>
            </div>

            <div class="input-control">
                <label for="tn">Team Name: </label>
                <input type="text" id="tn" name="tn" placeholder="Enter Team Name" type="text" required>
                <div class="error"></div>
            </div>

              <div class="input-control">
                <label for="cn">Trimester: </label>
                <select name="cn" id="course-list" class="InputBox">
                    <option value disabled selected></option>
                </select>
                <div class="error"></div>
            </div>

                <div class="input-control">
                <label for="cn">Faculty Name: </label>
                <select name="cn" id="course-list" class="InputBox">
                    <option value disabled selected></option>
                </select>
                <div class="error"></div>
            </div>




            <div class="input-control">
                <label for="cn">Course Name: </label>
                <select name="cn" id="course-list" class="InputBox">
                    <option value disabled selected></option>
                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="cn">Course ID: </label>
                <select name="ci" id="course id" class="InputBox">
                    <option value disabled selected></option>
                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="sec">Section: </label>
                <select name="sec" id="section-list" class="InputBox">
                     <option value disabled selected></option>
                </select>
                <div class="error"></div>
            </div>

            <div class="input-control">
                <div class="wrapper">
      <div>
        <label for="city">Team Members name</label>
        <select name="member" id="member" multiple  style="display: none;">
    <option value=" 1 " style="display: none;">dgsg</option>

     </select>
    </div>


            <div>
                <label style="color: white;"> Uploding Video</label>
                <p><input type="file" name="file"></p>
            </div><br>

            <div>

                <label style="color: white;"> Uploding Image</label>
                <p><input type="file" name="file"></p>
            </div>
            <br>
            <div class="input-control">
                <label for="de">Details: </label>
                <textarea type="text" id="de" name="de"  type="text" style="height: 100px;"></textarea>

                <div class="error"></div>
            </div>
             <button type="submit">Submit</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
    <script>

    new MultiSelectTag('member', {
    rounded: true,    // default true
    shadow: true      // default false
})
    function MultiSelectTag(e,t={shadow:!1,rounded:!0}){var n=null,d=null,l=null,a=null,s=null,i=null,o=null,c=null,r=null,u=null,p=null,v=null,m=new DOMParser;function h(e=null){for(var t of(v.innerHTML="",d))if(t.selected)!w(t.value)&&f(t);else{const n=document.createElement("li");n.innerHTML=t.label,n.dataset.value=t.value,e&&t.label.toLowerCase().startsWith(e.toLowerCase())?v.appendChild(n):e||v.appendChild(n)}}function f(e){const t=document.createElement("div");t.classList.add("item-container");const n=document.createElement("div");n.classList.add("item-label"),n.innerHTML=e.label,n.dataset.value=e.value;const l=(new DOMParser).parseFromString('<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="item-close-svg">\n                <line x1="18" y1="6" x2="6" y2="18"></line>\n                <line x1="6" y1="6" x2="18" y2="18"></line>\n                </svg>',"image/svg+xml").documentElement;l.addEventListener("click",(t=>{d.find((t=>t.value==e.value)).selected=!1,g(e.value),h(),E()})),t.appendChild(n),t.appendChild(l),o.append(t)}function L(){for(var e of v.children)e.addEventListener("click",(e=>{d.find((t=>t.value==e.target.dataset.value)).selected=!0,r.value=null,h(),E(),r.focus()}))}function w(e){for(var t of o.children)if(!t.classList.contains("input-body")&&t.firstChild.dataset.value==e)return!0;return!1}function g(e){for(var t of o.children)t.classList.contains("input-body")||t.firstChild.dataset.value!=e||o.removeChild(t)}function E(){for(var e=0;e<d.length;e++)n.options[e].selected=d[e].selected}n=document.getElementById(e),function(){d=[...n.options].map((e=>({value:e.value,label:e.label,selected:e.selected}))),n.classList.add("hidden"),(l=document.createElement("div")).classList.add("mult-select-tag"),(a=document.createElement("div")).classList.add("wrapper"),(i=document.createElement("div")).classList.add("body"),t.shadow&&i.classList.add("shadow"),t.rounded&&i.classList.add("rounded"),(o=document.createElement("div")).classList.add("input-container"),(r=document.createElement("input")).classList.add("input"),r.placeholder=`${t.placeholder||"Search..."}`,(c=document.createElement("inputBody")).classList.add("input-body"),c.append(r),i.append(o),(s=document.createElement("div")).classList.add("btn-container"),(u=document.createElement("button")).type="button",s.append(u);const e=m.parseFromString('<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">\n            <polyline points="18 15 12 21 6 15"></polyline></svg>',"image/svg+xml").documentElement;u.append(e),i.append(s),a.append(i),(p=document.createElement("div")).classList.add("drawer","hidden"),t.shadow&&p.classList.add("shadow"),t.rounded&&p.classList.add("rounded"),p.append(c),v=document.createElement("ul"),p.appendChild(v),l.appendChild(a),l.appendChild(p),n.nextSibling?n.parentNode.insertBefore(l,n.nextSibling):n.parentNode.appendChild(l)}(),h(),L(),E(),u.addEventListener("click",(()=>{p.classList.contains("hidden")&&(h(),L(),p.classList.remove("hidden"),r.focus())})),r.addEventListener("keyup",(e=>{h(e.target.value),L()})),r.addEventListener("keydown",(e=>{if("Backspace"===e.key&&!e.target.value&&o.childElementCount>1){const e=i.children[o.childElementCount-2].firstChild;d.find((t=>t.value==e.dataset.value)).selected=!1,g(e.dataset.value),E()}})),window.addEventListener("click",(e=>{l.contains(e.target)||p.classList.add("hidden")}))}

</script>
</html>
<style>
  .mult-select-tag {
    display: flex;
    width:100%;
    flex-direction: column;
    align-items: center;
    position: relative;
    --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
    --tw-shadow-color: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
    --border-color: rgb(218, 221, 224);
    font-family: Verdana, sans-serif;
}

.mult-select-tag .wrapper {
    width: 100%;
}

.mult-select-tag .body {
    display: flex;
    border: 1px solid var(--border-color);
    background: white;
    min-height: 2.15rem;
    width:100%;
    min-width: 14rem;

}

.mult-select-tag .input-container {
    display: flex;
    flex-wrap: wrap;
    flex: 1 1 auto;
    padding: 0.1rem;
}

.mult-select-tag .input-body {
    display: flex;
    width: 100%;
}

.mult-select-tag .input {
    flex:1;
    background: transparent;
    border-radius: 0.25rem;
    padding: 0.45rem;
    margin: 10px;
    color: #2d3748;
    outline: 0;
    border: 1px solid var(--border-color);
}

.mult-select-tag .btn-container {
    color: #e2eBf0;
    padding: 0.5rem;
    display: flex;
    border-left: 1px solid var(--border-color);
}

.mult-select-tag button {
    cursor: pointer;
    width: 100%;
    color: #718096;
    outline: 0;
    height: 100%;
    border: none;
    padding: 0;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
    text-transform: none;
    margin: 0;
}

.mult-select-tag button:first-child {
    width: 1rem;
    height: 90%;
}


.mult-select-tag .drawer {
    position: absolute;
    background: white;
    max-height: 15rem;
    z-index: 40;
    top: 98%;
    width: 100%;
    overflow-y: scroll;
    border: 1px solid var(--border-color);
    border-radius: 0.25rem;
}

.mult-select-tag ul {
    list-style-type: none;
    padding: 0.5rem;
    margin: 0;
}

.mult-select-tag ul li {
    padding: 0.5rem;
    border-radius: 0.25rem;
    cursor: pointer;
}

.mult-select-tag ul li:hover {
    background: rgb(243 244 246);
}

.mult-select-tag .item-container {
    display: flex;
    justify-content: center;
    align-items: center;
    color: #2c7a7b;
    padding: 0.2rem 0.4rem;
    margin: 0.2rem;
    font-weight: 500;
    border: 1px solid #81e6d9;
    background: #e6fffa;
    border-radius: 9999px;
}

.mult-select-tag .item-label {
    max-width: 100%;
    line-height: 1;
    font-size: 0.75rem;
    font-weight: 400;
    flex: 0 1 auto;
    color: #2c7a7b;
}

.mult-select-tag .item-close-container {
    display: flex;
    flex: 1 1 auto;
    flex-direction: row-reverse;
}

.mult-select-tag .item-close-svg {
    width: 1rem;
    margin-left: 0.5rem;
    height: 1rem;
    cursor: pointer;
    border-radius: 9999px;
    display: block;
}

.hidden {
    display: none;
}

.mult-select-tag .shadow  {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.mult-select-tag .rounded {
    border-radius: .375rem;
}

</style>
<style>

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body{
         background: white;
         font-family: 'Poppins', sans-serif;
         display: flex;
          height: -50vh;
          justify-content: center;
          align-items: center;
          padding: 10px;
         }
         #container{
            max-width: 700px;
            width: 100%;
            padding: 25px 30px;
            background-color: Gray;
            border-radius: 5px;

         }


        #form{
            width: 700px;
           margin: 5vh auto 0 auto;
           padding: 50px;
           background-color: #808080;
          border-radius: 5px;
          font-size: 12px;

        }
        #form h1{
            color: white;
            text-align: center;
        }
        #form button {
          padding: 10px;
          margin-top: 10px;
          color: black;
          background-color: #9999ff;
          display: flex;
          display: grid;
          margin: auto;
          font-size: 16px;
          font-weight: 500;
          border-radius: 4px;

         }


   .input-control{
            display: flex;
            flex-direction: column;

        }
      .input-control label{
        color: white;
      }

     .input-control input{
            border: -5px solid #000000;
            display: block;
            font-size: 10px;
            padding: 5px;
        }
      .input-control select{
            border: -5px solid #000000;
            display: block;
            font-size: 10px;
            padding: 5px;
        }
        .input-control .blank_row
        {
         height: 100px !important; /* overwrites any other rules */
         background-color: #FFFFFF;
        }
        .input-control input:focus {
           outline: 0;
         }

     .input-control.success input {
         border-color: #09c372;
       }
      .input-control.error input {
    border-color: #ff3860;
     }

    .input-control .error {
    color: #ff3860;
    font-size: -5px;
      height: 5px;
   }
   .input-control details{
    color: #ff3860;
    font-size: 15px;
    height: 25px;
}

.wrapper .search-input{
    width: 100%;
    border-radius: 5px;
    outline: none;
    border: none;
    padding: 5 0px 0 -5px;
}
.search-input input{
    height: 50px;
    width: 50%;
    outline: none;
    border: none;
    border-radius: 5px;
    padding: 4 0px 0 -4px;
    font-size: 18px;
    box-shadow: 0px 1px 5px rgb(0, 0, 0.1);
}
.search-input .active input{
    border-radius: 5px 5px 0 0;
}
.search-input .autocom-box{
  padding: 0;
  opacity: 0;
  pointer-events: none;
  max-height: 280px;
  overflow-y: auto;
}

.search-input.active .autocom-box{
  padding: 10px 8px;
  opacity: 1;
  pointer-events: auto;
}

.autocom-box li{
  list-style: none;
  padding: 8px 12px;
  display: none;
  width: 100%;
  cursor: default;
  border-radius: 3px;
}

.search-input.active .autocom-box li{
  display: block;
}
.autocom-box li:hover{
  background: #efefef;
}

.search-input .icon{
  position: absolute;
  right: 0px;
  top: 0px;
  height: 50px;
  width: 55px;
  text-align: center;
  line-height: 55px;
  font-size: 20px;
  color: #644bff;
  cursor: pointer;
}


</style>

<script>
   // getting all required elements
const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");
const icon = searchWrapper.querySelector(".icon");
let linkTag = searchWrapper.querySelector("a");
let webLink;

// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if(userData){
        icon.onclick = ()=>{
            webLink = `https://www.google.com/search?q=${userData}`;
            linkTag.setAttribute("href", webLink);
            linkTag.click();
        }
        emptyArray = suggestions.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = `<li>${data}</li>`;
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}

function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    icon.onclick = ()=>{
        webLink = `https://www.google.com/search?q=${selectData}`;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = `<li>${userValue}</li>`;
    }else{
      listData = list.join('');
    }
    suggBox.innerHTML = listData;
}

let suggestions = [
    "Channel",
    "CodingLab",
    "CodingNepal",
    "YouTube",
    "YouTuber",
    "YouTube Channel",
    "Blogger",
    "Bollywood",
    "Vlogger",
    "Vechiles",
    "Facebook",
    "Freelancer",
    "Facebook Page",
    "Designer",
    "Developer",
    "Web Designer",
    "Web Developer",
    "Login Form in HTML & CSS",
    "How to learn HTML & CSS",
    "How to learn JavaScript",
    "How to become Freelancer",
    "How to become Web Designer",
    "How to start Gaming Channel",
    "How to start YouTube Channel",
    "What does HTML stands for?",
    "What does CSS stands for?",
];


</script>
