var blogData = [];
var url = window.location.href;
var title = url.split('/');
var u = "http://dorcondos.com/blog/";
$(document).ready(function () {
	 $.getJSON('../js/blog-data.json', function (data) {
                blogData = data;
                loadPast();
                getUrl(title[title.length-1].split('.')[0]);
            });
});


function getUrl(t){
	var index;
	for(i=0;i<blogData.length;i++){
		if (blogData[i].title == t.replace(/-/g,' ')) {
			index = i;
		}
	}
	indicator(index);
}

function loadblog(title,id){	

	var url = "http://dorcondos.com/blog/";
	var name = title.getAttribute("data").split(",")[0];
	id = title.getAttribute("data").split(",")[1];
	window.open(url+name, "_self");
}



function loadPast(){
	var pastblog='';
	for (i=blogData.length-1;i>blogData.length-4;i--){
		pastblog += '<div onclick="loadblog(this)" data="'+blogData[i].title.replace(/ /g,'-')+','+ blogData[i].id+'"><div style="height:232px;width:100%;background-image:url(../images/blog/'+blogData[i].thumbnail+'.jpg); background-size:cover;background-position:center;background-repeat:no-repeat;"></div><div class="blog-info"><p>'+blogData[i].date+'</p><h3>'+blogData[i].title+'</h3></div></div>';
	}
	
	$('#past-blog').html(pastblog);
}

// function next(id){

// console.log('test');
// 	var i = id.getAttribute("data");
// 	console.log(i);
// 	if(i==0){
// 	console.log(i);
// 	window.open(u+blogData[blogData.length-1].title.replace(/ /g,'-')+'.php',"_self");
// 	indicator(blogData.length-1);
// 	}
// 	else{
// 	window.open(u+blogData[blogData.length-1].title.replace(/ /g,'-')+'.php',"_self");
// 	indicator(i-1);
// }
// }

function next(id){


	var i = id.getAttribute("data");
	var url = "http://dorcondos.com/blog/";
	if(i>0){
	window.open(url+blogData[i-1].title.replace(/ /g,'-')+'.php',"_self");
	}else{
	window.open(url+blogData[blogData.length-1].title.replace(/ /g,'-'),"_self");
	}
}


function indicator(index){
	var indicator = '';
	for(i=blogData.length-1;i>blogData.length-4;i--){
		if(index == i){
		indicator +='<img onclick="loadblog(this)" data="'+blogData[i].title.replace(/ /g,'-')+','+ blogData[i].id+'" id="'+i+'" src="../images/blog/deactive.png" width="15" style="cursor:pointer;">';
	}else{
		indicator +='<img onclick="loadblog(this)" data="'+blogData[i].title.replace(/ /g,'-')+','+ blogData[i].id+'" id="'+i+'" src="../images/blog/active.png" width="15" style="cursor:pointer;">';
	}
	}
	console.log(index);
	indicator += '<p onclick="next(this)" data="'+index+'" style="display:inline-block;color:#c89316;font-family:Raleway, sans-serif;font-style:italic;margin-left:10px;cursor:pointer;">View Next Post</p>';
	$('#indicator').html(indicator);
	}




