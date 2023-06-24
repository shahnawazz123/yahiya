
  $('.bootstrap-date-picker').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    todayHighlight: true,
    // Additional configuration options
    startDate: '2023-01-01',
    endDate: '2023-12-31',
    daysOfWeekDisabled: [0, 6],
    datesDisabled: ['2023-01-15', '2023-02-20'],
    minViewMode: 'months',
    startView: 'months',
    clearBtn: true,
    todayBtn: true,
    disableTouchKeyboard: true,
    orientation: 'auto',
    templates: {
      // Override the default templates if needed
    }
  });


/* set the attributes in input field of date
    app\assets\DatePickerAsset::register($this);
	<input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy">
		data-provide="datepicker" 
		data-date-autoclose="true" 
		data-date-format="dd/mm/yyyy"
		data-start-date="2023-01-01"
*/