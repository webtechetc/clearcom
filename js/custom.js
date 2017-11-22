// // back to top function
  if ( ($(window).height() + 100) < $(document).height() ) {
    $('#top-link-block').removeClass('hidden').affix({
        // how far to scroll down before link "slides" into view
        offset: {top:100}
    });
}

function downloadFiles(id)
{
 //var files = jQuery('#'+id).val();
  document.getElementById(id).submit(); 

}