function __lernard_form_init__(){
    decorateSubmitButton = () => {
        stringWitdth = $(".string-textfield").width();
        stringHeight = $(".string-textfield").height();

        $(".lernard-form-sumbit").css({'width': stringWitdth+ "px", 'height': stringHeight+ "px"});
    }

    $(document).ready(function() {
        decorateSubmitButton();

    });

    $(window).on('resize', decorateSubmitButton);

    $(".lernard-form-close-button").on('click', () => {
        console.log("HIDE!")
        $(".lernard-window-fixed").css({"display":"none"});
    })
}




__lernard_form_init__()

