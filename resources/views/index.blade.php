<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  position: relative;
  height: 100%;
  background-image: url('{{ asset('assets/img/pic2.jpg') }}');
  background-position: center;
  background-size: cover;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

/* Add a pseudo-element for the black overlay */
.bgimg::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value for transparency */
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}

</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>Logo</p>
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
    <p>35 days left</p>
  </div>
  <div class="bottomleft">
    <p>Some text</p>
  </div>
</div>

</body>
</html>

