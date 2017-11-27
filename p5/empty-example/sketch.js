res = 100;
r = 0;
var ground, sum;
var n = 0;


function setup() {
  createCanvas(window.innerWidth, window.innerHeight);
  r = height*0.45;
  ground = (height*0.8)/2;
  sum = TWO_PI/1000;
}



function draw() {
  // put drawing code here
  background(1000);

  translate(width/4, height/2);
  SfereShape();
}
function getDates(){
  var m = month();
  var y = year();
  var d = day();

}

function SfereShape(){
  stroke(255,244 ,0);
    for (let i = 0; i < TWO_PI; i++) {
      let x = tan(i)*ground;
      let y = tan(i*n)*ground;;
      let z = sin(i)*ground;
      let w = tan(i*n)*ground;

      shape(x,y,z,w);
    }
  n+= 0.00001;
  noLoop();
}

function semicircle(pos, rad, a){
  for (let i = a; i <= a+PI; i+=TWO_PI/res*0.2) {
    let x = cos(i)*rad+pos.x;
    let y = sin(i)*rad+pos.y;
    vertex(x,y);
  }
}

function d2r(d){return d*(PI/180);}

function shape(r, a, w){
  var marg = 0;

  beginShape();
  for (let i = 0; i <= a; i+=TWO_PI/res) {
    let x = cos(i)*r;
    let y = sin(i)*r;
    vertex(x,y);
  }
  semicircle(createVector(cos(a)*(r-w/2), sin(a)*(r-w/2)),w/2 , a);

  for(let i = a; i>=0; i-=TWO_PI/res){
    let x = cos(i)*(r-w);
    let y = sin(i)*(r-w);
    vertex(x,y);
  }

  semicircle(createVector(cos(0)*(r-w/2), sin(0)*(r-w/2)),w/2 , PI);
  endShape(CLOSE);
}
