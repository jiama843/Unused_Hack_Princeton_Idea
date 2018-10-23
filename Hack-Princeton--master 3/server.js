var express = require("express");
var app 	= express();

//store all html in the view folder
app.use(express.static(__dirname + '/view'));
//store all JS files 
app.use(express.static(__dirname + '/view' + '/js'));
//store css files
app.use(express.static(__dirname + '/view' + '/css'));
//store all the image files
app.use(express.static(__dirname + '/view' + '/img'));
//store contactform
app.use(express.static(__dirname + '/view' + '/contactform'));
//store fonts
app.use(express.static(__dirname + '/view' + '/fonts'));

//the home page
app.get('/',function(req,res){
	res.sendFile('index.html');
});

app.get('/teach or student',function(req,res){
	res.sendFile('CoachOrStudent.html')
});

app.get('/sudent',function(req,res){
	res.sendFile('StudentLogin.html')
});

app.get('/teacher',function(req,res){
	res.sendFile('CoachLogin.html')
});

app.listen(8888);

