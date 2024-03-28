function CapNhatGiaTriCamBien(){
    var url = 'https://nckh.assfa.net/data.php';
    $.getJSON(url).done(function(data) {
        $.each(data, function (index, json) {  
            // var ThietBi = parseString(json.ThietBi);

            var giatrinhietdo = parseFloat(json.NhietDo);
            $("#GiaTriNhietDo").html(giatrinhietdo);
            var giatridoam	= parseFloat(json.DoAm);
            $("#GiaTriDoAm").html(giatridoam);
            var giatrianhsang	= parseFloat(json.AnhSang);
            $("#GiaTriAnhSang").html(giatrianhsang);

		});
    });
}


function ToggleRelay(){
    $.ajax({
        url: "toggleRelay.php",
        contentType: "application/json; charset=utf-8",
        type: "GET",
        complete: function () {		
            console.log("Toggle OK");	
            $.getJSON('relay.php').done(function(data) {
                $.each(data, function (index, json) {  
                    var relay = parseInt(json.Relay1);
                    if(relay == 1){
                        console.log("ON");
                        // $("#ButtonRelay1").html("ON");
                        document.getElementById('ButtonRelay1').src = '/img/IMGBtnOn.png';
                    }
                    else if(relay == 0){
                        console.log("OFF");
                        // $("#ButtonRelay1").html("OFF");
                        document.getElementById('ButtonRelay1').src = '/img/IMGBtnOff.png';
                    } 
                });
            });
		},
        error: function (){
            console.log("Toggle Error");
        }
    });
}