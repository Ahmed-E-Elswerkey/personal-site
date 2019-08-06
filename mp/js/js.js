
function $(e,t){
	if(t == 'id' && document.getElementById(e) != undefined){
		return document.getElementById(e);
	}
	if(t == 'class' && document.getElementsByClassName(e) != undefined){
		return document.getElementsByClassName(e);
	}
}

var over = false;
function hide_all(){
	var o_i = $('op-icon','class');
	// console.log(o_i.length);
	for(var i =1;i<=o_i.length;i++){
		if($('m-'+i,'id').style.display != 'none' && over && document.getElementById('m-'+i) != undefined)
			 $('m-'+i,'id').style.display = 'none';
	}
	
}

function show_hide(e,d){
	var id = e.getAttribute('id');
	if($('m-'+id,'id').style.display != d)
		$('m-'+id,'id').style.display = d;
	else if($('m-'+id,'id').style.display != 'none')
			 $('m-'+id,'id').style.display = 'none';
}

window.onload = function(){

	document.body.addEventListener('click',function(){hide_all();});
	//-------------CHAT PAGE------------
	var s_b = $('show_button','class');
	for(var i =0;i<s_b.length;i++){
		s_b[i].addEventListener('click',function(){show_pass(s_b[i].getAttribute('data-num'));});
	}

	var o_i = $('op-icon','class');
	// console.log(o_i.length);
	for(var i =0;i<o_i.length;i++){
		o_i[i].addEventListener('click',function(){show_hide(this,'inline')});
		o_i[i].addEventListener('mouseover',function(){over=false;
			// console.log('ov'+this.getAttribute('id'));
		});
		o_i[i].addEventListener('mouseleave',function(){over=true;
			// console.log('le'+this.getAttribute('id'));
		});
	}
	//----------------------------

	//-----------SETTINGS PAGE----------
	var s_d = $('sl-do-bu','class');
	for(var i =0;i<s_d.length;i++){
		s_d[i].addEventListener('click',function(){
			var E_list = $(this.getAttribute('data-id'),'id').classList;
			if(E_list.contains('slide-down'))
				E_list.remove('slide-down');
			else if(!E_list.contains('slide-down'))
				E_list.add('slide-down');
		});
		console.log('asd');
	}

}



function show_pass(n){
	if($('show_pass'+n,'id').getAttribute('type') == 'passowrd')
		$('show_pass'+n,'id').setAttribute('type','text');
	else $('show_pass'+n,'id').setAttribute('type','password');
	return false;
}