<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
</head>
<style>

a{ text-decoration: none; }


a:visited { text-decoration: none; }


a:hover { text-decoration: none; }


a:active { text-decoration: none; }

body{
        background-image: url("../img/bg_ivo.gif");
    background-size: 100% ;
}

.card{
    border:none;

    position:relative;
    overflow:hidden;
    border-radius:8px;
    cursor:pointer;
}

.card:before{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#E1BEE7;
    transform:scaleY(1);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:after{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#8E24AA;
    transform:scaleY(0);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:hover::after{
    transform:scaleY(1);
}


.fonts{
    font-size:11px;
}

.social-list{
    display:flex;
    list-style:none;
    justify-content:center;
    padding:0;
}

.social-list li{
    padding:10px;
    color:#8E24AA;
    font-size:19px;
}


.buttons button:nth-child(1){
       border:1px solid #8E24AA !important;
       color:#8E24AA;
       height:40px;
}

.buttons button:nth-child(1):hover{
       border:1px solid #8E24AA !important;
       color:#fff;
       height:40px;
       background-color:#8E24AA;
}

.buttons button:nth-child(2){
       border:1px solid #8E24AA !important;
       background-color:#8E24AA;
       color:#fff;
        height:40px;
}
</style>
<body>
<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                <img src="../img/ivo_2.jpg" width="100" class="rounded-circle"  alt="">
                </div>
                <div class="text-center mt-3">
                <span class="bg-secondary p-1 px-4 rounded text-white">Undergraduate</span>
                    <h5 class="mt-2 mb-0">Ivo Herid Lesmana</h5>
                    <span>Bina Nusantara University</span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts">I'm an undergraduate in Bina Nusantara University, majoring in computer science and statistics currently at 6th semester this year. I'm a tech enthusiast with the curiosity about machine learning and artificial intelligence. 
                            I was born in 19 april 2003, which means im currently still 19 years old. i'm always trying to find new opportunity to learn anything i could grasp, which doesn't restrained on just computer or tech. The subject i find interesting is Web Programming and Deep Learning Optimization</p>
                    </div>
                    <h5>SKILLS</h5>
                     <ul class="social-list">
                        <li>Java</li>
                        <li>||</li>
                        <li>C</li>
                        <li>||</li>
                        <li>Data Analytics</li>
                        <li>||</li>
                        <li>Machine Learning</li>
                    </ul>

                    <h5>Hobbies</h5>
                     <ul class="social-list">
                        <li>Gym</li>
                        <li>||</li>
                        <li>Sleep</li>
                        <li>||</li>
                        <li>Learn new things</li>
                    </ul>
                    
                    <div class="buttons"> 
                        <button class="btn btn-outline-primary px-4" ><a href="{{ url()->previous() }}">Back</a></button>
                    </div>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>
</body>
</html>