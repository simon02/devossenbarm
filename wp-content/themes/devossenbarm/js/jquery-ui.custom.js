( function( $ ) {
  var dateFormat = 'yy-mm-dd';

  var addDatePicker = function (element) {
    var options = {
      minDate: new Date()
    };
    var altField = element.data('alt-field');
    if (altField) {
      options['altField'] = $(altField);
      options['altFormat'] = dateFormat;
    } else {
      options['dateFormat'] = dateFormat;
    }
    return element.datepicker(options);
  }

  $('input[rel="datepicker"]').each(function() {
    addDatePicker($(this));
  });

  from = addDatePicker($('#arrival'))
    .on('change', function() {
      to.datepicker( "option", "minDate", getDate( $(this) ) );
    });
  to = addDatePicker($('#departure'))
    .on('change', function() {
      from.datepicker( "option", "maxDate", getDate( $(this) ) );
    });

  function getDate( element ) {
    var date;
    if (element.data('alt-field')) {
      element = $(element.data('alt-field'))
    }
    try {
      date = $.datepicker.parseDate( dateFormat, element.val() );
    } catch( error ) {
      date = null;
    }

    return date;
  }
} )( jQuery );