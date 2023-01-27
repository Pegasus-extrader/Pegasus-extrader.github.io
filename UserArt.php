<head>
  <link rel="stylesheet" href="UserArt.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap');
  </style>
  <script type='text/javascript'>
    addEventListener('popstate',()=>{location.reload()})
    let currentUrl = location.href;
    history.replaceState('', '', 'index.html');
    history.pushState('', '', currentUrl);
</script>
</head>





<div class="aa">
 <h1>Was sind Sie</h1>
 <select class="select" id="select-code">
   <option  selected disabled >Wählen Sie </option>
   <option value="UntInf">Unternehmen</option> 
   <option value="PriInf">Privatperson</option>
 </select>
 <br>
 <button id="code-btn"class="L">submit to form</button>
</div>


<script>
 document.getElementById('code-btn').onclick = () => {
 let e = document.getElementById('select-code');
 document.getElementById('input').value =  window.location= e.value+".php";
 }
</script>
