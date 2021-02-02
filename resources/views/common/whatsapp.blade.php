<!--Div where the WhatsApp will be rendered-->
<div id="WAButton" style="border-radius: 50%; z-index:1000"></div>
<script type="text/javascript">  
$(function() {
$('#WAButton').floatingWhatsApp({
phone: '584244545814', //WhatsApp Business phone number International format-
//Get it with Toky at https://toky.co/en/features/whatsapp.
headerTitle: '¡Write us by WhatsApp!', //Popup Title
popupMessage: 'Hello, ?', //Popup Message
showPopup: true, //Enables popup display
//    buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
headerColor: '#8ED825', //Custom header color
// backgroundColor: 'crimson', //Custom background button color
position: "right"    
});
});
</script>  