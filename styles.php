@import url('../css/fonts.css');

body{
    margin:0%;
    box-sizing: border-box;
    overflow-x:hidden;
    background: rgb(8,39,213);
background: linear-gradient(90deg, rgba(8,39,213,1) 0%, rgba(40,69,230,1) 39%, rgba(7,226,251,1) 100%);
}

a{
    text-decoration: none ; 
}
 .flex-row{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

ul{
    list-style-type: none;
}
.nav{
    margin: auto;
    background-color: rgb(124, 217, 244);
    width: 80%;
    padding: 10px;
    border-radius: 10px;
}
    
}
.nav .nav-pills{
    color: purple;
    background-color: plum;
    
}
ul .nav .nav-pills .nav-items li a:hover:not(.active){
    background-color: rgb(50, 203, 249);

}
.nav .nav-items{
    display: flex;
    text-align: center;
    margin-left: 10px;
}
.nav .nav-top{
    display: flex;
    flex-direction: column;
}
.nav .nav-brand a{
    font-size: 5rem;
    padding:5rem;
}
.container h1{
    color: rgb(96, 8, 89);
}
.blog{
    margin: solid blue;
    background-color: rgb(37, 219, 255);
    padding: 10px;
}
.blog a{
    color: blueviolet;
}
h1{
    margin: auto;
    color: rgb(146, 40, 245);
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.card-body{
    background-color: lightblue;
    color: darkblue;
}
.project{
    margin: auto;
    background-color: rgb(124, 238, 251);
    border: 1px solid rgb(2, 2, 48);
    width: 1000px;
    padding: 20px;
    text-align: justify;
}
.gallery h1 {
    height: 24px;
    margin-top: 40px;
    margin-left: 20px;
    font-size: 28px;
  }
  article figure img {
    width: 250px;
    height: 150px;
  }
  .col-md-2{
    width: 75%;
  }
  .my-5{
    width: 75%;
    margin-bottom: 0;
  }
  .blog{
    border: solid 2px rgb(2, 2, 76);
    background-color: #4fc9fd;
    border-radius: 8%;
  }
  .blog a{
    text-decoration-line: none;
  }