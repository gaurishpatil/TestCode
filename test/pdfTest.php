<input type="button" value="Print" onClick="document.getElementById(pdfDocument).print();">
<object data="brochure.pdf" type="application/pdf" width="50%" height="70%" id="pdfDocument">
  <p>Alternative text - include a link <a href="myfile.pdf">to the PDF!</a></p>
</object>
<script type="text/javascript">
    function printDocument(documentId) {

        //Wait until PDF is ready to print
        if (typeof document.getElementById(documentId).print == 'undefined') {

            setTimeout(function(){printDocument(documentId);}, 1000);

        } else {

            var x = document.getElementById(documentId);
            x.print();
        }
    }
</script>