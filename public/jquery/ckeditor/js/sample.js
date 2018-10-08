/* ----------- */
/* ---- Configuracion del CkEditor ---- */
/* ----------- */
if (CKEDITOR.env.ie && CKEDITOR.env.version < 9)
    CKEDITOR.tools.enableHtml5Elements(document);

var initSample = (function () {    
    var wysiwygareaAvailable = isWysiwygareaAvailable();
    return function () {
        var editorElement = CKEDITOR.document.getById('editor');
        if (wysiwygareaAvailable) {
            CKEDITOR.replace('editor', {
                customConfig: 'js/config.js'
            });
        } else {
            editorElement.setAttribute('contenteditable', 'true');
            CKEDITOR.inline('editor');
        }
    };
    function isWysiwygareaAvailable() {
        if (CKEDITOR.revision == ('%RE' + 'V%')) {
            return true;
        }
        return !!CKEDITOR.plugins.get('wysiwygarea');
    }
})();

