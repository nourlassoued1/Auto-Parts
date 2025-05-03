<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style> 
     header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        background-color: cadetblue;
        color: white;
        font-size: 20px;}
        nav ul {
        list-style: none;
        display: flex;
    }
    nav ul li {
        margin: 0 10px;
    }
    nav ul li a {
        color: white;
        text-decoration: none;
    }
    .welc {
        text-align: center;
        color: rgb(7, 7, 95);
        font-size: 40px;
        font-family: "Times New Roman", serif;
        padding: 120px;
        background: linear-gradient(#9cd3de, #5b9abe);
    }
    .search-bar {
        display: flex;
        align-items: center;
        background: white;
        padding: 10px;
        border-radius: 40px;
        width: 50%;
        margin: 20px auto;
    }
    .search-bar select {
        padding: 10px;
        border: 0px solid #ccc;
        border-radius: 40px;
        outline: none;
    }
    .search-bar input {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-left: none;
        outline: none;
        border-radius: 9px;
    }
    .search-bar button {
        color: #63b6d7;
        border: none;
        padding: 1px;
        border-radius: 100px;
        cursor: pointer;
    }
    .search-bar button:hover {
        color: #188f6f;
        transform: scale(1.3);
    }
    footer {
        background-color: cadetblue;
        color: white;
        text-align: center;
        padding: 20px 0;
        margin-top: 30px;
    }
    
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"poppins",sans-serif;
}
body{
    background-color:rgb(37, 131, 145);
    background:linear-gradient(to right,#e2e2e2,#c9d6ff);
}
.container{
    background:#fff;
    width:600px;
    padding:5.5rem;
    margin:50px auto;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(2, 2, 42, 0.9);
}
form{
    margin:0 2rem;
}
.form-title{
    font-size:1.5rem;
    font-weight:bold;
    text-align:center;
    padding:1.3rem;
    margin-bottom:0.4rem;
}
input{
    color:inherit;
    width:100%;
    background-color:transparent;
    border:none;
    border-bottom:1px solid #757575;
    padding-left:1.5rem;
    font-size:15px;
}
.input-group{
    padding:1% 0;
    position:relative;

}
.input-group i{
    position:absolute;
    color:black;
}
input:focus{
    background-color: transparent;
    outline:transparent;
    border-bottom:2px solid hsl(327,90%,28%);
}
input::placeholder{
    color:transparent;
}
label{
    color:#757575;
    position:relative;
    left:1.2em;
    top:-1.3em;
    cursor:auto;
    transition:0.3s ease all;
}
input:focus~label,input:not(:placeholder-shown)~label{
    top:-3em;
    color:hsl(240, 90.20%, 28.00%);
    font-size:14px;
}
.btn{
    font-size:1.1rem;
    padding:8px 0;
    border-radius:5px;
    outline:none;
    border:none;
    width:100%;
    background:rgb(53, 99, 162);
    color:white;
    cursor:pointer;
    transition:0.9s;
}
.btn:hover{
    background:rgb(141, 184, 201);
}
.or{
    font-size:1.1rem;
    margin-top:0.5rem;
    text-align:center;
}
.icons{
    text-align:center;
}
.icons i{
    color:rgb(33, 125, 186);
    padding:0.8rem 1.5rem;
    border-radius:10px;
    font-size:1.5rem;
    cursor:pointer;
    border:2px solid #dfe9f5;
    margin:0 15px;
    transition:1s;
}
.icons i:hover{
    background:#07001f;
    font-size:1.6rem;
    border:2px solid rgb(80, 139, 233);
}
.links{
    display:flex;
    justify-content:space-around;
    padding:0 4rem;
    margin-top:0.9rem;
    font-weight:bold;
}
button{
    color:rgb(56, 56, 255);
    border:none;
    background-color:transparent;
    font-size:1rem;
    font-weight:bold;
}
button:hover{
    text-decoration:underline;
    color:blue;
}</style>
</head>

<body>
<header>
        <div class="logo">AUTO PARTS</div>
        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Rechercher">
            <button id="search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg></button>
        </div>
        <nav>
            <ul>
                <li><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
</svg></a></li>

<li class="connect">
    <a href="loginreg.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
        </svg>
        <br>
    </a>
</li>
<li class="cart-icon">
    <a href="panier.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
            <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1"/>
        </svg>
        <span id="cart-count">0</span>
    </a>
</li>
            </ul>
        </nav>
    </header>
    <br>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Inscription</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">Prénom</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Nom</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Mot de Passe</label>
        
        </div>
       <input type="submit" class="btn" value="S'inscrire" name="signUp">
      </form>
    
        <br>
     
     
      <div class="links">
        <p>Vous avez déjà un compte ?</p>
        <button id="signInButton">Connecter</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Connexion</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Mot de Passe</label>
          </div>
         
         <input type="submit" class="btn" value="Connecter" name="signIn">
        </form>
       
        <br>
        
       
        <div class="links">
          <p>Vous n'avez pas encore un compte?</p>
          <button id="signUpButton">S'inscrire</button>
        </div>
      </div>
      <script> 
        const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})
      </script>
 <footer>
        <p>&copy; 2025 Pièces Détachées Auto. Tous droits réservés.</p>
    </footer>     
</body>
</html>