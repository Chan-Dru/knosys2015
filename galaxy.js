(function(){
	window.addEventListener('resize',resizeCanvas,false);

	function resizeCanvas(){
		canvas.width=window.innerWidth;
		canvas.height=window.innerHeight;
		setup();
	}
	
})();
function setup()
{
	var canvas = document.getElementById('Canvas2D');
var c = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

/*canvas.width=window.innerWidth;*/
var fov = 250;

var SCREEN_WIDTH = canvas.width; 
var SCREEN_HEIGHT = canvas.height; 

var HALF_WIDTH = SCREEN_WIDTH/2; 
var HALF_HEIGHT = SCREEN_HEIGHT/2; 

var numPoints = 200; 

var mouseX = 0; 
var mouseY = -200; 


function draw3Din2D(point3d)
{  
	x3d = point3d[0];
	y3d = point3d[1]; 
	z3d = point3d[2]; 
	var scale = fov/(fov+z3d); 
	var x2d = (x3d * scale) + HALF_WIDTH;	
	var y2d = (y3d * scale)  + HALF_HEIGHT;
	
	
	c.lineWidth= scale; 
	c.strokeStyle = "#00fcff"; 	
	c.beginPath();
	c.moveTo(x2d,y2d); 
	c.lineTo(x2d+scale,y2d); 
	c.stroke(); 
	
}


document.onmousemove = updateMouse;
//canvas.addEventListener('mousemove', updateMouse, false);

var points = [];

function initPoints()
{
	for (i=0; i<numPoints; i++)
	{
		point = [(Math.random()*400)-200, (Math.random()*400)-200 , (Math.random()*400)-200 ];
		points.push(point); 
	}

}

function render() 
{

	c.fillStyle="rgb(0,0,0)";
  	c.fillRect(0,0, SCREEN_WIDTH, SCREEN_HEIGHT);
  	
	for (i=0; i<numPoints; i++)
	{
		point3d = points[i]; 
		rotatePointAroundY(point3d, mouseX*-0.00008); 
		point3d[2] += (mouseY*0.02); 	
		
		
		if(point3d[0]<-300) point3d[0] = 300; 
		else if(point3d[0]>300) point3d[0] = -300; 
		if(point3d[2]<-fov) point3d[2] = fov; 
		else if(point3d[2]>249) point3d[2] = -249;
		
		draw3Din2D(point3d); 

	}
}

function rotatePointAroundY(point3d, angle)
{
	x = point3d[0]; 
	z = point3d[2]+fov; 
	
	cosRY = Math.cos(angle);
	sinRY = Math.sin(angle);
	tempz = z; 
	tempx = x; 

	
	x= (tempx*cosRY)+(tempz*sinRY);
	z= (tempx*-sinRY)+(tempz*cosRY);
	point3d[0] = x; 
	point3d[2] = z-fov; 
}

function updateMouse(e) 
{
	//alert(c+" "+c.offsetLeft); 
	mouseX = e.pageX - canvas.offsetLeft - HALF_WIDTH; 
	mouseY = e.pageY - canvas.offsetTop - HALF_HEIGHT; ; 
}

initPoints();

var loop = setInterval(function(){render();}, 50);

}