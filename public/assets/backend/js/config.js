
function _toastMsg(text = null, icon ='error', timer=2000, button=false){
    swal({
        title: manageTile(icon),
        text,
        icon,
        button,
    });

    setTimeout(() => swal.close(), timer);
}


function manageTile(icon){

    let title='';
    switch (icon) {
        case 'success':
            title = "Well done!";
            break;
        case 'error':
            title = "Error!";
            break;
        case 'info':
            title = "Good Job!";
            break;
    }

    return title;
}


function fieldError(responseJSON, field = "") {
    //_toastMsg(res?.msg,'success');
    if (responseJSON?.errors.hasOwnProperty(field)) {
        _toastMsg(responseJSON?.errors[field][0], 'error');
    }
}


function showModal(selector=null)
{
    if(selector){
        $(selector).modal('show');
    }
}

function hideModal(selector=null)
{
    if(selector){
        $(selector).modal('hide');
    }
}


function ajaxFormToken(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}


function ajaxRequest(obj, { reload, timer , html }){

    $.ajax({
        ...obj,
        success(res){
            console.log(res);
            if(res?.success){
                _toastMsg(res?.msg ?? 'Success!', 'success');

                if(reload){
                    if(timer){
                        setTimeout(() => {
                            location.reload()
                        }, timer);
                    }else{
                        location.reload()
                    }
                }

                if(res?.data){
                    data = res?.data
                }
            }else{
                _toastMsg(res?.msg ?? 'Something wents wrong!');
            }

            
        },
        error(err){
            // setTimeout(() => {
            //     location.reload()
            // }, 1000);
            console.log(err);
            _toastMsg((err.responseJSON?.msg) ?? 'Something wents wrong!')
        },
    });

}


function globeInit(arr=[]){

    let selectPattern   = /select/gim;
    let datePattern     = /date/gim;

    if(arr.length){
   
        arr.forEach(elem => {

            if(selectPattern.test(elem.type)){
                console.log(selectPattern.test(elem.type));
                const { dropdownParent, selector, selectedVal, width , tags} = elem;
                $(selector).select2({
                    width           : width ?? '100%' ,
                    theme           : 'bootstrap4',
                    tags            : tags ?? false,
                    dropdownParent,
                }).val(selectedVal).trigger('change')
            }
            else if(datePattern.test(elem.type)){
                const { selector, format} = elem;
                $(selector).datepicker({
                    autoclose       : true,
                    clearBtn        : false,
                    todayBtn        : true,
                    todayHighlight  : true,
                    orientation     : 'bottom',
                    format          : format ?? 'yyyy-mm-dd',
                })
            }
        });
    }
}



function fileRead(elem, src = '#img-preview') {
    if (elem.files && elem.files[0]) {
        let FR = new FileReader();
        FR.addEventListener("load", function (e) {
            $(document).find(src).attr('src', e.target.result);
        });

        FR.readAsDataURL(elem.files[0]);
    }
}      


function fileToUpload(selector = '#img-preview', defaultSrc=false) {
    const pattern = /base64/im;

    if (defaultSrc){
        $(document).find(selector).attr('src', defaultSrc);  
    }
    
    const file    = $(document).find(selector).attr('src');
    return pattern.test(file) ? file : null;
}




function capitalize(str=""){
    return str.replace('_', ' ').split(' ').map(x => {
        return (x.charAt(0).toUpperCase() + x.substr(1, x.length))
    }).join(' ')
}




$(document).ready(function(){
    $("body").tooltip({ selector: '[data-bs-toggle=tooltip]' });
});





var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function () { scrollFunction() };

function scrollFunction() {

    if (mybutton){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
            $("nav").addClass("sticky");
        } else {
            mybutton.style.display = "none";
            $("nav").removeClass("sticky");
        }
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



