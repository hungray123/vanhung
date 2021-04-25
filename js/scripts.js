	
	$(document).ready(function() {
		$('.menu-toggles').on('click', function() {
			$('.navs').toggleClass('showing');
		
		 });
 });
 
 //quay lên trên
 $(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});
	
	
	// //xac dinh phan tu bi tac dong
	// var jchonmua=document.getElementsByTagName("btn");
	// //bat su kien
	// for(var i=0; i< jchonmua.length;i++){
	// 	jchonmua[i].addEventListener("click",function(){
	// 		var jproduct= this.parentElement;
	// 	var jproductChild=jproduct.children;

	// 		var jproductChild=jproduct.children;
	// 		alert(jproductChild[0].innerHTML);
	// 		alert(jproductChild[1].innerHTML);
	// 		alert(jproductChild[2].innerHTML);
	// 		alert(jproductChild[3].innerHTML);
	// });
	// }
	 


	//var jfruit=document.getElementById('fruit');
	
	//var jshow=document.getElementById('btnShowF');
	//var data=['chuoi','cam','chanh'];
	//jshow.addEventListener('click', display);
	//function display(){
	//	  if(jfruit.value =="")
	//	  {
	//		  alert("ban chua nhap");
	//	  }
	//	  else{
	//		  for(i=0;i<data.length;i++){
	//			  if(jfruit.value==data[i]){
	//				document.getElementById("vungchua").innerHTML = '<img src="image/'+ jfruit.value +'.jpg'+'">';
	//				break;
	//			  }
	//			  else{
	//				   if(i==data.length-1){
	//					alert("khong co trong danh sach.Xin hay nhap lai");

	//				   }
					  
	//			  }
	//		  }
	//	  }

	//}
// //xac dinh phan tu bi tac dong
// 	var jchonmua=document.getElementsByTagName('btn');
// 	//bat su kien
// 	for(var i=0;i<jchonmua.length;i++){
// 		jchonmua[i].addEventListener('click',function(){
// 			var jproduct= this.parentElement;
// 		var jproductChild=jproduct.children;

// 			var jproductChild=jproduct.children;
// 			alert(jproductChild[0].innerHTML);
// 			alert(jproductChild[1].innerHTML);
// 			alert(jproductChild[2].innerHTML);
// 			alert(jproductChild[3].innerHTML);
// 	});
// 	}
	
	

	
	
	
	//var i = 0;
  //  function add() {
		
  //      document.getElementById('quantity').value= ++i;
  //  }
	

