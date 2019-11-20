
function $(s){
    return document.getElementById(s);
}

function toggle(s){
    // xml_request("demo-form","demo_form");
    if($(s).style.display == "none"){
        $(s).style.display = "flex";
        document.body.style.overflow="hidden";
        S = s;
    }
    else{ 
        S = "";
        $(s).style.display = "none";
        document.body.style.overflowY="scroll";
    }
}

function xml_request(t_string,text_in){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(this.status == 200){
            $(text_in).innerHTML = this.responseText;
        }
    }
    xml.open("post","funcs.php?t=" + t_string,true);
    xml.send();
}

function others(e){
    console.log(e.value);
    if(e.value == "other"){
        $("other").style.display = "block";
        $("other").childNodes[3].focus();
    }
    else $("other").style.display = "none";
}

//------sign form stuff------
window.onload = function(){
    if($("sign") != undefined){
        over_leave("sign_i_u");
        over_leave("sign_in_b");
        over_leave("sign_up_b");
    }
    over_leave("demo_button");
    over_leave("demo_div");
    document.body.addEventListener("click",function(){over_leave("body")});
    
    firebase.firestore().collection('projects').get().then(doc=>{
        doc.forEach(d=>{
            console.log('asd')
            document.getElementById('projects_con').innerHTML += `\
                <div class='project' style='background-size:cover;'>\
                    <div><img src='./uploads/${d.id}.jpg' alt='${d.id}'>
                        <p class='info'>${d.data().info}</p>\
                    </div>\
                    <div class='' style='background-size:cover;'>\
                        <a href='${d.data().link}'>${d.id}</a>\
                        <div>${d.data().tags}</div>\
                    </div>\
                </div>`
        })
    })

}

var on = false,S = "";
function over_leave(s){
    if(s != "body"){
        $(s).addEventListener("mouseover",function(){on=true;});
        $(s).addEventListener("mouseleave",function(){on=false;});
    }
    else 
        if(!on)
            if(S != ""){
                toggle(S);
            }
}

function project_mouse(id,t){
	if(t == 'over'){
		$("project_" + id).style.display = 'table';
	}
	if(t == 'leave'){
		$("project_" + id).style.display = 'none';

	}
}

//-------------hover on projects---------------
function projects_con(ol){
    console.log("ol!");
    var css = document.getElementsByTagName("style")[0];
    if(ol == 'over')
        if(css != undefined || css != null){
            css.innerHTML += ".project{filter:grayscale();} .project:hover{filter:none;}";
        }
        else {
            document.getElementsByTagName("head")[0].innerHTML += "<style></style>";
            css.innerHTML += ".project{filter:grayscale();} .project:hover{filter:none;}";
        }
    if(ol == 'leave'){
        if(css != undefined || css != null){
            css.innerHTML += ".project{filter:none;} .project:hover{opacity:1;}";
        }
        else {
            document.getElementsByTagName("head")[0].innerHTML += "<style></style>";
            css.innerHTML += ".project{filter:none;} .project:hover{opacity:1;}";
        }
    }
}



function sendMessage(e){
    firebase.firestore().collection('messages').add({
        'title':e.children[0].value,
        'message':e.children[1].value,
        'mail':e.children[2].value
    })
    e.children[2].value = e.children[1].value = e.children[0].value = ''
    toggle('demo_form')
    return false
}