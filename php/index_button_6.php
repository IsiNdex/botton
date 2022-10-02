<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background: #e0e5ec;
  }
  h1 {
    position: relative;
    text-align: center;
    color: #353535;
    font-size: 50px;
    font-family: "Cormorant Garamond", serif;
  }
  
  p {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    text-align: center;
    font-size: 18px;
    color: #676767;
  }
  .frame {
    width: 90%;
    margin: 40px auto;
    text-align: center;
  }
  button {
    margin: 20px;
  }
  .custom-btn {
    width: 130px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    padding: 10px 25px;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
     box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
     7px 7px 20px 0px rgba(0,0,0,.1),
     4px 4px 5px 0px rgba(0,0,0,.1);
    outline: none;
  }
  
  .btn-6 {
    background: rgb(247,150,192);
  background: radial-gradient(circle, rgba(247,150,192,1) 0%, rgba(118,174,241,1) 100%);
    line-height: 42px;
    padding: 0;
    border: none;
  }
  .btn-6 span {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
  }
  .btn-6:before,
  .btn-6:after {
    position: absolute;
    content: "";
    height: 0%;
    width: 1px;
   box-shadow:
     -1px -1px 20px 0px rgba(255,255,255,1),
     -4px -4px 5px 0px rgba(255,255,255,1),
     7px 7px 20px 0px rgba(0,0,0,.4),
     4px 4px 5px 0px rgba(0,0,0,.3);
  }
  .btn-6:before {
    right: 0;
    top: 0;
    transition: all 500ms ease;
  }
  .btn-6:after {
    left: 0;
    bottom: 0;
    transition: all 500ms ease;
  }
  .btn-6:hover{
    background: transparent;
    color: #76aef1;
    box-shadow: none;
  }
  .btn-6:hover:before {
    transition: all 500ms ease;
    height: 100%;
  }
  .btn-6:hover:after {
    transition: all 500ms ease;
    height: 100%;
  }
  .btn-6 span:before,
  .btn-6 span:after {
    position: absolute;
    content: "";
    box-shadow:
     -1px -1px 20px 0px rgba(255,255,255,1),
     -4px -4px 5px 0px rgba(255,255,255,1),
     7px 7px 20px 0px rgba(0,0,0,.4),
     4px 4px 5px 0px rgba(0,0,0,.3);
  }
  .btn-6 span:before {
    left: 0;
    top: 0;
    width: 0%;
    height: .5px;
    transition: all 500ms ease;
  }
  .btn-6 span:after {
    right: 0;
    bottom: 0;
    width: 0%;
    height: .5px;
    transition: all 500ms ease;
  }
  .btn-6 span:hover:before {
    width: 100%;
  }
  .btn-6 span:hover:after {
    width: 100%;
  }
    </style>
</head>
<body>

     <div class="frame">
      <button class="custom-btn btn-6"><span>Read More</span></button>
     </div>
     

</body>
</html>