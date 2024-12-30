
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
<input type="hidden" name="content_latin" id="quillContent">
<div id="editor">
</div>
  
<script>
  const quill1 = new Quill('#editor', {
    placeholder: 'Masukkan Arti untuk Editor 1',
    theme: 'snow',
  });

  quill1.on('text-change', function() {
    document.getElementById('quillContent1').value = quill1.root.innerHTML;
  });
</script>