// 클래스 관리

tinymce.init({
    selector: 'textarea',
    height: 350,
    menubar: ' false',
    plugins: 'text',
    resize: false,
    toolbar_location:'top',
    toolbar:
    'bold italic '+' alignleft aligncenter alignright alignjustify  bullist numlist outdent indent',
    setup: (editor) => {
     editor.ui.registry.addContextToolbar('textselection', {
        predicate: (node) => !editor.selection.isCollapsed(),
        items: 'fontsizeselect | formatselect | fontselect ',
        position: 'selection',
      });
    },
    content_style: 'body { margin: 2rem 10%; font-family:Helvetica,Arial,sans-serif; font-size:16px; }'
  });