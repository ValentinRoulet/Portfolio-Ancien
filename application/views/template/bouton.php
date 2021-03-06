





<div id="conteneur" class="ensemble">
<?php 
    $oui = 1;

foreach($boutons as $bouton) 
{
  echo"
    <div class='border__shadow fade' id='bouton".$oui."' onclick='Bouton(".$oui."); redirect1(".$bouton[1].");'>
      <span>".$bouton[0]."</span>
    </div>
  "; 
  
  $oui = $oui + 1;
  echo form_close();
  }


?>
</div>



<style>

.ensemble
{
  position: relative ;
  top:100px;
  margin-top:30%;
}

#conteneur
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    width: 100%;
    padding-top: 0%;
    justify-content: space-around;
    
}


.fade {
    
    opacity: 1;
    animation: fadein 2s;
    -moz-animation: fadein 2s; /* Firefox */
    -webkit-animation: fadein 2s; /* Safari and Chrome */
    -o-animation: fadein 2s; /* Opera */
}
@keyframes fadein {
    from {
        display: none;
        opacity:0;
    }
    to {
        display: none;
        opacity:1;
    }
}
@-moz-keyframes fadein { /* Firefox */
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-webkit-keyframes fadein { /* Safari and Chrome */
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-o-keyframes fadein { /* Opera */
    from {
        opacity:0;
    }
    to {
        opacity: 1;
    }
}



.border__shadow {
  background: rgba(0, 0, 0, 0.50);
  cursor: pointer;
  position: relative;
  margin: 2%;
  line-height: 250px;
  text-align: center;
  width: 200px;
  height: 250px;
  overflow: hidden;
  transition: background 350ms 600ms ease-in-out;
}
.border__shadow:hover {
  background: rgba(0, 0, 0, 0.30);
  transition-delay: 0ms;
}
.border__shadow:hover > span {
  color: #ffcc33;
  transition-delay: 0ms;
}
.border__shadow::after {
  box-shadow: 0 -248px 0 0.0619em #fff, 202px -248px 0 0 transparent, 400px -248px 0 0 #fff, 198px 0 0 0 #fff, 198px 250px 0 transparent, 198px 500px 0 #fff, -198px -500px 0 #fff, -198px -250px 0 0 transparent, -198px 0 0 0 #fff, -400px 248px 0 0 #fff, -400px 248px 0 0 transparent, 0 248px 0 0.0619em #fff;
  content: "";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 198px;
  height: 248px;
  transition: box-shadow 950ms ease-in-out;
}
.border__shadow:hover::after {
  box-shadow: -400px -248px 0 0 #fff, -400px -248px 0 0 transparent, 0 -248px 0 0.0619em #ff0000, 198px -500px 0 #fff, 198px -250px 0 transparent, 198px 0 0 #ff0000, -198px 0 0 #ff0000, -198px 250px 0 transparent, -198px 500px 0 #fff, 0 248px 0 0.0619em #ff0000, 202px 248px 0 0 transparent, 400px 248px 0 0 #fff;
}
.border__shadow::before {
  border: 1px solid #ffcc33;
  content: "";
  position: absolute;
  top: 0px;
  left: 0px;
  width: 200px;
  height: 250px;
}
.border__shadow > span {
  color: #fff;
  font-weight: 500;
  letter-spacing: 4px;
  transition: color 350ms 600ms ease-in-out;
  
}

*,
*:after,
*:before {
  box-sizing: border-box;
}

html,
body {
  width: 100%;
  height: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizelegibility;
}

body {
  background: #2c3e50;
  font-family: "Roboto", sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>