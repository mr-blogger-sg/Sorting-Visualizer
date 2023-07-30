<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Sorting Visualizer</title>
</head>
<body>
    <div id="nav">
        <div id="divyatej">
            <img src="images/me.jpg" class="me" alt="Shubham Gupta">
            <p>Shubham Gupta</p>
        </div>
        <h1 id="title">Sorting Visualizer</h1>
        <div class="links">
             <a href="http://mrbloggersg.tk/" target="_blank"><img src="images/portfolio.png" class="sm" alt="http://mrbloggersg.tk/" srcset=""></a>
            <a href="https://www.linkedin.com/in/shubham-gupta-710622167/" target="_blank"><img src="images/linkedin.png" class="sm" alt="https://www.linkedin.com/in/shubham-gupta-710622167/" srcset=""></a>
            <a href="https://github.com/mr-blogger-sg" target="_blank"><img src="images/github.png" class="sm" alt="https://github.com/mr-blogger-sg" srcset=""></a>
        </div>
    </div>


    <!-- h1 class="title"><a class="title" href="">Sorting visualizer</a></h1> -->
    <div id="section">
        <div class="section-2">
            <div class="section-1">
                <div class="navbar" id="navbar">
                    <!-- <a id="random" onclick="RenderScreen()">Generate array</a> -->
                    <span class="options">
                        <select name="select sort algorithm" id="menu" 
                            class="algo-menu">
                            <option value="0">Algorithm</option>
                            <option value="1">Bubble Sort</option>
                            <option value="2">Selection Sort</option>
                            <option value="3">Insertion Sort</option>
                            <option value="4">Merge Sort</option>
                            <option value="5">Quick Sort</option>
                        </select>
                    </span>
                    <span class="options">
                        <select name="select array size" id="menu" class="size-menu">
                            <option value="0">Size</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="60">60</option>
                            <option value="70">70</option>
                            <option value="80">80</option>
                            <option value="90">90</option>
                            <option value="100">100</option>
                        </select>
                    </span>
                    <span class="options">
                        <select name="speed of visualization" id="menu" class="speed-menu">
                            <option value="0">Speed</option>
                            <option value="0.5">0.50x</option>
                            <option value="0.75">0.75x</option>
                            <option value="1">1.00x</option>
                            <option value="2">2.00x</option>
                            <option value="4">4.00x</option>
                        </select>
                    </span>
                    <a class="start">SORT</a>
                    <!-- <a class="icon"><i class="fa fa-bars"></i></a> -->
    
                </div>

            </div>
            <div class="section-3">
                <h3>Time Complexity</h3><h2 class="tc"></h2>
            </div>
        </div>
            
        <div class="center">
            <div class="frame" id="box">
                <div class="array"></div>
            </div>
        </div>
    </div>

    <script src="index.js"></script>
    <script src="visualize.js"></script>
    <script src="sort.js"></script>
</body>
</html>
