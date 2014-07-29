$(document).ready(function() {
        tinyMCE.init({
            mode: "exact",
            theme: "advanced",
            elements: "description",
            invalid_elements: "a,table,tr,td,img",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_buttons1: "bold,italic,underline,separator,bullist,numlist",
            theme_advanced_buttons2: "",
            theme_advanced_buttons3: "",
            force_br_newlines: false,
            paste_data_images: false,
            height: 250,
            width: 500,
            force_p_newlines: false,
            forced_root_block: '',
            plugins: "paste",
            theme_advanced_buttons3_add: "pastetext,pasteword,selectall",
            paste_auto_cleanup_on_paste: true,
            //            paste_text_sticky : true,
            //select pasteAsPlainText on startup
            setup: function(ed) {
                // na zacatku zapnout fci 'vlozit jako plain text'
                ed.onInit.add(function(ed) {
                    if (tinymce.dom.Event.add(ed.getBody().parentNode, "dragover", function(e) {
                        tinymce.dom.Event.cancel(e);
                        if (pasteFromWordCounter <= 0) {
                            window.setTimeout('tinyMCE.selectedInstance.execCommand("mcePasteWord",true)', 1);  //this was mcePasteText for some reason
                            pasteFromWordCounter++;
                        }
                    }))
                        ;
                    ed.pasteAsPlainText = true;
                });
            },
            paste_preprocess: function(pl, o) {
                // Content string containing the HTML from the clipboard
                o.content = o.content;
            },
            paste_postprocess: function(pl, o) {
                // Content DOM node containing the DOM structure of the clipboard
                o.node.innerHTML = o.node.innerHTML;
            }
        });
    });