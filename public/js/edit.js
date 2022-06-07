    var titulo;
    
    var original_name;
    var original_email;

    var name_btn;
    var email_btn;

    var input_name;
    var input_email;

    var edit_options_name;
    var edit_options_email;

    var btn_confirm_name;
    var btn_cancelar_name;
    var btn_confirm_email;
    var btn_cancelar_email;
    
    window.onload=function() {
        titulo=document.getElementById('titulo');

        name_btn=document.getElementById('btn_nombre');
        email_btn=document.getElementById('btn_email');

        input_name=document.getElementById('nombre');
        input_email=document.getElementById('email');

        original_name=input_name.value;
        original_email=input_email.value;

        edit_options_name=document.getElementById('edit_nombre');
        edit_options_email=document.getElementById('edit_email');

        btn_confirm_name=document.getElementById('btn_confirm_name');
        btn_cancelar_name=document.getElementById('btn_cancelar_name');
        btn_confirm_email=document.getElementById('btn_confirm_email');
        btn_cancelar_email=document.getElementById('btn_cancelar_email');
        
        eventos();
        
    }
    function eventos(){
        name_btn.addEventListener('click',()=>{
            input_name.disabled=false;
            name_btn.hidden=true;
            edit_options_name.hidden=false;
        });
        email_btn.addEventListener('click',()=>{
            input_email.disabled=false;
            email_btn.hidden=true;
            edit_options_email.hidden=false;
        });
        btn_cancelar_name.addEventListener('click',()=>{
            input_name.value=original_name;
            input_name.disabled=true;
            name_btn.hidden=false;
            edit_options_name.hidden=true;
        });
        btn_cancelar_email.addEventListener('click',()=>{
            input_email.value=original_email;
            input_email.disabled=true;
            email_btn.hidden=false;
            edit_options_email.hidden=true;
        });
        
        btn_cancelar_name.addEventListener('click',()=>{
            input_name.value=original_name;
            input_name.disabled=true;
            name_btn.hidden=false;
            edit_options_name.hidden=true;
        });
    }
    
            