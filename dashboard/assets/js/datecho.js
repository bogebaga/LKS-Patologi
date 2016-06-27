$(document).ready(function()
{      
        $('#upload_file').change(function()
            {
                if (typeof (FileReader) != "undefined") 
                {
                    var image_preview = $("#image_preview");
                    var regex =/^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    
                    image_preview.html("");
                    $($(this)[0].files).each(function() 
                    {
                        var file = $(this);                        
                        if (regex.test(file[0].name.toLowerCase())) 
                            {
                                var reader = new FileReader();
                                reader.readAsDataURL(file[0]);

                                reader.onloadend = function() 
                                {
                                    $('#image_preview').css("background-image","url("+this.result+")");
                                };

                            }
                        else 
                            {
                                alert(file[0].name + " is not a valid image file.");
                                image_preview.html("");
                               return false;
                            }
                    });
                }
                else
                {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        // create DatePicker from input HTML element
        $("#todaydate").kendoDatePicker({
            format: "dd/MM/yyyy"
        });

		$("#birthdate").kendoDatePicker({
    	    format: "dd/MM/yyyy"
    	});

        $("#timepicker").kendoTimePicker();
        $("#jamverI").kendoTimePicker();
        $("#jamverII").kendoTimePicker();
        $("#jamval").kendoTimePicker();
        
        function startChange(){
            var startTime = start.value();

            if(startTime)
            {
                startTime = new Date(startTime);

                end.max(startTime);

                startTime.setMinutes(startTime.getMinutes() + this.options.interval);

                end.min(startTime);
                end.value(startTime);

            }
        }
            // initial start timepicker
            var start = $("#jammulai").kendoTimePicker({
                change: startChange
            }).data("kendoTimePicker");

            // initial end timepicker
            var end = $("#jamakhir").kendoTimePicker().data("kendoTimePicker");

            // set max/min start
            start.min("6:00 AM");
            start.max("5:30 AM");

            // set max/min end
            end.min("6:00 AM");
            end.max("5:30 AM");      
             
        
            //Disable on CLICK event handler listener
             $('#cb_cairan').click(function(){
                    $('#txt_cairan').attr('disabled', !this.checked).val($this);
                });

             $('#cb_arteri').click(function(){
                    $('#txt_arteri').attr('disabled', !this.checked).val($this);
                });

             $('#cb_tabung').click(function(){
                    $('#txt_tabung').attr('disabled', !this.checked).val($this);
                });                    

             $('#cb_anali').click(function(){
                    $('#txt_anali').attr('disabled', !this.checked).val($this);
                });

            //DISABLE CLICK event handler listerner
             $('#cb_cairan_hijau').click(function(){
                    $('#txt_cairan_hijau').attr('disabled', !this.checked).val($this);
                });

             $('#cb_arteri_hijau').click(function(){
                    $('#txt_arteri_hijau').attr('disabled', !this.checked).val($this);
                });

             $('#cb_tabung_hijau').click(function(){
                    $('#txt_tabung_hijau').attr('disabled', !this.checked).val($this);
                });                    

             $('#cb_anali_hijau').click(function(){
                    $('#txt_anali_hijau').attr('disabled', !this.checked).val($this);
                });

            //change ON live keypress
              $('#input_no_medik').keyup(function(){
                $('.tablex').closest('td').children('span').attr('no_rekmed',$(this).val());
                $('.tablex-hijau').closest('td').children('span').attr('no_rekmed',$(this).val());
            });

            //set input popup or inline mode
            $.fn.editable.defaults.mode = 'popup';

            //use bootstrap editable include with attr class
            $('.tablex').editable();
            $('.tablex-hijau').editable();

            //Live save
            $(document).on('click','.editable-submit', function(){
                var key = $(this).closest('td').children('span').attr('key');
                var x = $(this).closest('td').children('span').attr('no_rekmed');
                var y = $('.input-sm').val();

                $.ajax({
                    url: "proses?no_rekmed="+x+"&data="+y+"&key="+key,
                    type: 'GET'
                });
            });
            
            //closest to next td
            $('.tablex').on('save', function(){
                var that = this;
                    $(that).closest('td').next().find('.tablex').editable('show');
            });

            $('.tablex-hijau').on('save',function(){
                var that = this;
                    $(that).closest('td').next().find('.tablex-hijau').editable('show');
            });
});