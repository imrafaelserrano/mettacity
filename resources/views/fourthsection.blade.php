<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700&display=swap" rel="stylesheet">

  <style>
    .fourth-section {
      background-color: #fbf8ff;
    }

    /* Responsive image sizing */
    .fourthtitle {
      position: absolute;
      top: 350%;
      left: 0;
      width: 100%;
      display: block;
      object-fit: cover;
    }

    .fourthbody {
      position: absolute;
      top: 375%;
      left: 0;
      width: 100%;
      display: block;
      object-fit: cover;
      z-index: 1;
    }

    /* Centered row and column layout */
    .row-fourth {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 180px 130px 0 150px;
      box-sizing: border-box;
      flex-wrap: wrap;
      z-index: 1;
    }

    .col {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .col img {
      width: auto;
      max-width: 100%;
      height: 525px;
      object-fit: cover;
      display: block;
      margin-top: 260%;
      padding: 10px;
      transition: transform .2s ease, box-shadow .2s ease;
    }

    /* Hover pop effect */
    .col img:hover {
      transform: translateY(-6px) scale(1.03);
    }

    .row-title {
      position: relative;
      z-index: 2;
      padding: 20px 0 100px 280px;
    }

    .t1 {
      font-family: "Times New Roman", Times, serif;
      font-size: 30px;
    }

    .t2 {
      font: italic 800 30px 'Poppins', sans-serif;
      margin-top: -40px;
    }

    /* SCROLLING BANNER */
    .fourth-scrolling-banner-wrapper {
      position: absolute;
      top: 470%;
      left: 0;
      width: 100%;
      overflow: hidden;
      z-index: 0;
      pointer-events: none;
    }

    .fourth-scrolling-banner {
      display: flex;
      width: 200%; /* make room for duplicated content */
      overflow: hidden;
      background: rgb(0, 0, 0);
      padding: 8px 16px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.25);
    }

    /* Track container for scrolling text */
    .fourth-scrolling-banner p {
      display: flex;
      white-space: nowrap;
      font-weight: 600;
      font-size: 18px;
      margin: 0;
      animation: scrollText 20s linear infinite;
    }

    /* Animation: move text left continuously */
    @keyframes scrollText {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); } /* shift half of container to loop */
    }

    /* Highlight words */
    .fourth-scrolling-banner .play { color: #6f4cb2; font-weight: 700; font-style: italic; }
    .fourth-scrolling-banner .culture { color: #63c5b4; font-weight: 700; font-style: italic; }
    .fourth-scrolling-banner .technology { color: #fcc810; font-weight: 700; font-style: italic; }

    .core-message {
      width: 98%;
      height: 98%;
      object-fit: cover;
      display: block;
      margin: -30px auto;
      z-index: -3;
    }
  </style>
</head>
<body>
  <div class="fourth-section">
    <img src="{{ asset('assets/TITLE.png') }}" alt="Fourth Section Title" class="fourthtitle">
    <img src="{{ asset('assets/STEP INSIDE.png') }}" alt="Fourth Section Body" class="fourthbody">

    <div class="row-fourth">
      <div class="col">
        <img src="{{ asset('assets/TECHNOLOGY.png') }}" alt="TECHNOLOGY" class="techology">
      </div>
      <div class="col">
        <img src="{{ asset('assets/PLAY.png') }}" alt="PLAY" class="play"> 
      </div>
      <div class="col">
        <img src="{{ asset('assets/CULTURE.png') }}" alt="CULTURE" class="culture">
      </div>
      <div class="col">
        <img src="{{ asset('assets/ENTER METTACITY.png') }}" alt="ENTER METTACITY" class="entermettacity" style="height: 500px; width: auto; padding-top: 200px">
      </div>
    </div>

    <div class="row-title">
      <div class="col-sm-9 p-3 t1">
        An immersive universe where you don't just watch the experience—
      </div>
      <div class="col-sm-9 p-3 t2">
        YOU BECOME PART OF IT!
      </div>
    </div>
  </div>

  <!-- SCROLLING BANNER -->
  <div class="fourth-scrolling-banner-wrapper">
    <div class="fourth-scrolling-banner" aria-hidden="true">
      <p>
        <!-- Duplicate the text to create seamless scrolling -->
        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> • 

        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> •

        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> • 

        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> •

        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> •

        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> •

        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> •
 
        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> •

        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> •

        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> •

        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> •

        <span class="technology"> TECHNOLOGY </span> • 
        <span class="play"> PLAY </span> • 
        <span class="culture"> CULTURE </span> •
        <span class="technology"> TECHNOLOGY </span> • 
      </p>
    </div>
  </div>

  <div class="fifth-banner">
    <img src="{{ asset('./assets/COREMESSAGE.png') }}" alt="Core Message" class="core-message">
  
      <div class="fifthcontent">
       <h2>The future of amusement-</h2>
       <h1>Where Culture, Play, and Technology Meet</h1>
       <img src="{{ asset('./assets/PLAN YOUR VISIT.png') }}" alt="Enter Button" class="fifthenter-button">
      </div> 

  </div>
</body>
</html>
